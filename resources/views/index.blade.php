@extends('layouts.app')
@section('content')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>

    <body>
        <!-- section-1 -->
        <div
        id="carouselExampleCaptions"
        class="carousel slide"
        data-bs-ride="carousel"
        >
        <div class="carousel-inner w-100">
            <div class="carousel-item active crsl-txt">
            <img class="Myimg"  src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}" alt="..."/>
            <div class="carousel-caption d-none d-md-block CustomCarousel">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item crsl-txt">
            <img class="Myimg" src="{{ asset('images/portfolio-1.jpg') }}"  alt="..." />
            <div class="carousel-caption d-none d-md-block CustomCarousel">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item crsl-txt">
            <img  class="Myimg"src="{{ asset('images/post-2-750x510.jpg') }}" alt="..." />
            <div class="carousel-caption d-none d-md-block CustomCarousel">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- end -->
        <!-- section -->
        <div class="container txt-1">
        <div class="row">
            <div class="col-6 divCenter">
            <p>We're helping hand on</p>
            <h1>90,100 children in 120+ Countries.Edit</h1>
            </div>

            <p class="paracen">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati
            tenetur placeat,<br />
            modi ipsa dolores odit perspiciatis excepturi velit deleniti
            voluptatibus vitae?
            </p>
        </div>
        </div>
        <!-- end -->
        <!-- section-start -->
        <div class="container-fluid sec-2">
        <div class="row fourdivs">
            <div class="col-lg-2 clsFlexxx col-md-4">
            <i class="fa-regular fa-file-lines"></i>
            <div class="crts">
                <h2>14800+</h2>
                <p>success Compaign</p>
            </div>
            </div>
            <div class="col-lg-2 clsFlexx col-md-4">
            <i class="fa-solid fa-hospital"></i>
            <div class="crtss">
                <h3>38+</h3>
                <p>hospitals we have</p>
            </div>
            </div>
            <div class="col-lg-2 clsFlexxx col-md-4">
            <i class="fa-solid fa-people-roof"></i>
            <div class="crts">
                <h3>3crore+</h3>
                <p>Campaign running</p>
            </div>
            </div>
            <div class="col-lg-2 clsFlexx col-md-4">
            <i class="fa-solid fa-clock"></i>
            <div class="crtss">
                <h3>148lakh+</h3>
                <p>Customer</p>
            </div>
            </div>
        </div>
        </div>
        <!-- end -->
        <!-- section-2 -->
        <div class="container crd-sec">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="crd">
                <div class="image">
                <img
                    src="https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg"
                />
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    In publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 col-sm-12 mycustommargn">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mediaQur">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mediaQur">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mycustommargn">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur col-sm-12">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur col-sm-12">
            <div class="crd">
                <div class="image">
                <img src
                =https://i.pinimg.com/originals/a4/7b/a5/a47ba59b4a353e0928ef0551ca44f980.jpg>
                </div>
                <div class="content">
                <h3>This is content</h3>
                <p>
                    DIn publishing and graphic design, Lorem ipsum is a placeholder
                    text commonly used to demonstrate the visual form of a document
                    or a typeface without relying on meaningful content.
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- section-2 end -->
        <!-- section 3 -->
        <div class="container sec-3">
        <div class="row">
            <div class="sct-2 col">
            <div class="col-lg-6 col-md-12">
                <img src="{{ asset('images/maharastra.jpg') }}" alt="" class="crd-img" />
            </div>
            <div class="main-content col-lg-6">
                <h1>WHO WE ARE</h1>
                <p class="prg">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid
                eius beatae accusantium?Lorem ipsum, dolor sit amet consectetur
                adipisicing elit. Aliquid eius beatae accusantium?
                </p>
                <div>
                <p class="cnt-prg">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque
                    qui sed dolor tempore placeat rerum, labore quibusdam expedita
                    tenetur dicta . Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Officia recusandae dolorem magni deserunt,
                    corporis reprehenderit earum est numquam velit soluta accusamus?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut
                    sapiente, voluptatum nobis fuga doloremque laudantium eum quasi
                    adipisci quia eius odit?Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Harum ullam assumenda minima, vel consequuntur
                    in commodi doloremque, ea mollitia obcaecati alias ut excepturi
                    ducimus veniam quae provident nesciunt atque magnam. Quisquam?
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
        <div class="container sec-8">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="orphan-cnt">
                <img src="{{ asset('images/portfolio-6.jpg') }}" alt="" srcset="" />
            </div>
            </div>
            <div class="col-lg-5 col-md-6">
            <div class="oph-para">
                <p>$45632 TO GO</p>
                <h1>Sponsor An Orphan Child</h1>
                <p class="oph-cont">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed qui
                rem ea? Aliquam, iusto. Cumque in nostrum magnam ex iste harum
                repudiandae labore sit laboriosam vel? Nostrum, voluptates
                voluptatibus. Ad, neque. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Adipisci tempora nesciunt cupiditate dolor!
                Autem alias unde voluptas minima sequi ea nesciunt?
                </p>
                <button type="button" class="btn btn-outline-success">
                Donate now
                </button>
            </div>
            </div>
            <div class="col-3 rounded-circle text-center CustomBorder" style="border-width: 4px;">
            <div class="Mycontent text-white">
                <h1>73%</h1>
                <p>Donated Now</p>
            </div>
        </div>
        
        </div>
        </div>
        <!-- end -->
        <!-- start -->
        <div class="container MyCustomCard">
        <div class="row">
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card Main-cnt">
                <img
                src="{{ asset('images/droplets.png') }}"
                class="card-img-top CustomImg"
                alt="..."
                />
                <div class="card-body bodyCustom">
                <p class="card-text text-white">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad
                    quia, eveniet tempore assumenda velit facere minus soluta at
                    aperiam vel laborum.
                </p>
                <button class="btn text-white link"><i class="fa-solid fa-arrow-right"style="margin-right: 5px;"></i>Read more</button>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body mycustomcardBody">
                <h5 class="card-title text-white">Send donation</h5>
                <p class="card-text text-white">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Labore, repellendus veniam.
                </p>
                <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}"
                class="card-img-top sec-img"
                alt="..."
                />
                <div class="card-body mYCustomcard">
                <h5 class="card-title text-white">Become voluteer</h5>
                <p class="card-text text-white">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Labore, repellendus veniam.
                </p>
                <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body Custombody">
                <h5 class="card-title text-white">John</h5>
                <p class="card-text text-white">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Labore, repellendus veniam.
                </p>
                <button class="btn text-white link"><i class="fa-solid fa-arrow-right" style="margin-right: 5px;"></i>Read more</button>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- end -->
        <!-- section-5 start -->
        <div class="container sect-5">
        <div class="row">
            <div class="col sct-2">
            <div class="col-lg-4 col-md-12">
                <img
                src="{{ asset('images/pexels-carlos-espinoza-2269648.jpg') }}"
                alt=""
                class="crds-img"
                />
            </div>
            <div class="main-cont col-lg-8 col-md-12">
                <h1>NOTE FROM CEO & FOUNDER</h1>
                <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur
                praesentium ipsum dolor placeat nihil quos, eum dolore
                necessitatibus labore dolores culpa consectetur perspiciatis.
                Nihil ex, tempora quas ea sint harum fuga explicabo ipsa est
                laborum molestias? Itaque laudantium voluptatum ducimus tenetur
                natus illum dicta vero dolorem, optio, rem, voluptas libero.<br />
                Illum iure suscipit dolor fuga fugiat error, tenetur molestiae
                iste nobis quis optio odio cumque vitae neque eos molestias quos
                nostrum dicta mollitia ipsam distinctio temporibus! Sit delectus
                distinctio voluptatem nemo necessitatibus est consectetur nisi
                aperiam similique nam, placeat fugiat illo quo? Doloremque labore,
                error repellendus iusto dolor at similique? Lorem, ipsum dolor sit
                amet consectetur adipisicing elit.Libero corrupti quaerat cum
                nulla excepturi quod dignissimos neque necessitatibus aliquam.
                Voluptate corrupti dicta error, natus rem nulla deleniti, deserunt
                maiores earum architecto iste fugit aspernatur ullam perferendis
                cumque laborum. Rem numquam incidunt, quo similique exercitationem
                sapiente ipsum impedit. Assumenda alias explicabo, obcaecati culpa
                nesciunt quis corrupti delectus enim quae ipsa amet quod sed
                nostrum doloremque unde fugiat. Dicta earum id voluptatibus
                </p>
            </div>
            </div>
        </div>
        </div>
        <!-- section ends -->
        <!-- next-section -->
        <div class="container sect-6">
        <div class="row">
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/umar-ben-ZGQKW-nIW8o-unsplash.jpg') }}"
                class="card-img-top sec-img"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">Alisha</h5>
                <p class="card-text">Support military families</p>
                <p class="card-para">
                    Donated <span style="color: red; float: right">$2145632</span>
                </p>
                </div>
            </div>
            </div>

            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/deepak-mahajan-8ig-SzHpqDw-unsplash.jpg') }}"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">Deepak</h5>
                <p class="card-text">Family support program</p>
                <p class="card-para">
                    Donated <span style="color: red; float: right">$2145632</span>
                </p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/lisboa-ind-VnqagyZWhtk-unsplash.jpg') }}"
                class="card-img-top sec-img"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">Lisoba</h5>
                <p class="card-text">ceo of orphan</p>
                <p class="card-para">
                    Donated <span style="color: red; float: right">$2145632</span>
                </p>
                </div>
            </div>
            </div>
            <div class="col-lg-3 col-md-6 mediaQur">
            <div class="card">
                <img
                src="{{ asset('images/jd-chow-gutlccGLXKI-unsplash.jpg') }}"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">John</h5>
                <p class="card-text">child care</p>
                <p class="card-para">
                    Donated
                    <span style="color: red; float: right">$2145632</span>
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end -->
        <!-- section -->
        <div class="container bnnerimg">
        <div class="card bg-dark text-white">
            <img
            src="{{ asset('images/brittani-burns-LCzc79jZGf4-unsplash.jpg') }}"
            class="card-img footerImg"
            alt="..."
            />
            <div class="card-img-overlay MYcard">
            <h5 class="card-title CustomTitle">Card title</h5>
            <p class="card-text footer-txt">
                This is a wider card with supporting text below as a natural lead-in
                to additional content. This content is a little bit longer.
            </p>
            <button type="button" class="btn btn-outline-danger text-white CstomBtn">
                Donate now
            </button>
            </div>
        </div>
        </div>

        <!-- end -->
        <!-- <script src="style.js"></script> -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"
        ></script>
    </body>
    </html>

@endsection
