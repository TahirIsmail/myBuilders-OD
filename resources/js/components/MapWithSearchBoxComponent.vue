<template>
    <div class="container">
        <GMapMap
            :center="mapCenter"
            :zoom="7"
            ref="myMapRef"
            :options="mapOptions"
            @click="handleMapClick"
            style="height: 20rem"
        >
            <GMapMarker
                v-for="(marker, index) in markers"
                :key="index"
                :position="marker.position"
                :title="marker.title"
                :clickable="true"
                :draggable="true"
                @click="openMarker(marker.id)"
                @closeclick="openMarker(null)"
            >
                <GMapInfoWindow
                    :position="marker.position"
                    :closeclick="true"
                    @closeclick="openMarker(null)"
                    :opened="openedMarkerID === marker.id"
                >
                    <div>
                        <p>Location Details:</p>

                        <p>Latitude: {{ marker.position.lat }}</p>
                        <p>Longitude: {{ marker.position.lng }}</p>
                        <p>Address: {{ marker.title }}</p>
                    </div>
                </GMapInfoWindow>
            </GMapMarker>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-input" style="margin-top: 2rem">
                            <label for="For the Job Location"
                                >Search through the job location</label
                            >
                            <div class="input-group">
                                <AutoComplete
                                    class="form-control"
                                    placeholder="Search the Job Location here"
                                    @placeChanged="handlePlace"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </GMapMap>
    </div>
</template>
<script>
import { ref, onMounted } from "vue";
import AutoComplete from "../components/AutoCompleteAddressComponent";

export default {
    components: {
        AutoComplete,
    },
    emits: ["markerSet"],
    setup(props, context) {
        const myMapRef = ref(null);
        const mapCenter = ref({ lat: 51.5, lng: 0.1167 });
        const mapOptions = ref({ disableDefaultUI: true });
        const markers = ref([]);
        const openedMarkerID = ref(null);

        const openMarker = (id) => (openedMarkerID.value = id);
        const handlePlace = (place, address) => {
            mapCenter.value = place.geometry.location.toJSON();
            addMarker(place.geometry.location, address);
        };

        const handleMapClick = (event) => {
            reverseGeocode(event.latLng, (address) => {
                addMarker(event.latLng, address);
            });
        };
        const reverseGeocode = (latLng, callback) => {
            const geocoder = new google.maps.Geocoder();
            geocoder.geocode({ location: latLng }, (results, status) => {
                if (status === google.maps.GeocoderStatus.OK) {
                    const address = results[0].formatted_address;

                    callback(address);
                } else {
                    console.error("Reverse geocoding failed:", status);
                }
            });
        };
        const addMarker = (position, title = "") => {
            if (markers.value.length > 0) {
                markers.value.pop(); // Remove previous marker
            }

            // Add the new marker
            markers.value.push({
                position: position.toJSON(),
                title: JSON.stringify(title),
            });
            console.log(markers.value);

            context.emit("markerSet", position, title);
        };

        const getCurrentLocation = () => {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        const { latitude, longitude } = position.coords;
                        mapCenter.value = { lat: latitude, lng: longitude };
                    },
                    (error) => {
                        console.error(
                            `Error getting current location: ${error.message}`
                        );
                    }
                );
            } else {
                console.error("Geolocation is not supported by this browser.");
            }
        };
        onMounted(() => {
            myMapRef.value = myMapRef.value || $refs.myMapRef.$mapObject;
            getCurrentLocation();
        });

        return {
            myMapRef,
            mapCenter,
            mapOptions,
            markers,
            openedMarkerID,
            handlePlace,
            handleMapClick,
            openMarker,
        };
    },
};
</script>
