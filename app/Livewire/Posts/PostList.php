<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class PostList extends Component
{
    protected $listeners = [
        'refreshPostList' => '$refresh'
    ];

    public $posts;

    public function render()
    {
        $this->posts = auth()->user()->posts()
            ->orWhere('tagged_user_id', auth()->user()->id)
            ->orderBy('id', 'desc')
            ->get();

        return view('livewire.posts.post-list');
    }
}
