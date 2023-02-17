<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="container" wire.ignore.self>
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
                <form  wire:submit.prevent="storeIdea">
                {{-- @csrf --}}
                <div class="mb-3">
                <label for="" class="form-label">Email address</label>
                <input type="email" class="form-control" wire:model="email" placeholder="name@example.com">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Project or assignment topic.(A video link and a Google doc link will do).</label>
                <input type="text" class="form-control" wire:model="link" placeholder="">
                @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">Is it a project or assignment</label>
                <input type="text" class="form-control" wire:model="project" placeholder="">
                @error('project') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">What is it about</label>
                <input type="text" class="form-control" wire:model="about" placeholder="">
                @error('about') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                <label for="" class="form-label">How long can you give for it</label>
                <input type="text" class="form-control" wire:model="how_long_can_you_give_for_it" placeholder="">
                @error('how_long_can_you_give_for_it') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            <div class=" text-center">
                <input type="submit" class="btn btn-primary  btn-sm" value="Submit">
            </div>
            </form>
            </div>
            </div>   
        </div>
    </div>
</div>
