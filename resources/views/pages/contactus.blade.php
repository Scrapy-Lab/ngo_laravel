@extends('layouts.app')
@section('content')
<div class="container-fluid about-sect-1">
    <h3 style="color:white;margin-left:1em;">Contact</h3>
    <span style="color: white;margin-right:1em;">Home/contact</span>
</div>
<!-- end -->
<!-- section-1 -->
<div class="container bnnerimg">
    <div class="card">
        <img src="{{ asset('images/contactbanner.jpg') }}" class="card-img footer-Img" alt="..." />
        <div class="card-img-overlay MYcard-cnt">
            <h5 class="card-title" style="padding-top: 4%;">
                Get in Touch</h5>
            <p class="card-text">
                Tell us what you think
            </p>
        </div>
    </div>
</div>
<!-- end -->
<!-- section-2 -->
<div class="container dealer-section">
    <div class="row">
        <div class="col-6">
            <h2>How to connect us?</h2>
            <p>To connect with us, you can visit our website and use the contact form to send us a message or find the nearest branch in
                your city and reach out to us. For any queries or concerns, you can reach out to our customer support team through our website
                contact form or by visiting one of our branches in 20+ cities across India.</p>
        </div>
        <div class="col-6">
            <img src="{{ asset('images/dealer.jpg') }}" alt="dealer-img" class="dealer-img">
        </div>
    </div>
</div>
<!-- end -->
<!-- section-3 -->
<div class="container team-section ">
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
</div>
<!-- end -->
<!-- section-4 -->
<div class="container business-box">
    <div class="row business-cnt">
        <h1>Business with OTO Motors</h1>
        <div class="col-3">
            <h5>Helpline</h5>
            <h1>88727-46727</h1>
        </div>
        <div class="col-3">
            <h5>Email</h5>
            <h4>info@otomotors.in</h4>
        </div>
        <div class="col-3">
            <h5>dealer solution</h5>
            <h4>Dealer solution</h4>
        </div>
        <div class="col-3">
            <h5>Used Car Business</h5>
            <h4>Become partner</h4>
        </div>
    </div>
    <div class="row office-cnt">
        <h1>Our offices</h1>
        <div class="col-4">
            <h5>Ludhiana Office</h5>
            <p>#223, 3rd Floor, Good Luck Tower,Industrial Area – A, Cheema Chowk, Ludhiana – 141003</p>
        </div>
        <div class="col-4">
            <h5>New Delhi Office</h5>
            <p>#70, Shree Ram Mandir, Nanakpura Gurdwara,South Moti Bagh, New Delhi, 110021</p>
        </div>
        <div class="col-4">
            <h5>Hyderabad Office</h5>
            <p>Door No. 529/530, Block-B, 5th Floor, Chandralok Complex, SD Road, Secunderabad, Telangana - 500003</p>
        </div>
    </div>
</div>
<!-- end -->
<!-- section-5 -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 mb-lg-5">
           <img src="{{ asset('images/youngistaan-team_n-1.jpg') }}" alt="" srcset="" height="450" >
        </div>
        <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13757.4498502598!2d74.51117165!3d30.454170050000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1710677064655!5m2!1sen!2sin" width="680" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<!-- end -->
@endsection