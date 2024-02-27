@extends('layouts.app')
@section('content')
    {{-- DONATE PAGE --}}

    <div class="donateMain">
        <div class="imagesgrid d-flex justify-content-between">

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>

            <figure>
                <img src="{{ url('/images/image-002.png') }}" alt="">
            </figure>
        </div>
        <h3>Our Programms</h3>
        <p>Youngistaan Foundation’s programs address multiple issues such as hunger, homelessness, gender,
            education, animal welfare, youth, emergency responses and more. We encourage you to visit our
            website to know about our programs!</p>

        <div class="donateblogBoxs row">
            <div class="donateblogBox col-md-4">
                <img src="{{ url('/images/image-022.png') }}" alt="">
                <div class="donateBoxheads">
                    <h3>Hunger & Nutrition</h3>
                    <p>(Food Project)</p>
                </div>
            </div>

            <div class="donateblogBox col-md-4">
                <img src="{{ url('/images/image-022.png') }}" alt="">
                <div class="donateBoxheads">
                    <h3>Hunger & Nutrition</h3>
                    <p>(Food Project)</p>
                </div>
            </div>

            <div class="donateblogBox col-md-4">
                <img src="{{ url('/images/image-022.png') }}" alt="">
                <div class="donateBoxheads">
                    <h3>Hunger & Nutrition</h3>
                    <p>(Food Project)</p>
                </div>
            </div>
        </div>

        <h3>THE SIMPLEST WAY OF HELPING US</h3>
        <p>You many organize a collection drive in your Office, School, Society wherein people may donate their Old
            Clothes ( Unturned and in Wearable Condition) , Dry Ration,, Medicines ( Please check expiry date), Toys,
            Footwear, Utensils, Books etc.</p>
    </div>

    {{-- Donate Content --}}

    <div class="donateblogs row justify-content-between">
        <div class="col-md-8 donateblogcontent">
            <div class="donateBlogbox">
                <img src="{{ url('/images/donatebox.jpg') }}" alt="">
                <div class="donateBlogInnerbox">
                    <h3>Donation Form</h3>
                    <h3>₹0 <span class="smallfont">of ₹1 lakh raised</span></h3>
                    <div class="inputWIthoptions">
                        <label for="">₹</label><input type="text" name="" id="">
                    </div>
                    <div class="d-flex justify-content-between selectMoney">
                        <button>₹100</button>
                        <button>₹200</button>
                        <button>₹500</button>
                        <button>₹1000</button>
                        <button>₹2000</button>
                    </div>

                    <button>Custom Amount</button>

                    <div class="selectPayment">
                        <h4 class="allHead">Select Payment Method</h4>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="yesOption"
                                value="yes">
                            <label class="form-check-label" for="yesOption">
                                Offline Donation
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="noOption"
                                value="no">
                            <label class="form-check-label" for="noOption">
                                Paypal
                            </label>
                        </div>

                    </div>

                    <h4 class="allHead">Personal Info</h4>

                    <div class="personal d-flex justify-content-between">
                        <div class="formGroups">
                            <label for="">First Name*</label>
                            <input type="text" name="" id="" placeholder="First Name">
                        </div>
                        <div class="formGroups">
                            <label for="">Last Name*</label>
                            <input type="text" name="" id="" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="emailGroup">
                        <label for="">Email Address*</label>
                        <input type="email" placeholder="Email Address">
                    </div>
                    <p>To make an offline donation toward this cause, follow these steps::</p>
                    <div class="forcheck">
                        <p>Write a check payable to "{Youngistaan Welfare Society}"</p>
                        <p>On the memo line of the check, indicate that the donation is for "Youngistaan"</p>
                        <p>Mail your check to:</p>
                    </div>
                    <h5>Master Colony, Jamalpur, chandigarh Road - Ludhiana.</h5>
                    <p>Your tax-deductible donation is greatly appreciated!</p>
                    <div class="forTerms d-flex justify-content-between">
                        <div class="checkbox1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="whyAreYouCheckbox">
                                <label class="form-check-label" for="whyAreYouCheckbox">
                                  Agree to Terms?
                                </label>
                              </div>
                        </div>
                        <a href="#">Show Terms</a>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-3 donatePayment">

            {{-- faq --}}
            <h3>Frequently Asked Question</h3>
            <div class="accordion" id="accordionExample">

                {{-- ITEM 1 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            I have an issue with the Web?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Web donations will show up on our database approximately 24 hours after the transaction is
                            complete, but donors will receive an immediate confirmation of their donation.
                        </div>
                    </div>
                </div>

                {{-- ITEM 2 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Can you help me change or cancel a donation I made to one of your recommended charities?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We can only assist with donations made for the support of recommended charities through
                            Youngistaan; in order to change or cancel a donation made directly to a Youngistaan-recommended
                            charity, you will need to reach out to the charity directly.
                        </div>
                    </div>
                </div>

                {{-- ITEM 3 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Why should I help Youngistaan?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Your gift, pooled with other support, will help us deliver critical aid to children and families
                            around the world during emergencies and within our programs.
                        </div>
                    </div>
                </div>

                {{-- ITEM 4 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                            How can I volunteer at Youngistaan?
                        </button>
                    </h2>
                    <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We welcome volunteers. Youngistaan is a ‘philanthropy marketplace’ and does not work directly
                            with the underprivileged. Youngistaan needs support in marketing, design, verification visits,
                            and many other areas. Please write to us at info@youngistaan.org with the skill set that you
                            have and let’s talk. If working on ground with the needy is what you are looking for, we
                            recommend you contact one of the NGOs listed on our website.
                        </div>
                    </div>
                </div>

                {{-- ITEM 5 --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingfive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                            How do I know my transaction is secure?
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Youngistaan has very high standards on credit card security to better protect the information
                            you give us when you make the donation. We do not store any payment information on our servers.
                        </div>
                    </div>
                </div>
            </div>

            {{-- need help --}}
            <h3 class="my-3">Need Help?</h3>
            <p>For the needs of a special donation, you can contact donation@youngistaan.org</p>
            <p><i class="fa fa-phone" aria-hidden="true"></i> 78372-77738</p>
            <p><i class="fa fa-envelope" aria-hidden="true"></i> info@youngistaan.org</p>
            <img src="{{ url('/images/qrcode.jpeg') }}" alt="">
        </div>
    </div>
@endsection
