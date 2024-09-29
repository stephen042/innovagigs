<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\GetUpdates;
use Carbon\Carbon;

class SubscribersTable extends Component
{
    public $subscribers;    

    public function mount()
    {
        $this->subscribers = GetUpdates::orderBy('created_at', 'desc')->get();
    }
    public function render()
    {
        return view('livewire.admin.subscribers-table');
    }
}
