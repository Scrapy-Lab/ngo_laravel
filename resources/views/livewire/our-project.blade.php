<div>
    <div class="ourWorkBanner text-center">
        <h1>Our Work</h1>
    </div>
    <div class="ourworkMain">

        {{-- Campaigns --}}
        <div class="campaigns">
            <h2>Our Campaigns</h2>
            <p>
                Our vision is nothing less than realizing the full potential of the Internet – universal access to research
                and education
            </p>

            <div class="campaignsInner">
                <div class="row justify-content-between">
                    {{-- COMPAIGN BOX --}}
                    @forelse ($allProjects as $project)
                        <div class="col-md-4">
                            <div class="campaignBox">
                                <figure>
                                <img src="{{ asset('storage/' . $project->image) }}" alt=""></figure>
                                <div class="campaignboxcontent">
                                    <a href="#">{{$project->title}}</a>
                                    <p>{!! html_entity_decode(Str::limit($project->description,100)) !!}</p>
                                    <button>Donate Now</button>
                                </div>
                            </div>
                        </div>
                    @empty
                        <b>Projects are not available now.</b>
                    @endforelse
                </div>
            </div>
        </div>

        {{-- Our Partners --}}
        <div class="partnersMain row align-items-center">
            <div class="col-md-6">
                <h3>Our partners</h3>
                <h4>Everyone here is passionate about their work, incredibly smart, and genuinely kind.</h4>
                <p>Our partnerships with Government bodies, the Police and other organizations in the NGO ecosystem allow us to join hands with those who share our commitment and dedication to improving the lives of people in need through on-ground programs. With all of our outreach partners, Youngistaan Foundation ensures that our work is aligned with the 17 Youngistaan with Public Police Foundation of the United Nations. </p>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ url('/images/otobikescare.png') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/hitech.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/sm.jpeg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/ossm.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/bom.jpg') }}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{ url('/images/eastman.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
