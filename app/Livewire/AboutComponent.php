<?php

namespace App\Livewire;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.about.about-component')->layout('welcome');
    }
}
