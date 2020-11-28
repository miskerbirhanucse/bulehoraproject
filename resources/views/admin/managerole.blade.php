@extends('layouts.app')
@section('dashboard-content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Manage Role DataTable</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Approved</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <th>{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>
                    <th>{{$user->approved == true ? 'Yes':'No'}}</th>
                    <th>{{$user->role->name}}</th>

                    <th>
                        <a href="/changerole/{{$user->id}}" class="btn btn-primary btn-sm"> Change Role</a>
                    </th>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
<!-- modal -->
<!-- <div class="container">
    @if(session('success'))
    <h1>{{session('success')}}</h1>
    @endif
    <form method="POST" action="/changeRole">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-8">
                <select class="form-control" id="selectUser" name="user_selected" required focus>
                    <option value="" disabled selected>Please select user role</option>
                    @foreach($users as $user)
                    <option value="Admin">Admin</option>
                    <option value="Admin">Dean</option>
                    <option value="Admin">Head</option>
                    <option value="Admin">Lab_assistance</option>
                    @endforeach
                </select>
            </div>
            <label class="col-sm-4 col-form-label" id="displayUser">Show selected User Role
                here</label>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form> -->

@stop