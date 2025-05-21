<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectComponent extends Component
{
    public function render()
    {
        return view('livewire.pages.project.project-component')->layout('welcome');
    }
}
