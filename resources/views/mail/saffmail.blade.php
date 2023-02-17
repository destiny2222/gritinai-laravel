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
                <h2>Number of staffs?</h2>
                <p>{{  $saff->no_of_staff }}</p>
            </div>
            <div class="col-12">
                <h2>A link explaining the kind of training or you could explain explicitly here.</h2>
                <p>{{  $saff->specify }}</p>
            </div>
            <div class="col-12">
                <h2>Email address</h2>
                <p>{{  $saff->email }}</p>
            </div>
            <div class="col-12">
                <h2>Please specify how you would want the training</h2>
                <p>{{ $saff->training }}</p>
            </div>
            <div class="col-12">
                <h2>End date</h2>
                <p>{{  $saff->end_date }}</p>
            </div>
            <div class="col-12">
                <h2>Start date</h2>
                <p>{{  $saff->start_date }}</p>
            </div>
            <div class="col-12">
                <h2>Name of Company, Institution or Body</h2>
                <p>{{  $saff->company }}</p>
            </div>
            <div class="col-12">
                <h2>Location</h2>
                <p>{{  $saff->location }}</p>
            </div>
            <div class="col-12">
                <h2>We will get back to you shortly. Any other information you will like to ?</h2>
                <p>{{  $saff->body }}</p>
            </div>
            <div class="col-12">
                <img src="" alt="">
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