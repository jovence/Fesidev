<?php

namespace App\Livewire;

use Livewire\Component;

class EventComponents extends Component
{
    public function render()
    {
        return view('livewire.pages.events.event-components')->layout('welcome');
    }
}
