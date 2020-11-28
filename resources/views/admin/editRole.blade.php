@extends('layouts.app')

@section('dashboard-content')
<form class="form-inline" action="/storerole/{{$userId}}" method="post">
  @csrf
  <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Select Role for the User</label>
  <select class="custom-select my-1 mr-sm-2" name="role" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="admin">Admin</option>
    <option value="dean ">Dean</option>
    <option value="head">Head</option>
    <option value="lab_assistacne">Lab_assistance</option>
  </select>
  <button type="submit" class="btn btn-primary my-1">Submit</button>
</form>
@stop