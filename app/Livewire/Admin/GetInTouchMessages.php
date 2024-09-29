<?php

namespace App\Livewire\Admin;

use App\Models\GetInTouch;
use Livewire\Component;
use Carbon\Carbon;

class GetInTouchMessages extends Component
{
    public $messages;

    public function mount(){
        $this->messages = GetInTouch::orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.admin.get-in-touch-messages');
    }
}
