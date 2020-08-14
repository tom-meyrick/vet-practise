<form class="form" method="POST">
@csrf
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name" placeholder="First Name" name="first_name" value="{{ old('first_name') ?? ($owner->first_name ?? '')}}" required>

      @error('first_name')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    <div class="form-group col-md-6">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="last_name" placeholder="Last Name" name="last_name" value="{{ old('last_name') ?? ($owner->last_name ?? '')}}"  required>

      @error('last_name')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    </div>

      <div class="form-row">
    <div class="form-group col-md-12">
    <label for="telephone">Telephone</label>
    <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="telephone" placeholder="Telephone" name="telephone" value="{{ old('telephone') ?? ($owner->telephone ?? '')}}"  required>

       @error('telephone')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{ old('email') ?? ($owner->email ?? '')}}" required>

      @error('email')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_1">Address 1</label>
    <input type="text" class="form-control @error('address_1') is-invalid @enderror" id="address_1" placeholder="House Number" name="address_1" value="{{ old('address_1') ?? ($owner->address_1 ?? '')}}" required>

    @error('address_1')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_2">Address 2</label>
    <input type="text" class="form-control @error('address_2') is-invalid @enderror" id="address_2" placeholder="Street" name="address_2" value="{{ old('address_2') ?? ($owner->address_2 ?? '')}}" required>

       @error('address_2')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="town">Town</label>
      <input type="text" class="form-control @error('town') is-invalid @enderror" id="town" placeholder="Town" name="town" value="{{ old('town') ?? ($owner->town ?? '')}}" required>

      @error('town')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    <div class="form-group col-md-6">
      <label for="postcode">Postcode</label>
      <input type="text" class="form-control @error('postcode') is-invalid @enderror" id="postcode" placeholder="Postcode" name="postcode" value="{{ old('postcode') ?? ($owner->postcode ?? '')}}" required>

      @error('postcode')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    </div>

  <button type="submit" class="btn btn-primary">Submit details</button>
</form>