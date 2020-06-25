@extends('layout')
<div class="container">
@section('container')

<form name="myForm" action="submit" method="GET">
@csrf
            <div class="well">
                <div class="card-header">Login</div>
                    <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="inputEmail" name="Email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" name="login-submit">Log In</button> 
                    <div class="form-group">
                        <div class="form-label-group">
                            <p class="form-row form-group">
                                New to Payal art gallery?
                                <a href="register">Register</a>
                            </p>
                        </div>
                    </div>       
             </div>
        </form>
        @endsection
</div>