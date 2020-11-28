@extends('layouts.app')
@section('dashboard-content')
<h6>User Profile</h6>
<form action="/updateprofile/{{auth()->user()->id}}" method="post">
    @csrf
    <div class="form-group row">
        <label for="inputUser3" class="col-sm-2 col-form-label text-md-right">User Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputUser3" name="name" placeholder="Email" value="{{$user->name}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label text-md-right">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="mail" placeholder="Email" value="{{$user->email}}">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-sm-10">
            <input id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password-confirm" class="col-sm-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

        <div class="col-sm-10">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail4" class="col-sm-2 col-form-label text-md-right">Phone Number</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name="phone" id="inputEmail4" placeholder="Phone number" value="{{$user->phone_number}}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>
@stop