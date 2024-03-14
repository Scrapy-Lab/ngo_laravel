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
        <h5>We are here not for income, but for outcome</h5>
        <p>Lorem Aenean nec quam efficitur, volutpat felis quis, commodo lacus. Morbi feugiat orci vel urna semper, ac tempus nunc luctus. Etiam quis placerat purus. Nulla fringilla varius lacus, eget eleifend sapien malesuada eget. Phasellus porta magna diam, ut accumsan massa semper in. Aliquam elit lectus, tincidunt eget vulputate vel, faucibus vitae elit. Donec sit amet quam facilisis, hendrerit lacus vitae, commodo dui. Nam consectetur ex nibh, id vulputate ex lacinia nec. Suspendisse nisi ante, luctus vel vestibulum in, commodo non dui. Suspendisse potenti. Nulla euismod lacus elit, vitae malesuada leo varius eu. Nam non quam posuere, facilisis augue sit amet, eleifend augue. In quis elit quis risus ornare tristique.</p>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean dolor leo, scelerisque ac mauris vitae!”</p>
      </div>
    </div>
  </div>

</div>
<!-- </div> -->
<!-- end -->
<!-- section-1  -->
<div class="container-fluid sec-2">
    <div class="row fourdivs">
        <div class="col-lg-2  Aboutbox3 clsFlexxx col-md-4">
            <i class="fa-regular fa-file-lines"></i>
            <div class="crts">
                <h2 ><span class="counter" data-end-value="14800">0</span>+</h2>
                <p>success Compaign</p>
            </div>
        </div>
        <div class="col-lg-2 clsFlexx col-md-4 Aboutbox4">
            <i class="fa-solid fa-hospital"></i>
            <div class="crtss">
                <h3> <span class="counter" data-end-value="38">0</span>+</h3>
                <p>hospitals we have</p>
            </div>
        </div>
        <div class="col-lg-2 clsFlexxx col-md-4 Aboutbox3">
            <i class="fa-solid fa-people-roof"></i>
            <div class="crts">
                <h3> <span class="counter" data-end-value="3">3</span>crore+</h3>
                <p>Campaign running</p>
            </div>
        </div>
        <div class="col-lg-2 clsFlexx col-md-4 Aboutbox4">
            <i class="fa-solid fa-clock"></i>
            <div class="crtss">
                <h3> <span class="counter" data-end-value="148">0</span>lakh+</h3>
                <p>Customer</p>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<!-- section-2 -->
<div class="container-fluid StoryImage">
  <h1 class="About-text">Story of youngistaan</h1>
  <div class="row">
  <div class="col-lg-7 m-auto col-md-12 col-sm-12 p-md-5 p-sm-4">
        <img class='grid-item grid-item-1 img-3'
          src='https://images.unsplash.com/photo-1544568100-847a948585b9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
        <img class='grid-item grid-item-2 img-2'
          src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
        <img class='grid-item grid-item-4 img-1'
          src='https://images.unsplash.com/photo-1507146426996-ef05306b995a?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
        <img class='grid-item grid-item-6 img-5'
          src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
        <img class='grid-item grid-item-5 img-6'
          src='https://images.unsplash.com/photo-1517423440428-a5a00ad493e8?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
        <img class='grid-item grid-item-6 img-4'
          src='https://images.unsplash.com/photo-1548199973-03cce0bbc87b?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ'
          alt=''>
  </div>
    <div class="col-lg-5 col-md-12 col-sm-12">
      <div class="storycnt">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quos perferendis vero
          inventore? Alias voluptas eius tenetur, cumque, doloribus molestiae iste ad eveniet tempore et
          repellat, animi voluptatem earum quis deserunt illo possimus nam! Hic numquam, consequuntur
          laborum qui in, quisquam assumenda repellendus ullam est commodi laboriosam suscipit molestiae
          quo ut voluptatum illum quod. Veniam rerum commodi voluptas laudantium distinctio neque in aperiam
          possimus praesentium est similique et harum fugiat, saepe illum beatae quo corrupti velit sapiente facilis.
          Nesciunt impedit id quisquam libero ducimus, dicta inventore natus ad consectetur vero sapiente obcaecati qui illum quasi ut iure voluptate magni laborum.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam aspernatur iure praesentium odio? Odit maiores magnam cum molestiae recusandae cumque nesciunt iste fuga minus eligendi, quaerat tempore similique officia impedit nisi est eos tempora natus! Excepturi unde voluptate non, quibusdam perspiciatis culpa laboriosam vero vel ducimus soluta inventore quod ullam temporibus, doloremque amet fuga nihil debitis dolorum reiciendis doloribus autem! Amet voluptatem praesentium error non similique cum officiis nostrum ducimus commodi doloribus consequatur in ea, assumenda, odit maxime, rerum dolor cupiditate pariatur provident aliquid nam facere voluptatibus molestiae? Harum ad ab incidunt cumque delectus. Ipsum distinctio excepturi accusamus tenetur atque!
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officiis earum impedit illum fugit dolore odio quas perspiciatis enim voluptatibus quia cum, doloribus sunt numquam, aperiam fuga, eligendi nesciunt dolorem eum iste necessitatibus nemo? Aut amet accusamus illum quia. Sunt iusto quidem expedita? Ipsum deserunt quaerat iusto tempore velit esse nesciunt? </p>
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
    <img src="{{ asset('images/bg-4.jpg') }}" class="card-img footerImg" alt="... " />
    <div class="card-img-overlay MYcard">
      <button type="button" class="Abt-btns">Join Now</button>
    </div>
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
