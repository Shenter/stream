@extends('layouts.main')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    {{__('content.Cart_contents')}}
                </div>
                <table class="table table-hover ">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">{{__('content.Name')}}</th>
                        <th scope="col">{{__('content.In_cart')}}</th>
                        <th scope="col">+/-</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>

                            <!-- Product image-->
                            <td>
                                <img class=" img-fluid" src="images/1.png" alt="..." height="5"/>
                            </td>
                            <!-- Product details-->
                            <td>{{$product->first()->title}}</td>

                            <td>@livewire('product-count',['product_id'=>$product->first()->id])</td>
                            <td>
                                @livewire('add-product-button',['product_id'=>$product->first()->id])
                                @livewire('remove-product-button',['product_id'=>$product->first()->id])

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
