@extends('layouts.main')

@section('content')
    

    @section('breadcrumbs')
        <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Project, Assignments</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Project, Assignments</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->
    @endsection



    <section>
        <div>
            <livewire:learn>
        </div>
    </section>


    @endsection
