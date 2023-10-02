<script>
    const messaging = firebase.messaging();
    messaging.usePublicVapidKey("{{env('FCM_PUBLIC_VAPID_KEY')}}");

    const database = firebase.database();

    function sendTokenToServer(fcm_token) {
        const user_id = '{{auth()->user()->id}}';
        axios.post('{{ route("saveFcmToken") }}', {
            fcm_token, user_id
        })
        .then(function (response) {
            // console.log(response);
            console.log("User token updated successfully.");
        })
        .catch(function (error) {
            console.log(error);
        });
    }

    function retreiveToken() {
        messaging.getToken().then((currentToken) => {
            if (currentToken) {
                sendTokenToServer(currentToken);
            } else {
                alert('You should allow notification!');
            }
        }).catch((err) => {
            console.log(err.message);
        });
    }

    retreiveToken();
    messaging.onTokenRefresh(()=>{
        retreiveToken();
    });

    messaging.onMessage((payload)=>{
        console.log('Message received');
        // console.log(payload);
        
        var conversation_id = $('#conversation_id').val();
        var limit = $('#limit').val();
        loadChats(conversation_id, limit);
    });
</script>
<script type="text/javascript">
    function removeChatBox(){
        $('#project-chat-box').removeClass('active');
        $('#limit').val(20);
        $('#project_name').html('');
        $('#project_name').attr('title', '');
        $('#project_id').val('');
        $('#conversation_id').val('');
        $('#user_id').val('');
    }

    function showMessageBox(project_id , user_id, project_name){
        var conversation_id = '';
        var html = '<div class="d-flex justify-content-center align-items-center h-100"><div class="spinner spinner-border text-secondary" role="status"><span class="sr-only">Loading...</span></div></div>';
        $('#running_project_chat_body').html(html);
        $('#project-chat-box').addClass('active');
        $.post("{{ route('project_conversation') }}",{_token:'{{ csrf_token() }}', project_id: project_id}, function(data){
            $('#conversation_id').val(data.conversation_id);
            var conversation_id = data.conversation_id;
            var limit = $('#limit').val();
            loadChats(conversation_id, limit);
        });
        $('#limit').val(20);
        $('#project_name').html(project_name);
        $('#project_name').attr('title', project_name);
        $('#project_id').val(project_id);
        $('#user_id').val(user_id);
        $('#count-'+project_id).hide();
    }

    function loadChats(conversation_id, limit){
        const dbRef = firebase.database().ref();
        dbRef.child("project_chats").child(conversation_id).limitToLast(parseInt(limit)).get().then((snapshot) => {
            if (snapshot.exists()) {
                $.post("{{ route('project_chat_view') }}",{_token:'{{ csrf_token() }}', conversations: snapshot.val(), limit: limit, conversation_id:conversation_id}, function(data){
                    $('#running_project_chat_body').html(data);
                    var element = document.querySelector('#running_project_chat_body');
                    element.scrollTo(0, element.scrollHeight);
                });
            } else {
                $('#running_project_chat_body').html('<p class="fs-15 fw-500 text-center py-3">{{ translate('There is no chat yet.') }}</p>');
            }
        }).catch((error) => {
            console.error(error);
        });
    }

    function loadChatsWithotToBottom(conversation_id, limit){
        const dbRef = firebase.database().ref();
        dbRef.child("project_chats").child(conversation_id).limitToLast(parseInt(limit)).get().then((snapshot) => {
            if (snapshot.exists()) {
                $.post("{{ route('project_chat_view') }}",{_token:'{{ csrf_token() }}', conversations: snapshot.val(), limit: limit, conversation_id:conversation_id}, function(data){
                    $('#running_project_chat_body').html(data);
                });
            } else {
                $('#running_project_chat_body').html('<p class="fs-15 fw-500 text-center py-3">{{ translate('There is no chat yet.') }}</p>');
            }
        }).catch((error) => {
            console.error(error);
        });
    }

    function send_reply(e){
        if(e.which == 13 || e == 0) {
            if(e.which == 13) {
                e.preventDefault();
            }
            var project_id = $('#project_id').val();
            var user_id = $('#user_id').val();
            var message = $('#message').val();
            var conversation_id = $('#conversation_id').val();
            if(message.length > 0){
                writeUserData(project_id, conversation_id, user_id, message);
            }
        }
    }

    function writeUserData(project_id, conversation_id, user_id, message) {
        var sender_user_id = '{{ Auth::user()->id }}';
        var limit = $('#limit').val();
        var chatListRef = firebase.database().ref('project_chats/' + conversation_id);
        var newChatRef = chatListRef.push();
        newChatRef.set({
            project_id: project_id,
            sender_user_id: sender_user_id,
            receiver_user_id: user_id,
            message: message,
            created_at: '{{ date("Y-m-d h:i:s") }}'
        }, (error) => {
            if (error) {
                // The write failed...
                AIZ.plugins.notify('error', '{{ translate("Message sent failed!") }}');
            } else {
                // Data saved successfully!
                console.log('Message sent successfully!');
                $.post('{{ route('sendMessage') }}',{_token:'{{ csrf_token() }}', message:message, user_id:user_id, conversation_id:conversation_id}, function(data){
                    loadChats(conversation_id, limit);
                });
            }
            $('#message').val('').focus();
        });
    }

    function loadMore(){
        $('.load-more').addClass('d-none');
        $('.spinner').removeClass('d-none');
        var conversation_id = $('#conversation_id').val();
        var limit = $('#limit').val();
        if (Number.isInteger(parseInt(limit))) {
            limit = parseInt(limit)+20;
            $('#limit').val(limit);

            const interval_id = window.setInterval(function(){}, Number.MAX_SAFE_INTEGER);
            // Clear any timeout/interval up to that id
            for (let i = 1; i < interval_id; i++) {
                window.clearInterval(i);
            }
            loadChatsWithotToBottom(conversation_id, limit);
        }
    }
</script>