{{$product->title}}<br>

@foreach ($product->productImages as $image)
    <img src="{{asset('img/'.$image->path)}}"> <br>
@endforeach