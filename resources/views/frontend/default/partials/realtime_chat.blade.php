<div id="project-chat-box" class="position-fixed">
    <h5 class="fs-14 fw-700 pl-3 pr-3 pt-3 mb-0 d-flex justify-content-between">
        <span class="project-name" title="" id="project_name"></span>
        <button class="bg-transparent border-0" onclick="removeChatBox()"><i class="las la-times"></i></button>
    </h5>
    <hr>
    <div class="chat-body c-scrollbar-light pl-3 pr-3" id="running_project_chat_body">
        
    </div>
    <div class="chat-footer border-top p-3 attached-bottom bg-white">
        <form id="send-mesaage" class="w-100">
            <div class="input-group">
                <input type="hidden" id="project_id" name="project_id" value="">
                <input type="hidden" id="conversation_id" name="conversation_id" value="">
                <input type="hidden" id="user_id" name="user_id" value="">
                <input type="hidden" id="limit" name="limit" value="20">
                <input type="text" class="form-control" name="message" id="message" onkeypress="send_reply(event)" placeholder="{{ translate('Your Message..') }}" autocomplete="off">
                <div class="input-group-append">
                    <button class="btn btn-primary btn-circle btn-icon" onclick="send_reply(0)" type="button">
                        <i class="las la-paper-plane"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>