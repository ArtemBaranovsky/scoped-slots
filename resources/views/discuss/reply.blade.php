@extends('layouts.app')

@section('content')

    {{--Edit Link--}}
<div class="forum-comment-edit-links tw-mb-6 tw-flex tw-justify-between">
    <reply-likes
        :reply-id="{{ $reply['id'] }}"
{{--        endpoint="{{ '/discuss/channels/'.$channel->slug.'/'.$conversation->slug.'/replies/'.$reply->id.'/likes' }}"--}}
        :initial-usernames="{{ $reply['likes']['username'] }}"
    ></reply-likes>
{{--    :reply-id="{{ $reply->id }}"--}}
{{--:initial-usernames="{{ $reply->likes->pluck('username') }}"--}}

    <div>
{{--        @if ($signedIn)--}}
            @unless (auth()->id() == $reply['user_id'])
{{--            @unless (auth()->id() == $reply->user_id)--}}
                <a class="tw-text-grey-dark tw-text-xs tw-font-bold tw-mr-4"
                    @click.prevent="$modal.show('leave-reply-modal', { mention: '{{ $reply['user']['username'] }}' })"

                >
                    Reply
                </a>
{{--            @click.prevent="$modal.show('leave-reply-modal', { mention: '{{ $reply->user->username }}' })"--}}

                <portal-target name="meta-links-{{$reply-id }}" slim></portal-target>

                <a class="tw-text-grey-dark tw-text-xs tw-font-bold tw-mr-4">Like</a>

{{--            url="/discuss/replies/{{ $reply->id }}/report"--}}
{{--                <report-spam-button--}}
{{--                    url="/discuss/replies/{{ $reply['id'] }}/report"--}}
{{--                >--}}
{{--                </report-spam-button>--}}
            @endunless
{{--        @endif--}}
    </div>

</div>
@endsection('content')
