<div class="campaignsInner">
    <div class="row justify-content-between">
        {{-- COMPAIGN BOX --}}
        @forelse ($Projects as $project)
            <div class="col-md-4">
                <div class="campaignBox">
                    <figure>
                        <img src="{{ asset( $project->image()) }}" alt="">
                    </figure>
                    <div class="campaignboxcontent">
                        <a href="{{ route('project-details', $project->slug) }}">{{ $project->title }}</a>
                        <p>{!! html_entity_decode(Str::limit($project->content, 100)) !!}</p>
                        <a href="{{ route('project-details', $project->slug) }}" id="readMore">
                            <button class="read-btn">

                                Read
                                More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <b>Projects are not available now.</b>
        @endforelse
    </div>
</div>
