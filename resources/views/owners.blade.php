@extends("app")

@section("title")
Customer page
@endsection 

@section("content")
<h4>Our Happy Customers:</h4>

@if(count($owners) >= 1)

@foreach ($owners as $owner)
<ul class="list-group">
<li class="list-group-item"><p>{{ $owner->fullName() }}</p></li>
</ul>
@endforeach

@else 
No owners found
@endif

@endsection