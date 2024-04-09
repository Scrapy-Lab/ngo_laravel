<div class="col-md-8 donateblogcontent">
    <div class="donateBlogbox">
        <img src="{{ asset('storage/' . $projectDetails->image ) }}" alt="" class="project_details_images">
        <div class="donateBlogInnerbox">
            <h3>{{ $projectDetails->title }}</h3>
            <p>{!! html_entity_decode($projectDetails->description) !!}</p>
        </div>
    </div>
</div>
