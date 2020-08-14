<div class="card">
<h2 class="card-header">
{{ $owner->fullName() }}
</h2> 
<article class="card-body">
<p>Phone: {{ $owner->telephone }}</p>
<p>Email: {{ $owner->email }}</p>
<p>Address: {{ $owner->fullAddress() }}</p>
</article>
  <a href="/owners/edit/{{ $owner->id }}" class="btn btn-link">Edit details</a>