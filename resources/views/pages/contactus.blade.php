@extends('layouts.app')
@section('content')
<div class="container-fluid about-sect-1">
    <h3 style="color:white;margin-left:1em;">Contact</h3>
    <span style="color: white;margin-right:1em;">Home/contact</span>
</div>
<!-- end -->
<!-- section-1 -->
<div class="container bnnerimg mt-3">
    <div class="card">
        <img src="{{ asset('images/contactbanner.jpg') }}" class="card-img footer-Img" alt="..." />
        <div class="card-img-overlay MYcard-cnt">
            <h5 class="card-title">
                Get in Touch</h5>
            <p class="card-text">
                Tell us what you think
            </p>
        </div>
    </div>
</div>
<!-- end -->
<!-- section-2 -->
<div class="container dealer-section mt-3">
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
            <h2>How to connect us?</h2>
            <p class="cnt-prg">On our journey to make a meaningful impact in the lives of those in need, we invite you to connect with us. Whether you're looking to volunteer your time, donate to our cause, or simply learn more about the work we do, we're here to welcome you with open arms. Every connection we make strengthens our ability to create positive change in the world. So, reach out to us today and let's join forces to spread kindness, hope, and compassion to those who need it most. Together, we can make a difference that lasts a lifetime.
            </p>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-12 no-gutters">
            <img src="{{ asset('images/Youngistaan.png') }}" alt="dealer-img"  class="dealer-img">
        </div>
    </div>
</div>
<!-- end -->
<!-- section-3 -->
<!-- <div class="container team-section ">
    <div class="row">
        <div class="col-6 first-team">
            <img src="{{ asset('images/left.png') }}" alt="" class="team1">
            <div class="team-content">
                <h2>CUSTOMER SUPPORT</h2>
                <p>For support with your bookings and other queries, click here or visit the Support section in the OTO Website.</p>
            </div>
        </div>
        <div class="col-6 first-team">
            <img src="{{ asset('images/right.png') }}" alt="" class="team1">
            <div class="team-content">
                <h2>CUSTOMER COMPALINT</h2>
                <p>For press and media related queries please reach out to complaint@otomotors.in</p>
            </div>
        </div>
    </div>
</div> -->
<!-- end -->
<!-- section-4 -->
<div class="container business-box">
    <div class="row business-cnt">
        <h1>Connect With Youngistaan!</h1>
        <div class="col-lg-3 col-sm-6">
            <h5>Helpline</h5>
            <h1> <a style="color: black; text-decoration:none" href="tel:7837277738" > 78372-77738</a></h1>
        </div>
        <div class="col-lg-3 col-sm-6">
            <h5>Secretariat Team</h5>
            <h6 class="contact_email"><a href="mailto:info@youngistaan.org" > info@youngistaan.org</a></h6>
        </div>
        <div class="col-lg-3 col-sm-6">
            <h5>For Joining </h5>
            <h6 class="contact_email"><a href="mailto:volunteer@youngistaan.org" > volunteer@youngistaan.org</a></h6>
        </div>
        <div class="col-lg-3 col-sm-6">
            <h5>For Donation</h5>
            <h6 class="contact_email"> <a href="mailto:donation@youngistaan.org" >donation@youngistaan.org</a></h6>
        </div>
    </div>
    <div class="row office-cnt">
        <h1>Our offices</h1>
        <div class="col-lg-4 col-sm-6">
            <h5>Ludhiana Office</h5>
            <p>#223, 3rd Floor, Good Luck Tower,Industrial Area – A, Cheema Chowk, Ludhiana – 141003</p>
        </div>
        <div class="col-lg-4 col-sm-6">
            <h5>New Delhi Office</h5>
            <p>#70, Shree Ram Mandir, Nanakpura Gurdwara,South Moti Bagh, New Delhi, 110021</p>
        </div>
        {{-- <div class="col-lg-4 col-sm-6">
            <h5>Hyderabad Office</h5>
            <p>Door No. 529/530, Block-B, 5th Floor, Chandralok Complex, SD Road, Secunderabad, Telangana - 500003</p>
        </div> --}}
    </div>
</div>
<!-- end -->
<!-- section-5 -->

<div class="container bnnerimg ">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-lg-5 mb-5">
                <img src="{{ asset('images/youngistaan-team_n-1.jpg') }}" alt="" srcset="" height="450" class="map-img">
            </div>
            <div class="col-lg-6">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="mapContact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13694.258565051845!2d75.9410842!3d30.8988378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a9d018e517307%3A0x56d29c5e18829339!2sYoungistaan%20Foundation!5e0!3m2!1sen!2sin!4v1712390516993!5m2!1sen!2sin" class="embed-responsive-item" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

        <div class="container bnnerimg ">
            @livewire('blog-list')
        </div>
    </div>
    </div>
        <!-- end -->
        @endsection
