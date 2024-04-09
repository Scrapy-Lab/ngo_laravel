@extends('layouts.app')
@section('content')
    {{-- DONATE PAGE --}}

    <div class="donateMain text-center">
        <h1>Project Details</h1>
    </div>

    {{-- Donate Content --}}

    <div class="donateblogs row justify-content-between">

        {{-- Project Detail Page --}}
        @livewire('project-detail', ['slug' => $slug])

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
            {{-- <img src="{{ url('/images/qrcode.jpeg') }}" alt=""> --}}
        </div>
    </div>
@endsection
