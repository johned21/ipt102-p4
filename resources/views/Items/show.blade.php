@extends('base')
<img src="/images/dash2.png" alt="" class="bg">
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-6 offset-md-3">
            <div class="create" id="createitems">

                <h1 class="itemtitle">View Items</h1>
                <hr/>

                <div class=" text-white rounded p-3" style="background-color:#0008;">
                    <h5 class="text-warning">Name</h5>
                    <p class="fw-bold">{{ $item->name }}</p>

                    <h5 class="text-warning">Price</h5>
                    <p class="fw-bold">$ {{ $item->price }}</p>

                    <h5 class="text-warning">Quantity</h5>
                    <p class="fw-bold">$ {{ $item->quantity }}</p>

                    <h5 class="text-warning">Description</h5>
                    <p class="fw-bold">{{ $item->description }}</p>
                </div>
                <br>
                <a class="btn btn-primary" href="{{ route('items.index') }}" id="back">Back</a>

            </div>
        </div>
    </div>
</div>

@endsection