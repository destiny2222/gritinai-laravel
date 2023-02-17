<?php

namespace App\Http\Livewire;

use App\Mail\Saffmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Saff extends Component
{
    public function render()
    {
        return view('livewire.saff');
    }

    public $file, $email,$company,$training,$no_of_staff,$specify,$location,$start_date,$end_date,$body;

    protected function rules()
    {
        return [
            'email'=>['required','email'],
            'file'=>['required','string'],
            'company'=>['required','string'],
            'training'=>['required','string'],
            'no_of_staff'=>['required','string'],
            'specify'=>['required','string'],
            'location'=>['required','string'],
            'start_date'=>['required','date'],
            'end_date'=>['required','string'],
            'body'=>['required','string'],
        ];
    }

    public function resetInput(){
        $this->email = '';
        $this->file = '';
        $this->company = '';
        $this->location = '';
        $this->body = '';
        $this->start_date = '';
        $this->end_date = '';
        $this->training = '';
        $this->no_of_staff = '';
        $this->specify = '';
     }

     protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'specify'=> 'This field is required',
        'no_of_staff'=> 'This field is required',
        'training'=> 'This field is required',
        'file'=> 'This field is required',
        'end_date'=> 'This field is required',
        'start_date'=> 'This field is required',
        'body'=> 'This field is required',
        'location'=> 'This field is required',
        'company'=>'This field is required'
     ]; 

    public function updated($fields)
    {
        $this->validateOnly($fields);

    } 

    public function storeIdea(){
        $validatedData = $this->validate();
        // dd($validatedData);
        $saff = Saff::create($validatedData);
        Mail::to('gritinai@gmail.com')->send(new Saffmail($saff));
        $this->resetInput();
        session()->flash('message', 'Successfully Send.');
        // Alert::info('success',  'Send Successful');
        return redirect()->to('/saff');
    }
}

