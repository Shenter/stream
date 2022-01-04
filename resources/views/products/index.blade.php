@extends('products.layout')

@section('content')
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="items-center justify-center align-content-center align-items-center">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                <table class="table table-hover">
                    @foreach($products as $product)
                        <tr>

                            <!-- Product image-->
                            <td>
                                <img class=" img-fluid" src="images/1.png" alt="..."/>
                            </td>
                            <!-- Product details-->
                            <td>{{$product->title}}</td>
                            <td>{{$product->priceInDollars}}$</td>
                            <td><a href="{{route('product.edit',['product'=>$product->id])}}">{{__('content.Edit')}}</a>
                            </td>
                            <td>
                                <form action="{{ url('product' , $product->id ) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button>{{__('content.Delete')}}</button>
                                </form>
                            </td>


                        </tr>
                    @endforeach
                </table>

                <a href="{{route('product.create')}}"> +{{__('content.Add_new')}}</a>
            </div>
        </div>
    </section>
@endsection
