@extends('layouts.app')
@section('content')
    <!-- section-1 -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        @livewire('homepage-slider')
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- end -->
    <!-- section -->
    <div class="container txt-1">
        <div class="row">
            <div class="col-lg-6 col-sm-12 divCenter">
                <p>We're helping hand on</p>
                <h1>76800+ Children in 20+ Cities in India.</h1>
            </div>

            <p class="paracen">
                We are providing quality education to 76800+ per year underprivilege children in India.
            </p>
        </div>
    </div>
    <!-- end -->
    <!-- section-start -->
    <div class="container-fluid sec-2">
        <div class="row fourdivs">
            <div class="col-lg-2  clsFlexxx col-md-4">
                <i class="fa-solid fa-medal fnt-cn"></i>
                <div class="crts">
                    <h2><span class="counter" data-end-value="76800">0</span>+</h2>
                    <p>Children P/year</p>
                </div>
            </div>

            <div class="col-lg-2 clsFlexx col-md-4">
                <i class="fa-solid fa-globe fnt-cn"></i>
                <div class="crtss">
                    <h3> <span class="counter" data-end-value="20">0</span>+</h3>
                    <p>Cities Work</p>
                </div>
            </div>
            <div class="col-lg-2 clsFlexxx col-md-4">
                <i class="fa-solid fa-people-roof"></i>
                <div class="crts">
                    <h3> <span class="counter" data-end-value="800">3</span>+</h3>
                    <p>Active Members</p>
                </div>
            </div>
            <div class="col-lg-2 clsFlexx col-md-4">
                <i class="fas fa-handshake"></i>

                <div class="crtss">
                    <h3> <span class="counter" data-end-value="1500">0</span>+</h3>
                    <p>Active Donors</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- section-2 -->

    <!-- section-2 end -->
    <div class="container project-main campaignsInner" style="margin-bottom: 5em;">
        {{-- <div class="row"> --}}
        {{-- <div class="container txt-1">
            <div class="row">
                <div class="col-lg-6 col-sm-12 divCenter">
                    <p>Hope in Action, Hearts United.</p>
                    <h1>Our Projects</h1>
                </div>

                <p class="paracen">
                    Bringing Light to Dark Corners, Hope to Forgotten Souls, One Project at a Time.
                </p>
            </div>
            </div> --}}

        <div class="container titleMargin">
            <div class="row">
                <div class="col-6 mb-lg-3  upcard">
                    <h1>Our Projects</h1>
                    <p>
                        Bringing Light to Dark Corners, Hope to Forgotten Souls, One Project at a Time.
                    </p>
                </div>
            </div>
        </div>

        {{-- COMPAIGN BOX --}}
        <div class="owl-carousel owl-theme">
            @forelse ($projects as $project)
                <div class="item">
                    <div class="col-md-11 mt-3">
                        <div class="campaignBox">
                            <figure>
                                <img src="{{ asset('storage/' . $project->image) }}" alt="">
                            </figure>
                            <div class="campaignboxcontent">
                                <a href="{{ route('project-details', $project->slug) }}">
                                    <h3>{{ $project->title }}</h3>
                                </a>
                                <p>{!! html_entity_decode(Str::limit($project->description, 100)) !!}</p>
                                <a href="{{ route('project-details', $project->slug) }}" id="readMore">

                                    <button class="read-btn">Read
                                        More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        {{-- </div> --}}
    </div>
    <!-- section 3 -->
    <div class="container sec-3 sec_marginB">
        <div class="row">
            <div class="sct-2 col">
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('images/Picture3.jpg') }}" alt="" class="crd-img" />
                </div>
                <div class="main-content col-lg-7">
                    <h1>We are Young India, We are Youngistaan!</h1>
                    <p class="prg">
                        Youngistaan was found in February 2017,
                        Youngistaan is based in Ludhiana, Punjab with multiple projects that run throughout the country.
                    </p>
                    <div>
                        <p class="cnt-prg">
                            Founded 8 years ago, Youngistaan Foundation was born out of a shared passion for education and
                            a deep-seated belief in its transformative power. Our founder Mr. Sandeep Kumar, inspired by
                            the stories of children denied the opportunity to learn, set out to create an organization
                            that would make a difference where it mattered most - in the lives of those who need it most.
                            Since then, we have worked tirelessly to break down barriers to education, advocating for
                            policy changes, mobilizing resources, and partnering with local communities to create
                            sustainable solutions. From building schools and providing scholarships to training teachers
                            and developing innovative educational programs, our impact extends far beyond the classroom.
                        </p>
                    </div>
                    <div class="row icn-bx">
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-medal fnt-cn"></i>

                            <div class="crt">
                                <h3>148</h3>
                                <p>success Compaign</p>
                            </div>
                        </div>
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-globe fnt-cn"></i>

                            <div class="crt">
                                <h3>14</h3>
                                <p>cities we are</p>
                            </div>
                        </div>
                        <div class="col-4 classFlex">
                            <i class="fa-solid fa-flag fnt-cn"></i>

                            <div class="crt">
                                <h3>12</h3>
                                <p>Campaign running</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- section end -->
    <div class="container-fluid sec-8 sec_marginB">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <img src="{{ asset('images/Picture1.jpg') }}" alt="" srcset="" class="orphan-cnt" />
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="oph-para">
                    <h1>Sponsor To Our Talented Children</h1>
                    <p class="oph-cont">
                        At Youngistaan, we believe that every child deserves the opportunity to pursue their passions and
                        realize their full potential. That's why we're launching our "Sponsor Our Talented Children"
                        initiative, a heartfelt invitation for compassionate individuals and organizations to join us in
                        supporting young talents from underserved communities.
                    </p>
                    <a href="{{ route('donate-now') }}">
                        <button type="button" class="bnner-btn">
                            Donate now
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <img src="{{ asset('images/chart1.png') }}" alt="" srcset="" class="sponsor-img">
            </div>
        </div>
    </div>
    <!-- end -->
    <!-- start -->
    <div class="container MyCustomCard sec_marginB">

        <div class="container titleMargin">
            <div class="row">
        <div class="col-6 mb-lg-3 upcard">
            <h1>Our Upcoming Programs</h1>
            <p>Empowering Communities, Transforming Lives: Our Exciting Initiatives Ahead!</p>
        </div>
        </div>
        </div>

        <div class="row">

            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card Main-cnt ">
                    <img src="{{ asset('images/droplets.png') }}" class="card-img-top CustomImg" alt="..." />
                    <div class="card-body bodyCustom">
                        <p class="card-text text-white">
                            As an NGO deeply committed to creating positive change, we are thrilled to announce
                            our upcoming programs aimed at empowering communities and transforming lives.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right"
                                style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card Main-cnt">
                    <img src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" class="card-img-top"
                        alt="..." />
                    <div class="card-body mycustomcardBody">
                        <h5 class="card-title text-white">Right To Vote</h5>
                        <p class="card-text text-white">
                            Its our upcoming programs for voting power awarness to the public of Punjab .
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right"
                                style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card">
                    <img src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}" class="card-img-top sec-img"
                        alt="..." />
                    <div class="card-body mYCustomcard">
                        <h5 class="card-title text-white">Food Distribution </h5>
                        <p class="card-text text-white">
                            Upcoming event for the needy children. We will distributes the food to our children.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right"
                                style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
                <div class="card Main-cnt">
                    <img src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" class="card-img-top"
                        alt="..." />
                    <div class="card-body Custombody">
                        <h5 class="card-title text-white">John</h5>
                        <p class="card-text text-white">
                            Organize a Drawing Event for our children of Youngistaan.
                        </p>
                        <button class="btn text-white link"><i class="fa-solid fa-arrow-right"
                                style="margin-right: 5px;"></i>Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end -->
    <!-- section-5 start -->
    <div class="container sect-5 sec_marginB">
        <div class="row">
            <div class="col sct-2">
                <div class="col-lg-5 col-md-12">
                    <img src="{{ asset('images/Picture2.png') }}" alt="" class="crds-img" />
                </div>
                <div class="main-cont col-lg-7 col-md-12">
                    <h1>Message From Founder & CEO</h1>
                    <p>
                        Dear Friends and Supporters,<br><br><br>
                        I am filled with immense gratitude as I reflect on the remarkable journey we've embarked on
                        together. At Youngistaan our mission isn't just about creating change – it's about igniting a
                        spark of hope, inspiring hearts, and transforming lives.<br><br><br>
                        Each day, we are reminded of the incredible resilience and strength within every individual we
                        serve. From the children whose laughter echoes through our programs to the communities who
                        rally together in times of need, it is their unwavering spirit that fuels our passion and
                        drives our determination.<br><br><br>Thank you for being part of this extraordinary adventure. Your
                        support, dedication, and belief in our mission are the driving force behind everything we do.<br>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- section ends -->
    <!-- next-section -->
    <div class="container sect-6  h-100 logo-sect">

        <div class="container titleMargin">
            <div class="row">
        <div class="mb-lg-3 col-6 upcard">
            <h1>Our Board Team</h1>
            <p>Behind Every Smile, Every Success, Every Changed Life - Our Dedicated Volunteers Shine Bright.</p>
        </div>
            </div></div>

        <div class="row">
            <div class="sliderTeam " style="display: ruby;">
                <div class="logos d-flex" style="margin-right:38px">
                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/umar-ben-ZGQKW-nIW8o-unsplash.jpg') }}"
                                class="card-img-top sec-img" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Alisha</h5>
                                <p class="card-text">Designation</p>

                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">2years</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Deepak</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">1years</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}"
                                class="card-img-top sec-img" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Lisoba</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">3years</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">John</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience
                                    <span style="color: red; float: right">2years</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logos d-flex">
                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/umar-ben-ZGQKW-nIW8o-unsplash.jpg') }}"
                                class="card-img-top sec-img" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Alisha</h5>
                                <p class="card-text">Designation</p>

                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">2years</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Deepak</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">1years</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}"
                                class="card-img-top sec-img" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">Lisoba</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience <span style="color: red; float: right">3years</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mediaQur mr-2">
                        <div class="card">
                            <img src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">John</h5>
                                <p class="card-text">Designation</p>
                                <p class="card-para">
                                    Donated
                                    <span style="color: red; float: right">5000</span>
                                </p>
                                <p>
                                    Experience
                                    <span style="color: red; float: right">2years</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- end -->
    <!-- logo -->
    <div class="container h-100 logo-sect">

        <div class="container titleMargin">
            <div class="row">
                <div class="mb-lg-3 col-6 upcard">
                    <h1>Our Partners & Sponsors</h1>
                    <p>Honoring Our Esteemed Partners and Sponsors in Our Journey of Change.</p>
                </div>

            </div></div>
        <div class="row align-items-center h-100">
            <div class="container rounded ">

                <div class="slider">
                    <div class="logos">
                        <i class="fab fa-js fa-4x"></i>
                        <i class="fab fa-linkedin-in fa-4x"></i>
                        <i class="fab fa-dribbble fa-4x"></i>
                        <i class="fab fa-medium-m fa-4x"></i>
                        <i class="fab fa-github fa-4x"></i>
                    </div>
                    <div class="logos">
                        <i class="fab fa-js fa-4x"></i>
                        <i class="fab fa-linkedin-in fa-4x"></i>
                        <i class="fab fa-dribbble fa-4x"></i>
                        <i class="fab fa-medium-m fa-4x"></i>
                        <i class="fab fa-github fa-4x"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- section -->
        <div class="container bnnerimg sec_marginB">
            <div class="card bg-dark text-white">
                <img src="{{ asset('images/brittani-burns-LCzc79jZGf4-unsplash.jpg') }}" class="card-img footerImg"
                    alt="..." />
                <div class="card-img-overlay MYcard">
                    <h5 class="card-title CustomTitle">Card title</h5>
                    <a href="{{ route('donate-now') }}">
                        <button type="button" class="CstomBtn">
                            Donate now
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- end -->
        <!-- <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div id="news-slider" class="owl-carousel">
                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1596265371388-43edbaadab94?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>

                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=303&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=503" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>

                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1564979268369-42032c5ca998?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=500" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>

                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1576659531892-0f4991fca82b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=301&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=501" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>

                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1586083702768-190ae093d34d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=305&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=505" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>

                                    <div class="post-slide col-4">
                                        <div class="post-img">
                                            <img src="https://images.unsplash.com/photo-1484656551321-a1161420a2a0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=306&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=506" alt="">
                                            <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="post-content">
                                            <h3 class="post-title">
                                                <a href="#">Lorem ipsum dolor sit amet.</a>
                                            </h3>
                                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consectetur cumque dolorum, ex incidunt ipsa laudantium necessitatibus neque quae tempora......</p>
                                            <span class="post-date"><i class="fa fa-clock-o"></i>Out 27, 2019</span>
                                            <a href="#" class="read-more">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        <!-- end -->
        <div class="container bnnerimg sec_marginB">
            @livewire('blog-list')
        </div>
        <!-- end -->
    @endsection
