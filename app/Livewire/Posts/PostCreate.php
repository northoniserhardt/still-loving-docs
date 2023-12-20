<?php

namespace App\Livewire\Posts;

use App\Models\User;
use App\Notifications\PostCreated;
use Livewire\Component;
use Illuminate\Http\Request;

class PostCreate extends Component
{
    public $state = [
        'tagged_user_id' => null,
        'message' => ''
    ];

    public $users = null;

    public function mount()
    {
        $this->users = User::query()->get();
    }

    public function save(Request $request)
    {
        $this->validate([
            'state.message' => 'required|max:280',
            'state.tagged_user_id' => 'sometimes'
        ]);

        $request->user()->posts()->create($this->state);
        $request->user()->notify(new PostCreated($request->user()->id, $this->state));

        $this->reset('state');
        $this->dispatch('refreshPostList');
    }

    public function render()
    {
        return view('livewire.posts.post-create');
    }
}
