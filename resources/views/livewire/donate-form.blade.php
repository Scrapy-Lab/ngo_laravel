<div>
    {{-- Step  1 --}}
    @if ($donateFirstForm)
        <form wire:submit.prevent="saveDonateForm">
            <div class="donateBlogInnerbox">
                <h3 style="color: #000">Donation Form</h3>
                <p style="color:#5586e8">Distributes the smiles...</p>

                {{-- DONATION TYPE --}}
                <h4>Donation Type</h4>
                <div class="row">
                    <select wire:model="donation_type" class="form-control  form-select" style="width:230px">
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
                        <div class="col-md-2
                      " wire:click="fixedAmount(200)">
                            <span class="donateAmountButton"> ₹ 200</span>
                        </div>
                        <div class="col-md-2
                      " wire:click="fixedAmount(500)">
                            <span class="donateAmountButton"> ₹ 500</span>
                        </div>
                        <div class="col-md-2
                      " wire:click="fixedAmount(1000)">
                            <span class="donateAmountButton"> ₹ 1000</span>
                        </div>
                        <div class="col-md-2
                      " wire:click="fixedAmount(2000)">
                            <span class="donateAmountButton"> ₹ 2000</span>
                        </div>
                        <div class="col-md-2
                      " wire:click="fixedAmount(5000)">
                            <span class="donateAmountButton"> ₹ 5000</span>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col d-flex gap-4 py-4">
                            <span wire:click="enableCustomAmt" class="donateAmountButton">Custom Amount</span>
                            <div class="input-row">
                                <input type="number" wire:model="amount" id="customAmountInput" class="form-control"
                                    placeholder="Enter custom amount" {{ $disable }}>
                            </div>
                        </div>
                    </div>
                    {{-- Selct Project --}}
                    <h4>Select Project*</h4>
                    <div class="row">
                        @forelse($projects as $project)
                            <div class="col-md-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="checkbox1"
                                        wire:model="transaction_type.{{ $project->id }}" value="{{ $project->id }}">
                                    <label class="form-check-label" for="checkbox1">{{ $project->title }}</label>
                                </div>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <button class="my-4" type="submit">Next</button>
            </div>
            <form>
    @endif
    {{-- STEP 2  --}}
    @if ($donateSecondForm)
        <form wire:submit.prevent="savePersonalInfo">
            <div class="donateBlogInnerbox">
                {{-- Personal Info --}}
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
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
                    <button href="#" class="my-4">Donate Now</button>
                </div>
            </div>
        </form>
    @endif
    {{-- STEP 3 --}}
    @if ($donateThirdForm)
        <form wire:submit.prevent="saveScreenShot">
            <div class="donateBlogInnerbox">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="itsImage text-center">
                                <img src="{{ url('/images/bgQr.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    @if ($screenshot)
                                        <img src="{{ $screenshot->temporaryUrl() }}">
                                    @endif
                                </div>

                            </div>

                            <div class="row">
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

                            </div>


                        </div>
                    </div>
                </div>
                <div class="noticeMian">
                    <p> <span class="red">Important Note:</span> Our Developer team Are Working On Payment Gateway .
                        You can pay through QR code . Don’t worry your transaction is totally safe.
                    </p>
                </div>

                <button href="#" class="my-4">Donate Now</button>

            </div>
        </form>
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
</div>
