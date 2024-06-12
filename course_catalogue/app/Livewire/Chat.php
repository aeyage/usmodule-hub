<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title("Chat")]
class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat');
    }
}
