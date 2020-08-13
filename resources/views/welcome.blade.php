@extends("app")

@section("title"){{
    "Home"
}}@endsection

@section("content")
@include("partials/title")
<p>{{ $message }}</p>
@endsection
