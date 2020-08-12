@extends("app")

@section("title"){{
    "Home"
}}@endsection

@section("content")
<h4>Our Happy Customers:</h4>
@foreach (App\Owner::all() as $owner)
<ul class="list-group">
<li class="list-group-item"><p>{{ $owner->fullName() }}</p></li>
</ul>
@endforeach
@endsection
