@extends('layouts.master')
@section('css')

@section('title')
    Edit client
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0"> Edit client</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">client</li>
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
                <form action="{{ route('client.update','test') }}" method="POST">
                    @method('patch')
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$client->id}}">
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2">Name</label>
                            <input id="Name" type="text" name="name" value="{{$client->name}}" class="form-control" required>
                        </div>
                        <div class="col">
                            <label for="number" class="mr-sm-2">Number of phone</label>
                            <input id="number" type="number" name="number" value="{{$client->number_phone}}" class="form-control" required>
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="gender" class="mr-sm-2">Gender</label>
                            <select name="gender" id="gender" class="custom-select my-1 mr-sm-2" required>
                                <option value="{{ $client->gender->id }}">{{ $client->gender->name }}</option>
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}">
                                        {{ $gender->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="number-room" class="mr-sm-2">Numder of Room</label>
                            <select name="number_room" id="number-room" class="custom-select my-1 mr-sm-2" required>
                                <option value="{{ $client->room->id }}">{{ $client->room->numder_room }}</option>
                                @foreach ($rooms as $room)
                                    <option value="{{ $room->id }}">
                                        {{ $room->numder_room }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="addrees" class="mr-sm-2">Addrees</label>
                            <textarea name="addrees" id="addrees" class="form-control" cols="20" rows="3" required>
                                {{$client->address}}
                            </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="text-right">
                        <input type="submit" class="btn btn-success" value="submit" />
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
