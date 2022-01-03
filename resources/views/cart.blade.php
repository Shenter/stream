
@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
Cart contents
    </div>
<table>
    @foreach($products as $product)
        <tr>

            <!-- Product image-->
            <td>
                <img class="card-img-top" src="images/1.png" alt="..." height="10" width="auto"/>
            </td>
            <!-- Product details-->
            <td>{{$product->first()->title}}</td>
            <td>{{$product->count()}}$</td>

        </tr>
    @endforeach
</table>

            </div>
        </div>
    </section>

@endsection
