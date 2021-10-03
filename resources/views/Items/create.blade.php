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
                <h1 class="itemtitle">Add New Item</h1>
    <hr/>
                <form action="{{ route('items.store') }}" method="post">
                    @csrf
                    <input style="background-color: #0008;" type="text" name="name" class="form-control mb-3 text-white" placeholder="Item Name"/>
                    
                    <input style="background-color: #0008;" type="number" name="price" class="form-control mb-3 text-white" placeholder="Price $$"/>

                    <input style="background-color: #0008;" type="number" name="quantity" class="form-control mb-3 text-white" placeholder="Quantity"/>
                    
                    <textarea style="background-color: #0008;" class="form-control mb-3 text-white" name="description" rows="4" placeholder="Description"></textarea>
                    
                    <a class="btn btn-primary" href="{{ route('items.index') }}" id="back">Back</a>
                    <button class="btn btn-success float-end px-4" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection