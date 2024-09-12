<h2>{{ $job->title }}</h2>

<p>
    Congrats!! Your job has been posted successfully.
</p>

<p>
    <a href="{{ url('/jobs/'.$job->id)}}">View You Job Listing.</a>
</p>