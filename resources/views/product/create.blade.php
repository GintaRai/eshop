@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Product</div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        Product:<input type="text" name="title" value="{{old('title')}}"><br>
                        Descripion: <textarea name="description" cols="30" rows="10">{{old('description')}}</textarea><br>
                        Price:<input type="text" name="price" value="{{old('price')}}"><br>
                        Discount:<input type="text" name="discount" value="{{old('discount')}}"><br>
                        Category: <select name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select><br>
                        
                        <div class="image-inputs">
                            <input class="file-input" type="file" name="image[]">
                        </div>

                        <button type="button" id="add-more">
                            ADD MORE IMAGES
                        </button>
                        <br><br>
                        Stock:<input type="text" name="stock" value="{{old('stock')}}"><br>
                        <br>
                        <button type="submit">ADD</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection