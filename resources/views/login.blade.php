@extends('halamanutama')

@section('container')
<style>
    body{
        margin-top: 220px;
    	background-image: url("/img/muslan1 (1).jpeg");
        background-size: cover;
	background-attachment: fixed;
	background-position: center;
	height: 100%;


    }
form{
    border-radius: 20px;
    /* padding-top: 500px; */
    margin-top: 150px !important;
    width: 24% !important;
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    background-color: white !important;
    padding: 50px;
}

.btn-primary{
    width: 100%;
    border: none;
    border-radius: 50px;
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(75,14,154,1) 35%, rgba(0,212,255,1) 100%);

}

.form-control{
    color: rgba(0,0,0,.87);
    border-bottom-color: rgba(0,0,0,.42);
    box-shadow: none !important;
    border: none;
    border-bottom: 1px solid;
    border-radius: 4px 4px 0 0;
    }
 h4{
    font-size: 2rem !important;
    font-weight: 700;
 }
 .form-label{
    font-weight: 800 !important;
 }
@media only screen and (max-width: 600px) {
    form {
        width: 100% !important;
    }
  }

</style>
<div class="container-fluid">
    <form action="{{ route('doLogin') }}" method="post" class="mx-auto mt-5 ">
        @csrf
        <h4 class="text-center">Login</h4>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
            <div class="form-text mt-3"><a href="#">Forget password?</a></div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>

@endsection
