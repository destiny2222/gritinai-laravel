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
                <h2>Full Name</h2>
                <p>{{  $mentee->fullname }}</p>
            </div>
            <div class="col-12">
                <h2>Please provide any additional information you feel will be useful for the matching process(interests, hobbies etc)</h2>
                <p>{{  $mentee->additional_information }}</p>
            </div>
            <div class="col-12">
                <h2>Email Address</h2>
                <p>{{  $mentee->email }}</p>
            </div>
            <div class="col-12">
                <h2>Age</h2>
                <p>{{  $mentee->age }}</p>
            </div>
            <div class="col-12">
                <h2>What areas area will you want to mentor on?</h2>
                <p>{{  $mentee->area_in_mentor }}</p>
            </div>
            <div class="col-12">
                <h2>How often would you be prepared to have contact with your mentee?</h2>
                <p>{{  $mentee->contact_with_your_mentee }}</p>
            </div>
            <div class="col-12">
                <h2>Location</h2>
                <p>{{  $mentee->location }}</p>
            </div>
            <div class="col-12">
                <h2>Which best describes you</h2>
                <p>{{  $mentee->describes }}</p>
            </div>
            <div class="col-12">
                <h2>Gender</h2>
                <p>{{  $mentee->gender }}</p>
            </div>
            <div class="col-12">
                <h2>What are your goals and objectives?</h2>
                <p>{{  $mentee->goals_objectives }}</p>
            </div>
            <div class="col-12">
                <h2>Please indicate how you would prefer to meet with your mentee.</h2>
                <p>{{  $mentee->indicate }}</p>
            </div>
            <div class="col-12">
                <h2>Are there any other issues or challenges which you would like to address with your mentor?</h2>
                <p>{{  $mentee->issues_or_challenges }}</p>
            </div>
            <div class="col-12">
                <h2>Phone Number</h2>
                <p>{{  $mentee->phone }}</p>
            </div>
            <div class="col-12">
                <h2>What relevant skill do you have?</h2>
                <p>{{  $mentee->skill }}</p>
            </div>
            <div class="col-12">
                <h2>Why do you want to be a mentor? What would you hope to achieve from it</h2>
                <p>{{  $mentee->want_to_be_a_mentor }}</p>
            </div>
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