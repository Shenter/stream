
@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
Cart contents
    </div>
<table  class="table table-hover ">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">In Cart</th>
        <th scope="col">+</th>


    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>

            <!-- Product image-->
            <td>
                <img class=" img-fluid" src="images/1.png" alt="..." height="5" />
            </td>
            <!-- Product details-->
            <td>{{$product->first()->title}}</td>
            <td>{{$product->count()}}</td>
            <td>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    +
                </button>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                    -
                </button>
            </td>


        </tr>
    @endforeach
    </tbody>
</table>
                <button value="Checkout">Checkout fake button</button>
            </div>

        </div>
    </section>

@endsection
