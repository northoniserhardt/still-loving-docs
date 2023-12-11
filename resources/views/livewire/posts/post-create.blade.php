<div>
    <form class="grid grid-cols-2 max-w-xl mx-auto m-6" wire:submit.prevent="save">
        <textarea
            wire:model="state.message"
            placeholder="{{ __('Post Message') }}"
            class="col-span-2 w-full shadow rounded-lg border-gray-200"
        ></textarea>
        @error('state.message') <span class="error">{{ $message }}</span> @enderror

        <select wire:model="state.tagged_user_id" class="mt-4 border-gray-200 rounded-lg">
            <option value=""></option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        @error('state.tagged_user_id') <span class="error">{{ $message }}</span> @enderror

        <div class="flex justify-end">
            <button class="w-16 rounded-lg mt-4 bg-blue-500 shadow text-white">{{ __('Save') }}</button>
        </div>
    </form>
</div>
