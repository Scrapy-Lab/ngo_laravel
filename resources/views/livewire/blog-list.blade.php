<div class="campaignsInner">
    <div class="row justify-content-between">
        <div class="container titleMargin">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 mb-lg-3 upcard">
                    <h1>Our Blog & News Updates</h1>
                    <p>
                        Let's read our latest News, updates and articles.
                    </p>
                </div>
            </div>
        </div>
            <div class="owl-carousel owl-theme">
            {{-- COMPAIGN BOX --}}
            @forelse ($Projects as $project)
                <div class="item">
                    <div class="col-md-11">
                        <div class="campaignBox">
                            <figure>
                                <img src="{{ asset($project->image()) }}" alt="">
                            </figure>
                            <div class="campaignboxcontent">
                                <a href="{{ route('project-details', $project->slug) }}">{{ $project->title }}</a>
                                <p>{!! html_entity_decode(Str::limit($project->content, 100)) !!}</p>
                                <a href="{{ url('blog/post/'.$project->slug) }}" id="readMore">
                                    <button class="read-btn">

                                        Read
                                        More
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <b>Projects are not available now.</b>
            @endforelse
        </div>
    </div>
</div>
