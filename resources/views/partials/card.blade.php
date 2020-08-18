<div class="card">
<h2 class="card-header">
{{ $owner->fullName() }}
</h2> 
<article class="card-body">
<p>Phone: {{ $owner->telephone }}</p>
<p>Email: {{ $owner->email }}</p>
<p>Address: {{ $owner->fullAddress() }}</p>
<a href="/owners/edit/{{ $owner->id }}" class="btn btn-link">Edit owner details</a>
</article>
@if($owner->animals->isNotEmpty())
<h2 class="card-header">Pets</h2>
<article class="card-body">
@foreach($owner->animals as $animal)
<p>Name: {{ $animal->name }}</p>
<p>Type: {{ $animal->type }}</p>
<p>Dangerous: {{ $animal->dangerous() ? "Yes, very" : "Not really" }}</p>
<hr>
@endforeach
@endif
<a href="/owners/addpet/{{ $owner->id }}" class="btn btn-link">Add a new pet</a>
</article>
