<?php

namespace App\Http\Livewire;

use App\Mail\Mentee as MailMentee;
use App\Models\Mentee as ModelsMentee;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Mentee extends Component
{
    
    public function render()
    {
        return view('livewire.mentee');
    }

    public $email,
    $fullname,
    $phone,
    $gender,
    $describes,
    $location,
    $age,
    $area_in_mentor,
    $issues_or_challenges,
    $goals_objectives,
    $want_to_be_a_mentor,
    $additional_information,
    $skill,
    $indicate,
    $contact_with_your_mentee;


    protected function rules()
    {
        return [
            'email'=>['required','email'],
            'fullname'=>['required','string'],
            'phone'=>['required','string'],
            'gender'=>['required','string'],
            'describes'=>['required','string'],
            'area_in_mentor'=>['required','string'],
            'location'=>['required','string'],
            'age'=>['required','string'],
            'issues_or_challenges'=>['required','string'],
            'goals_objectives'=>['required','string'],
            'want_to_be_a_mentor'=>['required','string'],
            'additional_information'=>['required','string'],
            'skill'=>['required','string'],
            'indicate'=>['required','string'],
            'contact_with_your_mentee'=>['required','string'],
        ];
    }

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'fullname.required' => 'Enter your Full Name',
        'phone.required' => 'Enter your phone number',
        'gender'=> 'This field is required',
        'describes'=> 'This field is required',
        'skill'=> 'This field is required',
        'location'=> 'This field is required',
        'age'=> 'This field is required',
        'area_in_mentor'=> 'This field is required',
        'indicate'=> 'This field is required',
        'contact_with_your_mentee'=> 'This field is required',
        'want_to_be_a_mentor'=> 'This field is required',
        'additional_information'=> 'This field is required',
        'issues_or_challenges'=> 'This field is required',
        'goals_objectives'=> 'This field is required',
     ]; 


    public function updated($fields)
    {
        $this->validateOnly($fields);

    }    
    public function resetInput(){
            $this->email = '';
            $this->fullname = '';
            $this->phone = '';
            $this->gender = '';
            $this->describes = '';
            $this->location = '';
            $this->age = '';
            $this->area_in_mentor = '';
            $this->goals_objectives = '';
            $this->issues_or_challenges = '';
            $this->want_to_be_a_mentor = '';
            $this->additional_information = '';
            $this->skill = '';
            $this->indicate = ''; 
            $this->contact_with_your_mentee = '';
         }
    public function storeMentee(){
        $validatedData = $this->validate();
        // dd($validatedData);
        $mentee = ModelsMentee::create($validatedData);
        Mail::to('gritinai@gmail.com')->send(new MailMentee($mentee));
        $this->resetInput();
        session()->flash('message', 'Successfully Send.');
        // Alert::info('success',  'Send Successful');
        return redirect()->to('/mentee');
    }
}
