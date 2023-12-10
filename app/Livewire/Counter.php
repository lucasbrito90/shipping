<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $amount = 0;

    public function increment(): void
    {
        $this->amount++;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
