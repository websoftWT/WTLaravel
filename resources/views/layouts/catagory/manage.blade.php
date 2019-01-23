@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Catagories</div>
                <div class="card-body">
                    @if(count($catagories)>0)
                        <table class="table">
                            <tr>
                                <th>ID</th>
                                <th>Titles</th>
                                <th>Details</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                            @foreach($catagories as $i=>$catagory)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $catagory->title }}</td>
                                    <td>{{ $catagory->details }}</td>
                                    <td>{{ $catagory->created_at }}</td>
                                    <td>{{ $catagory->updated_at }}</td>
                                    <td><a href="{{route('catagory.edit')}}"><span id="{{ $catagory->id }}" class="btn btn-warning">Edit</span></a></td>
                                    <td><a href="{{route('catagory.remove')}}"><span id="{{ $catagory->id }}" class="btn btn-danger">Remove</span></a></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection