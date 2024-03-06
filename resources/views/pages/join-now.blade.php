@extends('layouts.app')
@section('content')
    {{-- Join Now Form --}}
    <div class="joinNowMain">
        <h2>Join Now</h2>
        <form action="">
            <div class="joinFormInner">

                <div class="joinGroup d-flex">
                    <label for="">Full Name*</label>
                    <input type="text" name="" id="" placeholder="Full Name">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Mobile No</label>
                    <input type="tel" name="" id="" placeholder="Mobile No">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Email</label>
                    <input type="email" name="" id="" placeholder="Email">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Address</label>
                    <input type="text" name="" id="" placeholder="Address">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">City</label>
                    <input type="text" name="" id="" placeholder="City">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">State</label>
                    <input type="text" name="" id="" placeholder="State">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Date of birth</label>
                    <input type="date" name="" id="">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Age</label>
                    <input type="number" name="" id="" placeholder="0">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Blood Group (Optional)</label>
                    <input type="text" name="" id="" placeholder="Blood Group">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Qualification</label>
                    <input type="text" name="" id="" placeholder="Qualification">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Volunteer Type</label>
                    <select name="" id="" placeholder="Volunteer Type">
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
                    <select name="" id="">
                        <option value="">Choose Our Project</option>
                        <option value="project-siksha">Project Siksha</option>
                        <option value="hunger-hero">Hunger Hero</option>
                    </select>
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Upload Adhar Card-Front (Optional)</label>
                    <input type="file" name="" id="">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Upload Adhar Card-Back (Optional)</label>
                    <input type="file" name="" id="">
                </div>

                <div class="joinGroup d-flex">
                    <label for="">Upload PAN Card (Optional)</label>
                    <input type="file" name="" id="">
                </div>

                <div class="joinGroups d-flex">
                    <label class="termCond" for="">
                    <input type="checkbox" name="" id=""> Agree our <a href="#">Term & Conditions</a></label>
                </div>
            </div>

            <div class="submitButtonit text-center">
                <button>Submit</button>
            </div>
        </form>
    </div>
@endsection
