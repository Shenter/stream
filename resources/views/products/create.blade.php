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



           <form action="{{route('product.store')}}"  method="POST">
               @csrf

            Title: <input type="text" name="title" placeholder="Enter title...">

            Price: <input type="number" name="price" placeholder="Enter price...">
               <input type="submit" value="Save">
           </form>
@endsection
