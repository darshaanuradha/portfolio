<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:2',
        'email' => 'required|email',
        'subject' => 'required|min:5',
        'message' => 'required|min:10'
    ];

    public function submitForm()
    {
        $this->validate();

        try {
            // Send email to the portfolio owner
            $recipientEmail = 'darsha.anuardha2020@gmail.com';

            // Prepare contact data
            $contactData = [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message
            ];

            // Send email
            Mail::to($recipientEmail)->send(new ContactFormMail($contactData));

            // Show success message
            session()->flash('message', 'Thank you for your message! I will get back to you soon.');
            
            // Reset form
            $this->reset(['name', 'email', 'subject', 'message']);

        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Contact form email error: ' . $e->getMessage());
            
            // Show user-friendly error message
            session()->flash('error', 'Sorry, there was an error sending your message. Please try again later or contact me directly.');
        }
    }

    public function render()
    {
        $personalInfo = PersonalInfo::first();

        return view('livewire.portfolio.contact', [
            'personalInfo' => $personalInfo
        ])->layout('layouts.app');
    }
}
