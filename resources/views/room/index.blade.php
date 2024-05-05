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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <a href="#" data-target="#createroom" data-toggle="modal" class="btn btn-success btn-sm"
                    role="button" aria-pressed="true">add room</a><br><br>
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
                                    <td>
                                        <a href="#" data-target="#editroom{{$room->id}}" 
                                            class="btn btn-info btn-sm" data-toggle="modal" role="button"
                                            aria-pressed="true" title="edit room"><i class="fa fa-edit"></i></a>
                                        <a href="#" data-target="#deleteroom{{$room->id}}"
                                            class="btn btn-danger btn-sm" data-toggle="modal" role="button"
                                            aria-pressed="true" title="delete room"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @include('room.edit')
                            @include('room.delete')
                            @endforeach

                    </table>
                </div>
                @include('room.add')
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
