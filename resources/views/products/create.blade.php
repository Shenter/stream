@extends('products.layout')

@section('content')
    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <div
                class="items-center justify-center align-content-center align-items-center"> {{__('content.Create_new_item')}}</div>

            @if ($errors->any())
                <div class="items-center justify-center align-content-center align-items-center">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                <form action="{{route('product.store')}}" method="POST">
                    @csrf

                    {{__('content.Title')}} <input type="text" name="title" placeholder="Enter title...">

                    {{__('content.Price')}}: <input type="number" name="price" placeholder="Enter price...">
                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
    </section>
@endsection
