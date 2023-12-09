@extends('layout.main')
@section('content')
<div class="container">
<div class="px-4 py-5 my-5 text-center">
<h1 class="display-5 fw-bold text-body-emphasis">Project Video</h1>
    <div class="embed-responsive embed-responsive-16by9">
     <iframe id="ytplayer" class="embed-responsive-item" type="text/html" width="720" height="405" src="https://www.youtube.com/embed/si_gd9zarLc?si=1GLP6MDfdLNoH3L2" frameborder="0" allowfullscreen>
    </div>
     </div>
</div>
@endsection