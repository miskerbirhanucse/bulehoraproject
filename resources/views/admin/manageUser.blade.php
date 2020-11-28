@extends('layouts.app')
@section('dashboard-content')
@if(Session::get('deleted'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
    <strong>{{Session::get('deleted')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if(Session::get('delete-faild'))
<div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
    <strong>{{Session::get('delete-failed')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User DataTable</h6>
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
                        <a href="{{URL::to('/admin/aprove/')}}/{{$user->id}}" class="btn btn-success btn-sm">{{$user->approved==true?'Reject':'Approve'}} </a>|
                        
                        <a href="{{URL::to('delete-admin')}}/{{$user->id}}" class="btn btn-danger btn-sm"> Delete</a>
                    </th>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@stop