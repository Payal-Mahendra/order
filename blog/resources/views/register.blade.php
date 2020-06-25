@extends('layout')

<div class="container">
@section('container')

        <form name="myForm" method="POST" action="submit">
        @csrf
            <div class="well">
                <div class="card-header">Register</div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="firstName" name="First_name" class="form-control" placeholder="First name"autofocus="autofocus"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="lastName" name="Last_name" class="form-control" placeholder="Last name"/>
                                </div>
                            </div>
                        </div>
                     </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="number" id="inputage" name="Age" class="form-control" placeholder="Age"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <select type="text" id="inputGender" name="Gender" class="form-control" placeholder="Gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                          <input type="text" id="inputEmail" name="Email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name="P/assword" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="signups-submit">Save</button>         
             </div>
        </form>
        @endsection
</div>
