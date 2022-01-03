@extends('products.layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



           <form action="{{route('product.update',['product'=>$product->id])}}"  method="POST">
               @csrf
               @method('PUT')
            Title: <input type="text" name="title" value="{{$product->title}}">

            Price: <input type="number" name="price" value="{{$product->price/100}}">
               <input type="submit" value="Save">
           </form>
@endsection
