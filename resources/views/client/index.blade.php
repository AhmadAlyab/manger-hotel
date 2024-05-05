@extends('layouts.master')
@section('css')

@section('title')
    list client
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> clients</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">list client</li>
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
                <div class="card-body">
                    <a href="{{route('client.create')}}" class="btn btn-success btn-sm"
                        role="button" aria-pressed="true">add client</a><br><br>
                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                            data-page-length="50" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>number of room</th>
                                    <th>name</th>
                                    <th>address</th>
                                    <th>number phone</th>
                                    <th>gender</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{ $i = 1 }}
                                @foreach ($clients as $client)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $client->room->numder_room }}</td>
                                        <td>{{ $client->name}}</td>
                                        <td>{{ $client->address }}</td>
                                        <td>{{ $client->number_phone }}</td>
                                        <td>{{ $client->gender->name }}</td>
                                        <td>
                                            <a href="{{ route('client.edit',$client->id) }}"
                                                class="btn btn-info btn-sm" role="button"
                                                aria-pressed="true" title="edit room"><i class="fa fa-edit"></i></a>
                                            <a href="#" data-target="#deleteclient{{$client->id}}" data-toggle="modal"
                                                class="btn btn-danger btn-sm" role="button"
                                                aria-pressed="true" title="delete room"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @include('client.delete')
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
