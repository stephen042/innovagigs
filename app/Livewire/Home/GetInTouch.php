<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\GetInTouch as ModelsGetInTouch;

class GetInTouch extends Component
{
    public $success;
    public $error;

    public $name;
    public $email;
    public $message;

    public function getInTouch()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Convert email to lowercase
        $validatedData['email'] = strtolower($validatedData['email']);

        $query = ModelsGetInTouch::create($validatedData);

        if ($query) {
            $this->success = "Thanks for getting in touch! We'll get back to you soon.";
            return $this->reset('name', 'email', 'message');
        }

        $this->error = "Something went wrong, please try again!";
        return $this->reset('name', 'email', 'message');

    }
    public function render()
    {
        return view('livewire.home.get-in-touch');
    }
}
