@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Category</div>
                <div class="card-body">
                    <form action="{{route('category.update', [$category])}}" method="post">
                        Category Name:<input type="text" name="title" value="{{old('title', $category->title)}}"><br>
                        Category Descripion: <textarea name="description" cols="30" rows="10">{{old('description', $category->description)}}</textarea><br>
                        <br>
                        <button type="submit">EDIT</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
