@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>ID order</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$order->id}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="container">
        <h3>order detail</h3>
        <div class="row justify-content-center">
            <table>
                <thead>
                <tr>
                    <th>ID product</th>
                    <th>name</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>desc</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <th>{{$product->id}}</th>
                        <th>{{$product->product_name}}</th>
                        <th>{{$product->price}}</th>
                        <th>{{$product->quantity}}</th>
                        <th>{{$product->desc}}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
