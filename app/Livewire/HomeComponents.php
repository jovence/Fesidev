<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponents extends Component
{
    public function render()
    {
        return view('livewire.pages.home.home-components')->layout('welcome');
    }
}
