<div>
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
              <form  wire:submit.prevent="storeMentee">
            {{-- @csrf --}}
            <div class="mb-3">
              <label for="" class="form-label">Email address</label>
              <input type="email" class="form-control" wire:model="email" placeholder="name@example.com">
              @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Full Name</label>
              <input type="text" class="form-control" wire:model="fullname" placeholder="fullname">
              @error('fullname') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Phone Number (WhatsApp)</label>
              <input type="number" class="form-control" wire:model="phone" placeholder="phone number">
              @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Gender</label>
              <select class="form-select form-select-sm"  wire:model="gender" aria-label=".form-select-sm example">
                <option selected>Choose gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Prefer not to say</option>
              </select>
              @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">Which best describes you</label>
              <select class="form-select form-select-sm" wire:model="describes" aria-label=".form-select-sm example">
                <option selected>Choose </option>
                <option value="student">Student</option>
                <option value="employed">Employed</option>
                <option value="graduate">Graduate</option>
                <option value="unemployed">Unemployed</option>
              </select>
              @error('describes') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            
            <div class="mb-3">
              <label for="" class="form-label">Location </label>
              <input type="text" class="form-control"  wire:model="location" id="" placeholder="Location">
              @error('location') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="">Age</label>
              <input type="text" class="form-control" placeholder="Age" wire:model="age">
              @error('age') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="" class="form-label">What areas area will you want to mentor on?</label>
              <select class="form-select form-select-sm" wire:model="area_in_mentor" aria-label=".form-select-sm example">
                <option selected>Choose</option>
                <option value="Career_plannng">Career plannng</option>
                <option value="Networking_and_career_building">Networking and career building</option>
                <option value="CVs_and_application">CVs and application</option>
                <option value="Managing_challenging_situations_and_conversations">Managing challenging situations and conversations</option>
                <option value="work-life_balance">work-life balance</option>
                <option value="skill_aquisition">Skill aquisition</option>
                <option value="other"> Other</option>
              </select>
              @error('area_in_mentor') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="mb-3">
              <label for="">Are there any other issues or challenges which you would like to address with your mentor?</label>
              <input type="text" wire:model="issues_or_challenges" id="" class="form-control">
              @error('issues_or_challenges') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
            <div class="mb-3">
              <label for="">What are your career goals and objectives?</label>
              <input type="text" wire:model="goals_objectives" id="" class="form-control">
              @error('goals_objectives') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
            <div class="mb-3">
              <label for="">Why do you want to be a mentee? What would you hope to achieve from it?</label>
              <input type="text" wire:model="want_to_be_a_mentor" id="" class="form-control">
              @error('want_to_be_a_mentor') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
            <div class="mb-3">
              <label for="">Please provide any additional information you feel will be useful for the matching process(interests, hobbies etc)</label>
              <input type="text" wire:model="additional_information" id="" class="form-control">
              @error('additional_information') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
            <div class="mb-3">
              <label for="">What relevant skill or certification do you have?</label>
              <input type="text" wire:model="skill" id="" class="form-control">
              @error('skill') <span class="text-danger">{{ $message }}</span> @enderror
           </div>
           <div class="mb-3">
            <label for="" class="form-label">Please indicate how you would prefer to meet with your mentor</label>
            <select class="form-select form-select-sm" wire:model="indicate" aria-label=".form-select-sm example">
              <option selected>Choose</option>
              <option value="Face-to-Face">Face-to-Face(15,000)</option>
              <option value="Videoconferencing">Video conferencing(10,000)</option>
              <option value="Phone">Phone(7000)</option>
            </select>
            @error('indicate') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
           <div class="mb-3">
            <label for="" class="form-label">How often would you be prepared to have contact with your mentor?</label>
            <select class="form-select form-select-sm" wire:model="contact_with_your_mentee" aria-label=".form-select-sm example">
              <option selected>Choose</option>
              <option value="Once_a_week">Once a week</option>
              <option value="Twice_a_month">Twice a month</option>
              <option value="Once_a_month">Once a month</option>
              <option value="Other">Other</option>
            </select>
            @error('contact_with_your_mentee') <span class="text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-primary w-100" value="Send">
          </div>
          </form>
          </div>
        </div>
          {{-- <form action="{{ route('mentor-page')  }}" method="post"> --}}
            
      </div>
   </div>
  </div>
  