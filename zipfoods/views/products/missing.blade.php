@extends('templates/master')

@section('title')
    Product Not Found
@endsection

@section('content')
    <h2>Product Not Found</h2>
    {{-- Non Rendered Comment --}}
    <p>Sorry, we were not able to find the product you were looking for.</p>

    <p><a href='/'>Return to home</a> or <a href='/products'>check out our other products.</a></p>
@endsection
