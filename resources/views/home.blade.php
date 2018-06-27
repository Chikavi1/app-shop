@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Productos</h1>
                    @foreach($products as $product)
                    <div style="color: blue;">
                        <p > 
                            {{$product->id}}.-{{$product->name}}
                        </p>
                    </div>
                        <p style="font-weight: bold;">
                            {{$product->description}}
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
