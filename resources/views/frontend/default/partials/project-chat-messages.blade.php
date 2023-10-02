
<div class="text-center">
    @if ($limit <= count($chats))
        <a href="javascript:void(0)" class="load-more mb-3 mt-3 text-primary fs-14 fw-500" onclick="loadMore()">{{ translate('Load More') }}</a>
    @endif
    <div class="spinner spinner-border text-secondary d-none" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
@foreach ($chats as $chat)
    <style>
        .chat-coversation .media-body .text{
            max-width: calc(100% - 50px);
            width: fit-content;
        }
        .chat-coversation.right .media-body .text{
            margin-left: auto;
        }
    </style>
    @if ($chat['sender_user_id'] == Auth::user()->id)
        @php
            $chatUser = app\Models\User::find($chat['sender_user_id']);
        @endphp
        @if ($chat['message'] != null)
            <div class="chat-coversation right">
                <div class="media">
                    <div class="media-body">
                        <div class="text text-right bg-soft-primary text-dark">{{ $chat['message'] }}</div>
                        <span class="time">{{ Carbon\Carbon::parse($chat['created_at'])->diffForHumans() }}</span>
                    </div>
                    <span class="avatar avatar-xs flex-shrink-0">
                        <img @if ($chatUser->photo != null) src="{{ custom_asset(($chatUser->photo))}}" @endif>
                    </span>
                </div>
            </div>
        @endif
    @else
        @php
            $chatUser = app\Models\User::find($chat['sender_user_id']);
        @endphp
        @if ($chat['message'] != null)
            <div class="chat-coversation">
                <div class="media">
                    <span class="avatar avatar-xs flex-shrink-0">
                        <img @if ($chatUser->photo != null) src="{{ custom_asset(($chatUser->photo))}}" @endif>
                    </span>
                    <div class="media-body">
                        <div class="text">{{ $chat['message'] }}</div>
                        <span class="time">{{ Carbon\Carbon::parse($chat['created_at'])->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        @endif
    @endif
@endforeach
