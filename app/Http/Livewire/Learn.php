<?php

namespace App\Http\Livewire;

use App\Mail\Learn as MailLearn;
use App\Models\Learn as ModelsLearn;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Learn extends Component
{
    public function render()
    {
        return view('livewire.learn');
    }

    public $link, $email,$how_long_can_you_give_for_it,$project,$about;

    protected function rules()
    {
        return [
            'email'=>['required','email'],
            'link'=>['required','string'],
            'project'=>['required','string'],
            'about'=>['required','string'],
            'how_long_can_you_give_for_it'=>['required','string'],
        ];
    }

    public function resetInput(){
        $this->email = '';
        $this->link = '';
        $this->how_long_can_you_give_for_it = '';
        $this->project = '';
        $this->about = '';
     }

     protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'link'=> 'This field is required',
        'how_long_can_you_give_for_it'=> 'This field is required',
        'project'=> 'This field is required',
        'about'=> 'This field is required',
        
     ]; 

    public function updated($fields)
    {
        $this->validateOnly($fields);

    } 

    public function storeIdea(){
        $validatedData = $this->validate();
        // dd($validatedData);
        $learn = ModelsLearn::create($validatedData);
        Mail::to('gritinai@gmail.com')->send(new MailLearn($learn));
        $this->resetInput();
        session()->flash('message', 'Successfully Send.');
        // Alert::info('success',  'Send Successful');
        return redirect()->to('/learn');
    }
}
