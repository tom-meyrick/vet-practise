@if(count($owners) >= 1)

@foreach ($owners as $owner)
<ul class="list-group">
  <a href="/owners/{{ $owner->id }}"><li class="list-group-item">{{ $owner->fullName() }}</li></a>
</ul>
@endforeach

@else 
No owners found
@endif