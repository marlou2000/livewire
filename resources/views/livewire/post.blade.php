<div class="container m-auto mt-10">
    <button id="modify-post-btn" class="flex ml-5 mb-5 bg-slate-300 p-2 rounded text-sm">
        <svg class="rounded w-[20px] h-[20px] mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Modify Post
    </button>

    <button id="modify-done-btn" class="flex ml-5 mb-5 bg-slate-300 p-2 rounded text-sm hidden">
        <svg class="rounded w-[20px] h-[20px] mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Done
    </button>

    @foreach($posts as $post)
        <form id="form-post" method="POST">
            @csrf

            <input type="hidden" value="{{ $post->id }}" name='post_id' />

            <div class="bg-slate-200 mr-5 ml-5 p-5 rounded" id="post-container">
                <div class="flex mb-5">
                    <svg class="rounded w-[40px] h-[40px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <div class="ml-2">
                        {{ $post->user->username }}
                        <span class="flex text-[12px] italic">
                            <p class="mr-2">Date Posted: {{ date('Y-m-d g:ia', strtotime($post->created_at)) }}</p>
                            <p>Last Updated: {{ date('Y-m-d g:ia', strtotime($post->updated_at)) }}</p>
                        </span>
                    </div>
                </div>
                
                <h2>{{ $post->title }}</h2>

                <div class="rounded bg-slate-300 p-2 mt-1" id="body-container">
                    <textarea id="body" name="body" class="text-sm w-full bg-slate-300 outline-none" value="{{ $post->body }}" >{{ $post->body }}</textarea>
                </div>

                <div class="flex mt-4 ml-1 hidden" id="edit-delete-container">
                    <button id="edit-post-btn">
                        <svg class="pointer-events-none w-[18px] h-[18px] text-green-800 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </button>

                    <button id="delete-post-btn">
                        <svg class="pointer-events-none w-[18px] h-[18px] text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </button>
                </div>

                <div class="flex mt-4 ml-1 hidden" id="save-cancel-btn-container">
                    <button id="save-post-btn" type="submit">
                        <svg class="pointer-events-none w-[18px] h-[18px] text-green-800 mr-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
                        </svg>
                    </button>

                    <button id="cancel-post-btn">
                        <svg class="pointer-events-none w-[18px] h-[18px] text-red-800" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

            </div>
        </form>
    @endforeach

    <script src="{{ asset('js/post.js') }}"></script>
</div>
