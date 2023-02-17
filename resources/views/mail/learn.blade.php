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
                <h2>Email Address</h2>
                <p>{{  $learn->email }}</p>
            </div>
            <div class="col-12">
                <h2>What is it about</h2>
                <p>{{  $learn->about }}</p>
            </div>
            <div class="col-12">
                <h2>How long can you give for it</h2>
                <p>{{  $learn->how_long_can_you_give_for_it }}</p>
            </div>
            <div class="col-12">
                <h2>Project or assignment topic.(A video link and a Google doc link will do).</h2>
                <p>{{  $learn->link }}</p>
            </div>
            <div class="col-12">
                <h2>Is it a project or assignment</h2>
                <p>{{  $learn->project }}</p>
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