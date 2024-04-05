{{-- FOOTER --}}

<div class="mainfooter">
    <div class="footerinner">
        <div class="row justify-content-between">
            <div class="col-md-3">
                <img src="{{ url('images/logo/site_logo_white.png') }}" alt="" width="150px">
                {{-- <h3>About Us</h3> --}}
                <p class="footercontn">Youngistaan Foundation is a network of volunteers, committed to making a difference in the community by helping those in need.</p>
            </div>
            <div class="col-md-3">
                <h3>Quick Links</h3>
                <ul class="blogsList">
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('our-projects')}}">Our Projects</a>
                    </li>
                    <li>
                        <a href="{{route('blogs')}}">Blog</a>
                    </li>
                    <li>
                        <a href="{{route('about-us')}}">About us</a>
                    </li>
                    <li>
                        <a href="{{route('contact-us')}}">Contact us</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-3">
                <h3>Get in Touch</h3>
                <ul class="blogsList">
                    <li><a class="charityList" href="{{ url('/join-now') }}">Join Now</a></li>
                    <li><a class="charityList" href="{{ url('/donate') }}">Donate Now</a></li>
                    <li>
                        <a href="">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="">Terms & Conditions</a>
                    </li>
                    <li>
                        <a href="">Refund & Cancellation Policy</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
               <h3>Contact Details</h3>
               <ul class="quick">
                <li><p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong> Head Office:</strong>#1123, 2nd Floor, Sector-39, Opp. ICICI Bank, Chandigarh Road, Ludhiana -141010 (PB.)</p></li>
                <li><p><i class="fa fa-phone" aria-hidden="true"></i> <strong>Phone Number : </strong> <a href="tel:7837277738" class="mr-2"> 78372-77738 </a></p></li>
                <li><p><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong>Email :</strong><a href="mailto:info@youngistaan.org" > info@youngistaan.org </a></p></li>
                <li>
                    <ul class="socialMediaLinks d-flex gap-5">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    </ul>
                </li>
               </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>Copyright © 2021 <b><a href="youngistaan.org" style="text-decoration: none">Youngistaan Foundation</a></b> . All Rights Reserved  |  Developed By <b><a style="text-decoration: none" href="growessgroup.com">Growess Group</a></b></p>
    </div>
</div>
