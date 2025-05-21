<?php

namespace App\Livewire;

use Livewire\Component;

class HealthAndWellness extends Component
{
    public function render()
    {
        return view('livewire.pages.health-and-wellness')->layout('welcome');
    }
}
