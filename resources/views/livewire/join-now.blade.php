<div>
    <form wire:submit.prevent="joinNow">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="joinFormInner">
            <div class="joinGroup d-flex">
                <label for="">Full Name*</label>
                <input type="text" wire:model="full_name" id="" placeholder="Full Name" required>
                @error('full_name')
                    <span class="error is-invalid">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Mobile No</label>
                <input type="tel" wire:model="mobile_no" id="" placeholder="Mobile No" required>
                @error('mobile_no')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Email</label>
                <input type="email" wire:model="email" id="" placeholder="Email" required>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Address</label>
                <input type="text" wire:model="address" id="" placeholder="Address" required>
                @error('address')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">City</label>
                <input type="text" wire:model="city" id="" placeholder="City" required>
                @error('city')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">State</label>
                <input type="text" wire:model="state" id="" placeholder="State" required>
                @error('state')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Date of birth</label>
                <input type="date" wire:model="dob" id="" required>
                @error('dob')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Age</label>
                <input type="number" wire:model="age" id="" placeholder="0" required>
                @error('age')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Blood Group (Optional)</label>
                <input type="text" wire:model="blood_group" id="" placeholder="Blood Group">
            </div>

            <div class="joinGroup d-flex">
                <label for="">Qualification</label>
                <input type="text" wire:model="qualification" id="" placeholder="Qualification" required>
                @error('qualification')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="joinGroup d-flex">
                <label for="">Volunteer Type</label>
                <select wire:model="volunter_type" id="" placeholder="Volunteer Type" required>
                    <option value="">Choose Volunteer Type</option>
                    <option value="working-professional">Working Professional</option>
                    <option value="Freelancer">Freelancer</option>
                    <option value="business-owner">Business Owner</option>
                    <option value="school-student">School Student</option>
                    <option value="collage-student">Collage Student</option>
                    <option value="home-maker">Home Maker</option>
                    <option value="other">Other</option>
                </select>
                @error('volunter_type')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


            <div class="joinGroup d-flex">
                <label for="">Upload Adhar Card-Front (Optional)</label>
                <input type="file" wire:model="aadhar_front" id="">
            </div>

            <div class="joinGroup d-flex">
                <label for="">Upload Adhar Card-Back (Optional)</label>
                <input type="file" wire:model="aadhar_back" id="">
            </div>

            <div class="joinGroup  d-flex">
                <label for="">Upload PAN Card (Optional)</label>
                <input type="file" wire:model="pan" id="">
            </div>

            <div class="mb-5">
                <label for="">Choose Our Project</label>
<br>
                {{-- <select wire:model="project_id" id="" multiple required>
                    <option value="">Choose Our Project</option>
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}">{{ $project->title }}</option>
                    @endforeach
                </select> --}}

                @forelse($projects as $project)
                {{-- <div class="col-md-4"> --}}
                    <div class="form-check form-check-inline mt-2 ">
                        <input class="form-check-input d-flex" type="checkbox" id="checkbox_{{$project->id}}"
                            wire:model="project_id.{{ $project->id }}" value="{{ $project->id }}">
                        <label class="form-check-label" for="checkbox_{{$project->id}}">{{ $project->title }}</label>
                    </div>
                {{-- </div> --}}
            @empty
            @endforelse
                @error('project_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>


            <div class="joinGroups d-flex">
                <label class="termCond" for="">
                    <input type="checkbox" id="" required> Agree our <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Term &
                        Conditions</a></label>
            </div>
        </div>

        <div class="submitButtonit text-center mt-3">
            <button>Submit</button>
        </div>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    </form>
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
            <img src="{{ url('images/logo/site_logo.png') }}" width="70px" alt="">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="margin-left: 30px;">Terms & Condition for Volunteers</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ol class="paragraph">
            <li>The person should be above 18 years to be active member of this organization and
                without any criminal background.
                </li>
            <li>The person should be physically and mentally strong (Special Person Define First)
                and willing to work for the organization individually or in a group and travel at his
                own expenses.
                </li>
            <li>A person is selected and can be removed by the chairman or core group without
                notice or giving reason for misconduct, misbehavior, indiscipline.
                </li>
            <li>The member is willing to work and obey the chairman and core group.</li>
            <li>The member will give his best effort to full fill objective and task assigned to him or
                her.
                </li>
            <li>Member should attend the general meetings and participate fully and have to give
                written application for being absent, 3 days before the meeting.
                </li>
            <li>The meetings will be held on weekends/Month-end on Saturday or Sundays at various
                locations.
                </li>
            <li>Meetings will be headed by chairman and the core group and members.</li>
            <li>The chairman has the supreme power to form or diffuse a core group, members.</li>
            <li>It is duty of a member to obey and give due respect to the chairman and the core
                group.
                </li>
            <li>Membership Fee should be paid with Application Form on Rejection of Application
                the Membership fee will be refund in a week.
                </li>
          </ol>
          <hr style="opacity: 5.25; ;color: #af1515;">
        </div>
        {{-- <div class="modal-footer">

        </div> --}}
      </div>
    </div>
  </div>


    @if ($errors->any())
        <script>
            document.addEventListener('livewire:load', function() {
                console.log("livewire");

                Livewire.hook('message.processed', (message, component) => {
                    if (message.updateQueue.some(u => u.type === 'error')) {
                        console.log("error");
                        const firstErrorInput = document.querySelector('.error');
                        if (firstErrorInput) {
                            console.log("object", firstErrorInput);
                            firstErrorInput.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });
                            firstErrorInput.focus();
                        }
                    }
                });
            });
        </script>
    @endif

</div>
