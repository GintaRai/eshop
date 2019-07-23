@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Category List</div>
                <div class="card-body">
                    @foreach ($categories as $category)
                        {{$category->title}}
                        <a style="font-family:Arial, Helvetica, sans-serif; text-decoration:none; color:crimson; font-size: 13px;" href="{{route('category.edit', [$category])}}">
                            [EDIT]
                        </a>
                        <form style="display: inline-block;"; action="{{route('category.destroy', [$category])}}" method="post">
                            <button style="font-family:Arial, Helvetica, sans-serif; border:none; background:transparent; color:crimson; font-size: 13px; cursor:pointer;" type="submit">[DELETE]</button>
                            @csrf
                        </form>
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection