@extends('base')

<img src="/images/dash.png" alt="" class="bg">

@section('content')

<div class="container">
    
    <div class="row offset-md-2">

        <div class="col-md-4">
            <img src="/images/avatar.png" alt="" class="avatar">
            <h3 class="username">{{ Auth::user()->name }}</h3>
        </div>

        <div class="col-md-6" id="owneditems">
            <h1 class="owned">Owned Items</h1>
            <hr>
<br>
            <a class="btn btn-warning" href="{{ route('items.index') }}" id="viewitems">View Items</a>
        </div>

    </div>

</div>

@endsection