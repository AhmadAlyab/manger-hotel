@extends('layouts.master')
@section('css')

@section('title')
    rooms
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Hotel</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">room</a></li>
                <li class="breadcrumb-item active">list room</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                        style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>number of room</th>
                                <th>dageer</th>
                                <th>price</th>
                                <th>description</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{ $i = 1 }}
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $room->numder_room }}</td>
                                    <td>{{ $room->degeer->number }}</td>
                                    <td>{{ $room->degeer->price }}</td>
                                    <td>{{ $room->note }}</td>            
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
