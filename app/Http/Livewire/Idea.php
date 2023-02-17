<?php

namespace App\Http\Livewire;

use App\Mail\Idea as MailIdea;
use App\Models\Startup;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Idea extends Component
{
    public function render()
    {
        return view('livewire.idea');
    }

    public $link, $email;

    protected function rules()
    {
        return [
            'email'=>['required','email'],
            'link'=>['required','string'],
        ];
    }

    public function resetInput(){
        $this->email = '';
        $this->link = '';
     }

     protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'link'=> 'This field is required',
        
     ]; 

    public function updated($fields)
    {
        $this->validateOnly($fields);

    } 

    public function storeIdea(){
        $validatedData = $this->validate();
        // dd($validatedData);
        $startup =  Startup::create($validatedData);
        Mail::to('gritinai@gmail.com')->send(new MailIdea($startup));
        $this->resetInput();
        session()->flash('message', 'Successfully Send.');
        // Alert::info('success',  'Send Successful');
        return redirect()->to('/idea');
    }
}
