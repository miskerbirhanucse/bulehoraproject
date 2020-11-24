@extends('layouts.app')

@section('dashboard-content')







@if (session('status'))

{{ session('status') }}

@endif

{{ __('You are logged in!') }}





@endsection