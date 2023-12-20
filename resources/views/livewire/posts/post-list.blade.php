<div>
    <div class="max-w-xl mx-auto mt-16">
        @foreach($posts as $post)
            <div class="bg-white p-6 rounded-md shadow-md text-center break-words mt-4">
                <p class="text-gray-700">
                    "{{$post->message}}"
                </p>
                <p class="text-blue-500 text-sm">{{ optional($post->taggedUser)->name ? '@'.$post->taggedUser->name : '' }}</p>
                <p class="text-end text-sm text-gray-500 mt-2">{{$post->user->name}}</p>
            </div>
        @endforeach
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Echo.private('App.Models.User.{{auth()->user()->id}}')
                .notification(() => {
                    console.log('chegou um evento');
                });
        });
    </script>
</div>
