@extends('products.layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
            <table>
            @foreach($products as $product)
                    <tr>

                        <!-- Product image-->
                        <td>
                        <img class="card-img-top" src="images/1.png" alt="..." height="10" width="auto"/>
                        </td>
                        <!-- Product details-->
                        <td>{{$product->title}}</td>
                        <td>{{$product->priceInDollars}}$</td>
                        <td><a href="{{route('product.edit',['product'=>$product->id])}}">Edit</a></td>
                        <td>
                        <form action="{{ url('product' , $product->id ) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button>Delete</button>
                        </form>
                        </td>


                    </tr>
            @endforeach
            </table>
        <a href="{{route('product.create')}}"> +Add new</a>
@endsection
