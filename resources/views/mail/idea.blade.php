@component('mail::layout')
 {{-- Header --}}
 @slot('header')
 @component('mail::header', ['url' => config('app.url')])
     <!-- header here -->
     <img src="{{ asset('/assets/img/logo.png') }}" alt="">
 @endcomponent
 @endslot

 {{-- Body section --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Email Address</h2>
                <p>{{  $startup->email }}</p>
            </div>
            <div class="col-12">
                <h2>A video link and a Google doc link will do.</h2>
                <p>{{  $startup->link }}</p>
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