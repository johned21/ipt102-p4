@extends('base')
<img src="/images/dash2.png" alt="" class="bg">
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
        
            <div class="create" id="createitems">

                <h1 class="itemtitle">Update Items</h1>
                <br>
                <hr/>
                <form action="{{ route('items.update', $item->id) }}" method="post">
                    @csrf
                    @method('put')
                    <input style="background-color: #0008;" type="text" name="name" class="form-control mb-3 text-white" placeholder="Item Name" value="{{ $item->name }}"/>
                    
                    <input style="background-color: #0008;" type="number" name="price" class="form-control mb-3 text-white" placeholder="Price $$" value="{{ $item->price }}"/>

                    <input style="background-color: #0008;" type="number" name="quantity" class="form-control mb-3 text-white" placeholder="Quantity" value="{{ $item->quantity }}"/>
                    
                    <textarea style="background-color: #0008;" class="form-control mb-3 text-white" name="description" rows="4" placeholder="Description">{{ $item->description }}</textarea>
                    
                    <a class="btn btn-primary" href="{{ route('items.index') }}" id="back">Back</a>
                    <button class="btn btn-success float-end px-5" type="submit">Update</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection