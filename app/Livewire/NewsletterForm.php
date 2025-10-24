<?php

namespace App\Livewire;

use App\Models\NewsletterSubscriber;
use Livewire\Component;

class NewsletterForm extends Component
{
    public $email = '';

    //define validation rules
    protected $rules = [
        'email' => 'required|email|unique:newsletter_subscribers,email'
    ];

    //define custom error messages
    protected function message()
    {
        return [
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please provide a valid email address',
            'email.unique' => 'This email is already subscribed. Please use another one.'
        ];
    }

    //Real-time validation method
    public function updateEmail()
    {
        $this->validateOnly('email');
    }

    public function subscribe()
    {
        //Validate the email before processing the subscription
        $this->validate();

        //Save email into DB
        NewsletterSubscriber::create(['email' => $this->email]);

        //Clear input an Notify the user
        $this->email = '';
        $this->dispatch('showToasts', ['type' => 'success', 'message' => 'You have successfully subscribed!.']);
    }

    public function render()
    {
        return view('livewire.newsletter-form');
    }
}
