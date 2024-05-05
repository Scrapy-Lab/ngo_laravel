<div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    {{-- Step  1 --}}
    @if ($donateFirstForm)
        <form wire:submit.prevent="saveDonateForm">
            <div class="donateBlogInnerbox">
                <h3 style="color: #000">Donation Form</h3>
                <p style="color:#5586e8">Distributes the smiles...</p>

                {{-- DONATION TYPE --}}
                <h4>Donation Type</h4>
                <div class="row" style="padding: 20px;">
                    <select wire:model="donation_type" class="form-control  form-select" style="width:230px;" required>
                        <option value="" selected>Select Donation Type</option>
                        <option value="1">Monthly Donation</option>
                        <option value="2">Annual Donation</option>
                        <option value="3">One Time Donation</option>
                    </select>
                    {{-- <div class="col">
                        <div class="form-check form-check-inline">
                            <input wire:model="donation_type" class="form-check-input" type="radio" id="checkbox1" name="donation_type" value="1">
                            <label class="form-check-label" for="checkbox1">Monthly Donation</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input wire:model="donation_type" class="form-check-input" type="radio" id="checkbox2" name="donation_type" value="2">
                            <label class="form-check-label" for="checkbox2">Annual Donation</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input wire:model="donation_type" class="form-check-input" type="radio" id="checkbox3" name="donation_type" value="3">
                            <label class="form-check-label" for="checkbox3">One Time Donation</label>
                        </div>
                    </div> --}}
                </div>

                {{-- Payment Type --}}
                {{-- <h4>Payment Type</h4>
                <div class="row">
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input wire:model="payment_type" class="form-check-input" type="radio" id="checkbox1" name="payment_type" value="1">
                            <label class="form-check-label" for="checkbox1">Online</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check form-check-inline">
                            <input wire:model="payment_type" class="form-check-input" type="radio" id="checkbox2" name="payment_type" value="2">
                            <label class="form-check-label" for="checkbox2">Offline</label>
                        </div>
                    </div>
                </div> --}}
                {{-- Amount --}}
                <h4>Select Donation Amount</h4>
                <div class="container">


                    <div class="row amountmain">
                        <div class="col-md-2 donate_amount
                      " wire:click="fixedAmount(200)">
                            <span class="donateAmountButton"
                                style="background-color: {{ $amount == 200 ? '#5586e8' : '#AF1515' }};"> ₹ 200</span>
                        </div>
                        {{-- mobiRate --}}
                        <div class=" col-md-2 donate_amount
                      " wire:click="fixedAmount(500)">
                            <span class="donateAmountButton"
                                style="background-color: {{ $amount == 500 ? '#5586e8' : '#AF1515' }};"> ₹ 500</span>
                        </div>
                        <div class="col-md-2 donate_amount
                      " wire:click="fixedAmount(1000)">
                            <span class="donateAmountButton"
                                style="background-color: {{ $amount == 1000 ? '#5586e8' : '#AF1515' }};"> ₹ 1000</span>
                        </div>
                        <div class="col-md-2 donate_amount
                      " wire:click="fixedAmount(2000)">
                            <span class="donateAmountButton"
                                style="background-color: {{ $amount == 2000 ? '#5586e8' : '#AF1515' }};"> ₹ 2000</span>
                        </div>
                        <div class="col-md-2 donate_amount
                      " wire:click="fixedAmount(5000)">
                            <span class="donateAmountButton"
                                style="background-color: {{ $amount == 5000 ? '#5586e8' : '#AF1515' }};"> ₹ 5000</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col d-flex gap-4 py-4 needMore">
                            <span wire:click="enableCustomAmt" class="donateAmountButton"
                                style="background-color: {{ $enableCustomAmt ? '#5586e8' : '#AF1515' }};"> Custom
                                Amount</span>
                            <div class="input-row">
                                <input type="number" wire:model="amount" id="customAmountInput" min="200" class="form-control"
                                    placeholder="Enter custom amount" {{ $disable }}>
                            </div>
                        </div>
                    </div>
                    {{-- Selct Project --}}
                    <h4>Select Project*</h4>
                    <style>
                        @media (max-width: 575.98px) {
                            .col-stack-xs {
                                flex-basis: 100% !important;
                                max-width: 50% !important;
                            }
                        }
                    </style>

                    @php
                        // Check if the "mobile" word exists in User-Agent
                        $isMob = is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile'));

                        // if($isMob){
                        // echo 'Using Mobile Device...';
                        // }else{
                        // echo 'Using Desktop...';
                        // }

                    @endphp
                    @if ($isMob)
                        <div class="row mobileView_div">
                            <div class="col-md-6 col-stack-xs" style="padding: 0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox1"
                                        wire:model="transaction_type.1" value="1">
                                    <label class="form-check-label" for="checkbox1">Project - Siksha</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox2"
                                        wire:model="transaction_type.2" value="2">
                                    <label class="form-check-label" for="checkbox2">Medical Programs</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox3"
                                        wire:model="transaction_type.3" value="3">
                                    <label class="form-check-label" for="checkbox3">Hunger Hero Program</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-stack-xs" style="padding: 0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox4"
                                        wire:model="transaction_type.4" value="4">
                                    <label class="form-check-label" for="checkbox4">Road Safety Program</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox5"
                                        wire:model="transaction_type.5" value="5">
                                    <label class="form-check-label" for="checkbox5">VastarDaan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox6"
                                        wire:model="transaction_type.6" value="6">
                                    <label class="form-check-label" for="checkbox6">Right To Vote</label>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="row desktopViewDiv">
                            @forelse($projects as $project)
                                <div class="col-xs-2 col-md-4 ">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox"
                                            id="checkbox_{{ $project->id }}"
                                            wire:model="transaction_type.{{ $project->id }}"
                                            value="{{ $project->id }}">
                                        <label class="form-check-label"
                                            for="checkbox_{{ $project->id }}">{{ $project->title }}</label>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    @endif


                    {{-- <div class="row mobileView_div" >
                        @forelse($projects as $project)
                            <div class="col-md-6 col-stack-xs" style="padding: 0">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox{{ $project->id }}"
                                        wire:model="transaction_type.{{ $project->id }}" value="{{ $project->id }}">
                                    <label class="form-check-label" for="checkbox{{ $project->id }}">{{ $project->title }}</label>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-6 col-stack-xs" style="padding: 0">
                                <p>No projects found</p>
                            </div>
                        @endforelse
                    </div> --}}




                </div>
                <button class="my-4" type="submit">Next</button>

            </div>
            <form>
    @endif
    {{-- STEP 2  --}}
    @if ($donateSecondForm)
    <form wire:submit.prevent="savePersonalInfo(0)">
        <div class="donateBlogInnerbox">
            {{-- Personal Info --}}
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <i class="fa fa-arrow-left" wire:click="savePersonalInfo(1)" style="float: right; cursor:pointer"
                        aria-hidden="true"> Back</i>
                </div>
            @endif
            <h4>Personal Info</h4>
            <div class="donateForm d-flex">
                <div class="donteGroup">
                    <label for="">Full Name*</label>
                    <input type="text" wire:model="full_name" placeholder="Full Name">
                    <div style="color:red">
                        @error('full_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="donteGroup">
                    <label for="">Email</label>
                    <input type="email" wire:model="email" name="" id="" placeholder="Email">
                    <div style="color:red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="donteGroup mt-2">
                    <label for="">Mobile Number*</label>
                    <input type="tel" wire:model="phone" name="" id=""
                        placeholder="Mobile number">
                    <div style="color:red">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="donteGroup mt-2">
                    <label for="">City</label>
                    <input type="text" name="" wire:model="city" id="" placeholder="City">
                    <div style="color:red">
                        @error('city')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="donteGroups mt-2">
                    <label for="">Address</label>
                    <textarea name="" id="" cols="30" wire:model="address" rows="10" placeholder="Address"></textarea>
                    <div style="color:red">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                {{-- <img src="{{asset('images/logo/back.png')}}" alt="" width="20px"> --}}
                {{-- <button class="my-4"   wire:target="savePersonalInfo(1)"  type="submit">Back</button> --}}
                <button href="#" class="my-4 ">Next</button>

            </div>
        </div>
    </form>

    @endif
    {{-- STEP 3 --}}
    @if ($donateThirdForm)
    <form wire:submit.prevent="saveScreenShot(0)">
        <div class="donateBlogInnerbox">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                    <i class="fa fa-arrow-left" wire:click="saveScreenShot(1)" style="float: right;cursor:pointer"
                        aria-hidden="true"> Back</i>
                </div>
            @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="itsImage text-center">
                            {{-- <img src="{{ url('/images/bgQr.png') }}" alt=""> --}}
                        </div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Donation Type</th>
                                <th scope="col">
                                    @if ($donation_type == 1 )
                                    Monthly Donation
                                    @elseif ($donation_type == 2)
                                    Annual Donation
                                    @else
                                    One Time Donation
                                    @endif
                                </th>


                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Donation Amount</th>
                                <td>{{$amount}}</td>


                              </tr>

                              <tr>
                                <th scope="row">Full Name</th>
                                <td colspan="2">{{$full_name}}</td>

                              </tr>
                              <tr>
                                <th scope="row">Email</th>
                                <td colspan="2">{{$email}}</td>

                              </tr>
                              <tr>
                                <th scope="row">Mobile Number</th>
                                <td colspan="2">{{$phone}}</td>

                              </tr>
                              <tr>
                                <th scope="row">City</th>
                                <td colspan="2">{{$city}}</td>

                              </tr>
                            </tbody>
                          </table>

                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($screenshot)
                                    <img src="{{ $screenshot->temporaryUrl() }}">
                                @endif
                            </div>

                        </div>

                        {{-- <div class="row">
                            <div class="text-center">
                                <div class="image-upload">
                                    <div wire:loading wire:target="screenshot">Uploading...</div>
                                    <br>
                                    <label for="file-input">
                                        <img src="{{ asset('images/logo/screenshotIcon.png') }}"
                                            style="width: 50px" />
                                        <br>
                                        Click Upload Payment Screenshot <span style="color: red">*</span>
                                    </label>

                                    <input type="file" name="" id="file-input" wire:model="screenshot"
                                        style="display: none" required>
                                </div>
                                @error('screenshot')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                        </div> --}}


                    </div>
                </div>
            </div>
            {{-- <div class="noticeMian">
                <p> <span class="red">Important Note:</span> Our Developer team Are Working On Payment Gateway .
                    You can pay through QR code . Don’t worry your transaction is totally safe.
                </p>
            </div> --}}

            {{-- <button href="#" class="my-4">Donate Now</button> --}}
            <button  id="rzp-button1"> Pay Now</button>
        </div>



    </form>

    @script
    <script>
        console.log("adasdadasdadasd asd asdas dasd a");
        var options = {
            // "key": "rzp_test_0WiHd2duqjIki2", // Test key  Enter the Key ID generated from the Dashboard
            "key": "rzp_live_7ax5iM2vX2B3uU", // Live Key Enter the Key ID generated from the Dashboard
            "amount": {{ $amount * 100 }},
            "currency": "INR",
            "description": "Youngistaan welfare society",
            "image": "{{url('images/logo/site_logo.png')}}",
            "prefill": {
                "email": "{{$email}}",
                "contact": "{{$phone}}",
            },
            config: {
                display: {
                    blocks: {
                        utib: { //name for Axis block
                            name: "Pay using Axis Bank",
                            instruments: [{
                                    method: "card",
                                    issuers: ["UTIB"]
                                },
                                {
                                    method: "netbanking",
                                    banks: ["UTIB"]
                                },
                            ]
                        },
                        other: { //  name for other block
                            name: "Other Payment modes",
                            instruments: [{
                                    method: "card",
                                    issuers: ["ICIC"]
                                },
                                {
                                    method: 'upi',
                                }
                            ]
                        }
                    },
                    // hide: [
                    //   {
                    //   method: "upi"
                    //   }
                    // ],
                    sequence: ["block.utib", "block.other"],
                    preferences: {
                        show_default_blocks: false // Should Checkout show its default blocks?
                    }
                }
            },
            "handler": function(response) {
                // console.log("response", response);
                // alert(response);
                // if()
                window.location.href = "{{route('thank-you')}}";
            },
            "modal": {
                "ondismiss": function() {
                    if (confirm("Are you sure, you want to close the form?")) {
                        txt = "You pressed OK!";
                        console.log("Checkout form closed by the user");
                    } else {
                        txt = "You pressed Cancel!";
                        console.log("Complete the Payment")
                    }
                }
            }
        };
        $(document).ready(function() {
            var rzp1 = new Razorpay(options);
            document.getElementById('rzp-button1').onclick = function(e) {
                this.disabled = true;
                rzp1.open();

                e.preventDefault();
            }
        });
    </script>
@endscript
    {{-- >

         --}}
    @endif
    {{-- STEP 4 --}}
    @if ($donateFourthForm)
    <div class="donateBlogInnerbox nextTypeImage text-center">
        <img id="bouncingImage" src="https://cliply.co/wp-content/uploads/2021/03/372103860_CHECK_MARK_400px.gif"
            alt="Bouncing Image">
        <h4>Your Donation has been successfully
            submitted</h4>

        <div class="noticeMian text-center">
            <p> Your tax-deductible donation is greatly
                appreciated!
            </p>
        </div>
        <h3>Download Your Donation Receipt</h3>
        <a href="#" class="my-4">Download Now</a>
    </div>
    @endif

    <script>
        $(document).ready(function() {




            // Add click event handler to elements with class donate_amount
            $('.donateAmountButton').click(function() {
                // Change color to blue on click

                $('.donateAmountButton').css('background-color', '#AF1515');
                $(this).css('background-color', '#5586e8');
                console.log("fasdasdasda");
            });
        });
    </script>
</div>
