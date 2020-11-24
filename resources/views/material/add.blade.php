@extends('layouts.app')
@section('dashboard-content')
<h2>Add Material</h2>
<form action="/add_material" method="post">
  @csrf
  <div class="form-group row">
    <label for="inputItem3" class="col-sm-4 col-form-label">Item Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="item" id="inputItem3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputBrief3" class="col-sm-4 col-form-label">Brief Description of Goods or Related Services</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" id="inputBrief3" name="description">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputBId" class="col-sm-4 col-form-label">BID</label>
    <div class="col-sm-10">
      <input type="Text" class="form-control" name="bid" id="inputBId">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
@endsection