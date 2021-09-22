<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();

        Mail::send('email',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
            ),
            function ($message) {
                $message->from('domiwa@nieruchomosci.pl');
                $message->to('tom.frontz@gmail.com', 'DOMiwa')->subject('Wiadomość ze strony DOMiwa');
            }
        );

        $this->success = 'Sukces!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
