@component('mail::layout')
 {{-- Header --}}
 @slot('header')
 @component('mail::header', ['url' => config('app.url')])
     <!-- header here -->
     <img src="{{ asset('assets/images/Autocruize files/logo-m.png') }}" alt="" srcset="">
 @endcomponent
 @endslot

 {{-- Body section --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>What accomplishment are you most proud of and why?</h2>
                <p>{{  $mentor->accomplishment }}</p>
            </div>
            <div class="col-12">
                <h2>Please provide any additional information you feel will be useful for the matching process(interests, hobbies etc)</h2>
                <p>{{  $mentor->additional_information }}</p>
            </div>
            <div class="col-12">
                <h2>Email</h2>
                <p>{{  $mentor->email }}</p>
            </div>
            <div class="col-12">
                <h2>Age</h2>
                <p>{{  $mentor->age }}</p>
            </div>
            <div class="col-12">
                <h2>Which best describes you</h2>
                <p>{{  $mentor->describes }}</p>
            </div>
            <div class="col-12">
                <h2>Please indicate how you would prefer to meet with your mentee.</h2>
                <p>{{  $mentor->indicate }}</p>
            </div>
            <div class="col-12">
                <h2>How often would you be prepared to have contact with your mentee?</h2>
                <p>{{  $mentor->contact_with_your_mentee }}</p>
            </div>
            <div class="col-12">
                <h2>What areas area will you want to mentor on?</h2>
                <p>{{  $mentor->area_in_mentor }}</p>
            </div>
            <div class="col-12">
                <h2>Family</h2>
                <p>{{  $mentor->family }}</p>
            </div>
            <div class="col-12">
                <h2>Location</h2>
                <p>{{  $mentor->fullname }}</p>
            </div>
            <div class="col-12">
                <h2>Gender</h2>
                <p>{{  $mentor->gender }}</p>
            </div>
            <div class="col-12">
                <h2>What are your goals and objectives?</h2>
                <p>{{  $mentor->goals_and_objectives }}</p>
            </div>
            <div class="col-12">
                <h2>Have you been a mentor before?</h2>
                <p>{{  $mentor->have_you_been_a_mentor_before }}</p>
            </div>
            <div class="col-12">
                <h2>What is your highest level of education?</h2>
                <p>{{  $mentor->level_of_education }}</p>
            </div>
            <div class="col-12">
                <h2>Location</h2>
                <p>{{  $mentor->location }}</p>
            </div>
            <div class="col-12">
                <h2>If yes how many years of mentoring experience do you have?</h2>
                <p>{{  $mentor->mentoring_experience }}</p>
            </div>
            <div class="col-12">
                <h2>What relevant skill do you have?</h2>
                <p>{{  $mentor->skill }}</p>
            </div>
            <div class="col-12">
                <h2>Why do you want to be a mentor? What would you hope to achieve from it</h2>
                <p>{{  $mentor->want_to_be_a_mentor }}</p>
            </div>
            <div class="col-12">
                <h2>How many years of work experience do you have</h2>
                <p>{{  $mentor->work_experience }}</p>
            </div>
            <div class="col-12">
                <h2>Whats's your nature of work and where*</h2>
                <p>{{  $mentor->work_status }}</p>
            </div>
            <div class="col-12">
                <h2>Is there anything from your professional experience you would like your mentee to know</h2>
                <p>{{  $mentor->professional_experience }}</p>
            </div>
            {{-- <div class="col-12">
                <h2>Why do you want to be a mentor? What would you hope to achieve from it?</h2>
                <p>{{ $mentor->ach  }}</p>
            </div> --}}
        </div>
    </div>

  {{-- Footer --}}
  @slot('footer')
  @component('mail::footer')
      <!-- footer here -->
      {{-- De bay lux hotel and suites. All rights reserved --}}
  @endcomponent
@endslot
    
@endcomponent