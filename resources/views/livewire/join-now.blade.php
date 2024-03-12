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
            </div>

            <div class="joinGroup d-flex">
                <label for="">Mobile No</label>
                <input type="tel" wire:model="mobile_no" id="" placeholder="Mobile No" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Email</label>
                <input type="email" wire:model="email" id="" placeholder="Email" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Address</label>
                <input type="text" wire:model="address" id="" placeholder="Address" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">City</label>
                <input type="text" wire:model="city" id="" placeholder="City" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">State</label>
                <input type="text" wire:model="state" id="" placeholder="State" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Date of birth</label>
                <input type="date" wire:model="dob" id="" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Age</label>
                <input type="number" wire:model="age" id="" placeholder="0" required>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Blood Group (Optional)</label>
                <input type="text" wire:model="blood_group" id="" placeholder="Blood Group">
            </div>

            <div class="joinGroup d-flex">
                <label for="">Qualification</label>
                <input type="text" wire:model="qualification" id="" placeholder="Qualification" required>
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
            </div>

            <div class="joinGroup d-flex">
                <label for="">Choose Our Project</label>
                <select wire:model="project_id" id="" multiple required>
                    <option value="">Choose Our Project</option>
                    @foreach ($projects as $project)
                        <option value="{{$project->id}}">{{$project->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="joinGroup d-flex">
                <label for="">Upload Adhar Card-Front (Optional)</label>
                <input type="file" wire:model="aadhar_front" id="">
            </div>

            <div class="joinGroup d-flex">
                <label for="">Upload Adhar Card-Back (Optional)</label>
                <input type="file" wire:model="aadhar_back" id="">
            </div>

            <div class="joinGroup d-flex">
                <label for="">Upload PAN Card (Optional)</label>
                <input type="file" wire:model="pan" id="">
            </div>

            <div class="joinGroups d-flex">
                <label class="termCond" for="">
                <input type="checkbox" id="" required> Agree our <a href="#">Term & Conditions</a></label>
            </div>
        </div>

        <div class="submitButtonit text-center">
            <button>Submit</button>
        </div>
    </form>
</div>
