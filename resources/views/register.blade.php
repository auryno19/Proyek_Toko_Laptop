@extends('layout.login')
@section('content')

<div class="login-dark" style="height: 695px;">
    <form action="/register" method="post">
        @csrf
        <h2 class="sr-only">Register Form</h2>
        <div class="illustration"><i class="icon ion-ios-filing-outline"></i></div>
        
        <div class="form-group">
          <input type="text" id="name" class="form-control  
                        " name="name" placeholder="Name"/>
   
        </div>
        <div class="form-group">
            <input type="phone" id="phone" class="form-control                         
                        " name="phone"  placeholder="Phone Number"/>
                    
        </div>
        <div class="form-group">
            <input type="email" id="email" class="form-control                         
                        " name="email"  placeholder="Email"/>
                    
        </div>
        <div class="form-group">
            <input type="password" id="password" class="form-control                         
                        " name="password"  placeholder="Password" />
                    
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">Register</button>
        </div>
        <a class="forgot" href="/login">Have any account?</a></form>
</div>
    
@endsection