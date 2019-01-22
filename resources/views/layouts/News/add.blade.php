@extends('layouts.app')
@section('content')
    <div class="container">
        @if($errors->all())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success alert-dismissable custom-success-box" style="margin:15px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong> {{ session('message') }} </strong>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add Catagory</div>
                    <div class="card-body">
                        <form action="{{route('news.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="content">Short Details</label>
                                    <textarea name="short-details" id="short-details" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">News Quotes</label>
                                    <textarea name="news-quotes" id="news-quotes" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="content">News Details</label>
                                    <textarea name="news-details" id="news-details" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="title">Tag</label>
                                    <input type="text" name="tag" id="tag" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="content">Page Description</label>
                                    <textarea name="page-description" id="page-description" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Add News</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection