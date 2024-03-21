@extends('layouts.app')
@section('content')
<!-- heading -->
<div class="container-fluid about-sect-1">
  <h3 style="color:white;margin-left:1em;">About</h3>
  <span style="color: white;margin-right:1em;">Home/about</span>
</div>
<!-- end -->
<!-- hero section -->
<div class="container left-txt">
  <div class="row">
    <!-- <div class="col About-hero"> -->
    <div class="col-lg-6 col-md-12 col-sm-12 About-hero">
      <img src="{{ asset('images/youngistaan-education-1.jpg') }}" alt="youngistaan-education-1.jpg" class="About-img">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="hero-content">
        <h1>Who We Are</h1>
        <h5>We are here not for income, but for outcome.</h5>
        <p>We Help People on approach to living and serving well. It encompasses four simple phases: Learn, Discover, and Act..</p>
        <p>With over 1200+ registered young volunteers, Youngistaan is committed to making a difference in our communities by helping those in need. We are a platform for young people who are ready to create real change in the areas of hunger, homelessness, poverty, education inequity, emergency responses, animal rights, capacity building and many more issues</p>
      </div>
    </div>
  </div>

</div>
<!-- </div> -->
<!-- end -->
<!-- section-1  -->
<div class="container-fluid sec-2">
  <div class="row fourdivs">
    <div class="col-lg-2  Aboutbox3  col-md-4">
      <i class="fa-regular fa-file-lines"></i>
      <div class="crts">
        <h2><span class="counter" data-end-value="76800">0</span>+</h2>
        <p>Students P/year</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 Aboutbox4">
      <i class="fa-solid fa-hospital"></i>
      <div class="crtss">
        <h3> <span class="counter" data-end-value="20">0</span>+</h3>
        <p>Cities Work</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 Aboutbox3">
      <i class="fa-solid fa-people-roof"></i>
      <div class="crts">
        <h3> <span class="counter" data-end-value="800">3</span>+</h3>
        <p>Active Members</p>
      </div>
    </div>
    <div class="col-lg-2 col-md-4 Aboutbox4">
      <i class="fa-solid fa-clock"></i>
      <div class="crtss">
        <h3> <span class="counter" data-end-value="1500">0</span>+</h3>
        <p>Active Donors</p>
      </div>
    </div>
  </div>
</div>
<!-- end -->
<!-- section-2 -->
<div class="container-fluid StoryImage">
  <h1 class="About-text">Story of youngistaan</h1>
  <div class="row youngistan-sect">
    <div class="col-lg-6">
      <img src="{{ asset('images/collapse.jpg.jpeg') }}" alt="" srcset="" class="story-img">
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div class="storycnt">
        <p>The journey of youngistaan started in 2013. The slogan of youngistaan “We help people on approach to living and serving well. It encompasses three simple phases: learn, discover and act” describes that how much this NGO is committed towards people who are in need of just a little. Back in our college time, we saw some children begging at the traffic signal. In order to secure their future, we thought to aware them about the education and real world knowledge. Initially, we made a group in college to conduct a survey in a particular slum area and gathered approx. 20-30 children and their parents to make them aware about the importance of education. Under the act of right to education, we started a project and soon after the college we conducted a class of 2 hours daily for the children. Due to poverty, they were not having sufficient amount of money to get education in school and so we took the initiative and get them admission in nearest primary school. For now, they are a go getter and achieving highest pedestal in their life. Youngistaan was registered in February 2017 with multiple projects that run throughout the country. The NGO is committed for young people who are ready to create real change in the areas of hunger, homelessness, poverty, education inequity, gender inequality, taboos on menstruation, emergency responses, animal rights, capacity building and many more issues. In 2018, we started an institution for those children who are capable to study but doesn’t have resources to move further. We started giving internship to college going students and currently we have 344 volunteers. Approximately, 120+ companies have sponsored this NGO with 1200+ donors. Youngistaan have 64 members who works in a single city out of 16 cities. Everyone here is passionate about their work, incredibly smart, and genuinely kind.
          Our partnerships with Government bodies, the Police and other organizations in the NGO ecosystem allow us to join hands with those who share our commitment and dedication to improving the lives of people in need through on-ground programs. We are fighting every minute of every day to encounter every societal challenges to better living by constant effort to finish what we started and achieve our vision to build compassion among people and put our concerns into action through improvement of health, impart education, and alleviate poverty.</p>
      </div>
    </div>
  </div>

</div>
<!-- end -->
<!-- section-3 -->
<div class="container Aboutsec-2">
  <h1 class="About-text">Annual Report</h1>
  <div class="row Abtfourdivs">
    <div class="col-lg-2 Aboutbox3 col-md-4 col-sm-4">
      <div class="crts">
        <h2>2023</h2>
        <p>Reports</p>
      </div>
    </div>
    <div class="col-lg-2 Aboutbox4 col-md-4 col-sm-4">
      <div class="crtss">
        <h3>2022</h3>
        <p>Reports</p>
      </div>
    </div>
    <div class="col-lg-2 Aboutbox3 col-md-4 col-sm-4">
      <div class="crts">
        <h3>2021</h3>
        <p>Reports</p>
      </div>
    </div>
    <div class="col-lg-2 Aboutbox4 col-md-4 col-sm-4">
      <div class="crtss">
        <h3>More</h3>
        <p>Reports</p>
      </div>
      <span><i class="fa-solid fa-arrow-right fs-4 about-icon"></i></span>
    </div>
  </div>
</div>
<!-- end -->
<!-- section-4 -->
<div class="container bnnerimg">
  <div class="card bg-dark text-white">
    <img src="{{ asset('images/youngistaan.jpg') }}" class="card-img footerImg" alt="... " />
    <!-- <div class="card-img-overlay MYcard">
      <button type="button" class="Abt-btns">Join Now</button>
    </div> -->
  </div>
</div>
<!-- end -->
<!-- blog section -->
{{-- <section class="py-3 py-md-5">
  <div class="container overflow-hidden">
    <div class="row gy-4 gy-lg-0">
      <div class="col-12 col-lg-4">
        <article>
          <div class="card border-0">
            <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
              <a href="#!">
                <img class="img-fluid bsb-scale bsb-hover-scale-up" src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" alt="Business">
</a>
<figcaption>
  <h4 class="h6 text-white bsb-hover-fadeInRight mt-2">Read More</h4>
</figcaption>
</figure>
<div class="card-body border bg-white p-4">
  <div class="entry-header mb-3">
    <ul class="entry-meta list-unstyled d-flex mb-2">
      <li>
        <a class="link-primary text-decoration-none" href="#!">Business</a>
      </li>
    </ul>
    <h2 class="card-title entry-title h4 mb-0">
      <a class="link-dark text-decoration-none" href="#!">Overcoming Challenges to Make a Living Online</a>
    </h2>
  </div>
  <p class="card-text entry-summary text-secondary">
    Making money online is attainable. However, even if the processes are simple, you may still need help with issues.
  </p>
</div>
</div>
</article>
</div>
<div class="col-12 col-lg-4">
  <article>
    <div class="card border-0">
      <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
        <a href="#!">
          <img class="img-fluid bsb-scale bsb-hover-scale-up" src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}" alt="Nutrition">
        </a>
        <figcaption>
          <h4 class="h6 text-white bsb-hover-fadeInUp mt-2">Read More</h4>
        </figcaption>
      </figure>
      <div class="card-body border bg-white p-4">
        <div class="entry-header mb-3">
          <ul class="entry-meta list-unstyled d-flex mb-2">
            <li>
              <a class="link-primary text-decoration-none" href="#!">Nutrition</a>
            </li>
          </ul>
          <h2 class="card-title entry-title h4 mb-0">
            <a class="link-dark text-decoration-none" href="#!">How to Exercise to Achieve Your Nutrition Goals</a>
          </h2>
        </div>
        <p class="card-text entry-summary text-secondary">
          Fitness trainer explains how nutrition is as important as workouts when it comes to losing fat or building muscle.
        </p>
      </div>
    </div>
  </article>
</div>
<div class="col-12 col-lg-4">
  <article>
    <div class="card border-0">
      <figure class="card-img-top m-0 overflow-hidden bsb-overlay-hover">
        <a href="#!">
          <img class="img-fluid bsb-scale bsb-hover-scale-up" src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}" alt="Health">
        </a>
        <figcaption>
          <h4 class="h6 text-white bsb-hover-fadeInLeft mt-2">Read More</h4>
        </figcaption>
      </figure>
      <div class="card-body border bg-white p-4">
        <div class="entry-header mb-3">
          <ul class="entry-meta list-unstyled d-flex mb-2">
            <li>
              <a class="link-primary text-decoration-none" href="#!">Health</a>
            </li>
          </ul>
          <h2 class="card-title entry-title h4 mb-0">
            <a class="link-dark text-decoration-none" href="#!">10 Tips To Lose Weight Quickly Without Dieting</a>
          </h2>
        </div>
        <p class="card-text entry-summary text-secondary">
          Chewing slowly and eating more fiber may help you lose weight quickly without exercise or a specific diet plan.
        </p>
      </div>
    </div>
  </article>
</div>
</div>
</div>
</section> --}}

<div class="container bnnerimg ">
  @livewire('blog-list')
</div>
<!-- end -->
@endsection