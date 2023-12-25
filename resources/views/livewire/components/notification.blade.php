<div>
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button
                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                @if($notificationsCounter)
                    <span class="rounded-full p-1 bg-red-500 text-white">{{$notificationsCounter}}</span>
                @endif
                <span class="material-symbols-outlined">
                    notifications
                </span>
            </button>
        </x-slot>
        <x-slot name="content">
            @foreach($notifications as $notification)
                <div class="p-3 text-center">
                    <p>You have been tagged in a new post!</p>
                </div>
            @endforeach
        </x-slot>
    </x-dropdown>
</div>
