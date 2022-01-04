@extends('products.layout')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="items-center justify-center align-content-center align-items-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="items-center justify-center align-content-center align-items-center">
                {{__('content.Edit_item')}}
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">




           <form action="{{route('product.update',['product'=>$product->id])}}"  method="POST">
               @csrf
               @method('PUT')
               {{__('content.Title')}}: <input type="text" name="title" value="{{$product->title}}">

               {{__('content.Price')}}: <input type="number" name="price" value="{{$product->price/100}}">
               <input type="submit" value="{{__('content.Save')}}">
           </form>
            </div>
        </div>
    </section>
@endsection
