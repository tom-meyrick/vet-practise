@extends("app")

@section("title")
Customer page
@endsection 

@section("content")
<h4>Our Happy Customers:</h4>
@include("partials/loop")
@endsection