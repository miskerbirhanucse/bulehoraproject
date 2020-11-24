@extends('layouts.app')
@section('dashboard-content')
<h2>view material</h2>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">material information table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Item Number</th>
                        <th>Description</th>
                        <th>BId</th>
                        <th>User Name</th>
                        
                    </tr>
                </thead>

                <tbody>
                    @foreach($materials as $material)
                    <th>{{$material->id}}</th>
                    <th>{{$material->item_no}}</th>
                    <th>{{$material->BID}}</th>
                    <th>{{$material->brief_description_of_good_or_related_service}}</th>
                    <th>{{$material->user->name}}</th>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection