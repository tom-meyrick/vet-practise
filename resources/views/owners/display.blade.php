@extends("app");

@section("title")
Our owners
@endsection 

@section("content") 
<div class="card">
<h2 class="card-header">
{{ $owner->fullName() }}
</h2> 
<article class="card-body">
<h5>Phone: </h5>{{ $owner->telephone }} 
<h5>Address: </h5>{{ $owner->fullAddress() }} 

</article>
</div> 
@endsection

