<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Notification extends Component
{
    protected $listeners = [
        'refreshNotification' => '$refresh'
    ];

    public $notifications;
    public $notificationsCounter;

    public function getNotifications()
    {
        $this->notifications = auth()->user()->unreadNotifications;
        $this->notificationsCounter = $this->notifications->count();

    }

    public function render()
    {
        $this->getNotifications();

        return view('livewire.components.notification');
    }
}
