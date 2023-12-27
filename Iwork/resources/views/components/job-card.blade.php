
@props(['job'])

<div class="available2">
    <div class="av1">
        <h3  >   <a class=" text-darkBlue font-semibold  no-underline"  href="/jobs/{{ $job['id'] }}">{{ $job->title}}</a></h3>
    </div>
    <div class="av2">
        <h4>{{ $job->location}}</h4>
        <p>{{ $job->status}}</p>
    </div>
    <div class="av3">
        <h4>Posted by</h4>
    </div>
    <div class="av4">
        <img src={{ $job->logo ? asset('storage/'. $job->logo):asset('/img/ic.png') }} alt="">
        <h4>{{ $job->company }}</h4>
        <p>2 days ago</p>
    </div>
</div>