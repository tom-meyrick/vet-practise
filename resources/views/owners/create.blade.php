@extends("app");

@section("title")
Create
@endsection 

@section("content")
<form class="form" method="POST">
@csrf
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required>
    </div>
    </div>

      <div class="form-row">
    <div class="form-group col-md-12">
    <label for="telephone">Telephone</label>
    <input type="text" class="form-control" id="telephone" placeholder="Telephone" name="telephone" required>
  </div>
  </div>

    <div class="form-row">
    <div class="form-group col-md-12">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_1">Address 1</label>
    <input type="text" class="form-control" id="address_1" placeholder="House Number" name="address_1" required>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-12">
    <label for="address_2">Address 2</label>
    <input type="text" class="form-control" id="address_2" placeholder="Street" name="address_2" required>
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="town">Town</label>
      <input type="text" class="form-control" id="town" name="town" required>
    </div>
    <div class="form-group col-md-6">
      <label for="postcode">Postcode</label>
      <input type="text" class="form-control" id="postcode" name="postcode" required>
    </div>
    </div>

  <button type="submit" class="btn btn-primary">Submit details</button>
</form>
@endsection