<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container" >
        <div class="row">
            <div class="card w-75 m-auto">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="card-body ">
                <form  action="{{ route('saffStore-page') }}" method="POST">
                @csrf
                <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required placeholder="name@example.com">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Name of Company, Institution or Body</label>
                <input type="text" class="form-control" name="company" required placeholder="">
                @error('company') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">You could upload a file for more explanation</label>
                    <input type="file" name="file" required  class="form-control">
                    @error('file') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">A link explaining the kind of training or you could explain explicitly here.</label>
                <input type="text" class="form-control" name="training" required placeholder="">
                @error('training') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Number of staffs?</label>
                <input type="text" class="form-control" name="no_of_staff" required placeholder="">
                @error('no_of_staff') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Location</label>
                <input type="text" class="form-control" name="location" required placeholder="">
                @error('location') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                  <label for="" class="form-label">Please specify how you would want the training</label>
                  <select class="form-select form-select-sm" name="specify" required aria-label=".form-select-sm example">
                    <option selected>Choose</option>
                    <option value="Face-to-Face">In-person</option>
                    <option value="Videoconferencing">Virtual</option>
                  </select>
                   @error('specify') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Start date</label>
                <input type="text" class="form-control" name="start_date" required placeholder="">
                @error('start_date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">End date</label>
                <input type="text" class="form-control" name="end_date" required placeholder="">
                @error('end_date') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">We will get back to you shortly.  Any other information you will like to ?</label>
                    <input type="text" class="form-control" name="body" required >
                    @error('body') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            <div class=" text-center">
                <input type="submit" class="btn btn-primary  btn-sm" value="Submit">
            </div>
            </form>
            </div>
            </div>
            {{-- <form action="{{ route('mentor-page')  }}" method="post"> --}}
                
        </div>
    </div>
</div>
