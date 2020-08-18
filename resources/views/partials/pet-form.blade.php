<form class="form" method="POST">
@csrf
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="first_name">Pet name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Pet Name" name="name" value="{{ old('name') ?? ($animal->name ?? '')}}" required>

      @error('name')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    <div class="form-group col-md-6">
      <label for="last_name">Type</label>
      <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Type of animal" name="type" value="{{ old('type') ?? ($animal->type ?? '')}}"  required>

      @error('type')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

    </div>
    </div>

      <div class="form-row">
    <div class="form-group col-md-12">
    <label for="telephone">Date of birth</label>
    <input type="text" class="form-control @error('dob') is-invalid @enderror" id="dob" placeholder="DD-MM-YYYY" name="dob" value="{{ old('dob') ?? ($animal->dob ?? '')}}"  required>

       @error('dob')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <label for="email">Weight</label>
    <input type="number" class="form-control @error('weight') is-invalid @enderror" id="weight" placeholder="Weight (in kg)" name="weight" value="{{ old('weight') ?? ($animal->weight ?? '')}}" required>

      @error('weight')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_1">Height</label>
    <input type="number" class="form-control @error('height') is-invalid @enderror" id="height" placeholder="Height (in metres)" name="height" value="{{ old('height') ?? ($animal->height ?? '')}}" required>

    @error('height')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_2">Biteyness</label>
    <input type="number" class="form-control @error('biteyness') is-invalid @enderror" id="biteyness" placeholder="Biteyness (from 1-5)" name="biteyness" value="{{ old('biteyness') ?? ($animal->biteyness ?? '')}}" required>

       @error('biteyness')
      <p class="invalid-feedback">
      {{ $message }} </p>
      @enderror

  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit details</button>
</form>