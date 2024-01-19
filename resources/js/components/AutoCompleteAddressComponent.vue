<template>
    <GMapAutocomplete @place_changed="setPlace" :placeholder="placeholder" >
    </GMapAutocomplete>
</template>
<script>
export default {
    name: 'AutoComplete',
    props:{
        placeholder: String,
    },
    data() {
        return {
            address:''
        }
    },
    methods: {
        setPlace(place) {
            this.address = this.getAddressObject(place.address_components)
            this.$emit('placeChanged',place,this.address)
        },
       getAddressObject(address_components) {
      var ShouldBeComponent = {
        home: ["street_number"],
        postal_code: ["postal_code"],
        street: ["street_address", "route"],
        region: [
          "administrative_area_level_1",
          "administrative_area_level_2",
          "administrative_area_level_3",
          "administrative_area_level_4",
          "administrative_area_level_5"
        ],
        city: [
          "locality",
          "sublocality",
          "sublocality_level_1",
          "sublocality_level_2",
          "sublocality_level_3",
          "sublocality_level_4"
        ],
        country: ["country"]
      };

      var address = {
        home: "",
        postal_code: "",
        street: "",
        region: "",
        city: "",
        country: ""
      };
      address_components.forEach(component => {
        for (var shouldBe in ShouldBeComponent) {
          if (ShouldBeComponent[shouldBe].indexOf(component.types[0]) !== -1) {
            if (shouldBe === "country") {
              address[shouldBe] = component.short_name;
            } else {
              address[shouldBe] = component.long_name;
            }
          }
        }
      });
      return address;
    }
    }
}
</script>