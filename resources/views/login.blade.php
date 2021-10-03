@extends('base')
<img src="/images/bg.png" alt="" class="bg">
@section('content')
<br><br><br>
<div class="container"  id="login">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h3 class="card-title text-white" style="text-align:center;" id="logintitle">Account Login</h3>
            <br><br>
            <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}

                <div class="mb-3 text-white" id="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" name="email" id="email" class="form-control text-white input-field" placeholder="Email" style="background-color: #0008;">
                </div>

                <div class="mb-3 text-white" id="input-container">
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="password" id="password" class="form-control text-white input-field" placeholder="Password" style="background-color: #0008;">
                </div>
<br>
                <button class="btn btn-primary form-control" type="submit">
                    Login
                </button>
            </form>

            <p style="color:white;">Don't have an account yet? <a href="/register">Register</a></p>
        </div>
    </div>
</div>

@stop