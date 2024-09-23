<?php

namespace App\Livewire\Home;

use App\Models\GetUpdates as ModelsGetUpdates;
use Livewire\Component;

class GetUpdates extends Component
{
    public $email;

    public $message;
    public $error;

    public function getUpdates()
    {
        // Validate email format
        $validatedData = $this->validate([
            'email' => 'required|email',
        ]);

        // Check if the email already exists in the subscribers table
        $existingSubscriber = ModelsGetUpdates::where('email', $this->email)->first();

        if ($existingSubscriber) {
            // If email already exists, set the message
            $this->error = "You're already subscribed!";
        } else {
            // If not, save the new subscriber and set the success message
            ModelsGetUpdates::create(['email' => $this->email]);
            $this->message = "Thanks for subscribing with us!";
        }

        // Clear the email field after processing
        $this->reset('email');
    }
    public function render()
    {
        return view('livewire.home.get-updates');
    }
}
