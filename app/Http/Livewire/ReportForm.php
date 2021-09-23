<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;

class ReportForm extends Component
{
    public $title;
    public $email;
    public $description;
    public $success;
    protected $rules = [
        'title' => 'required|min:5',
        'email' => 'required|email',
        'description' => 'required|min:5',
    ];

    public function reportFormSubmit()
    {
        $report = $this->validate();

        Mail::send('mailing.report-email',
            array(
                'title' => $this->title,
                'email' => $this->email,
                'description' => $this->description,
            ),
            function ($message) {
                $message->from('domiwa@nieruchomosci.pl');
                $message->to('tom.frontz@gmail.com', 'DOMiwa')->subject('Wiadomość z formularza zgłoszenia');
            }
        );

        $this->success = 'Sukces!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->title = '';
        $this->email = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.report-form');
    }
}

