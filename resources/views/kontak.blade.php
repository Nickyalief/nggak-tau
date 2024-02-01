@extends('halamanutama')

@section('container')
<style>
    .invalid-feedback{
        text-align: center;
        align-content: center;
        border-radius: 0.6em;
        background-color: #ffffff;
}

.output{
font-family: Arial, Helvetica, sans-serif;
}
.nama{
margin-right: 25px;
margin-left: 45px;
}
.no{
margin-right: 45px;
}
.pesan{
margin-right: 45px;
}
.email{
margin-right: 45px;
}
</style>
<a class="navbar-brand" href="#"><img src="/img/PRAKARSAicon.png" alt="" class="navbar-brand" width="40"><span
    class="text-warning">SCOUT</span>PRAKARSA</a>
<!-- Contact Section -->
<section class="py-5" id="contact">
    <div class="container-xxl py-5">
        <div class="col-12 mt-5 d-flex flex-column text-center justify-content-center">
            <h2 class="text-black bold">CONTACT IN HERE</h2>

        </div>
        <div class="row pt-4 ">
            <div class="col-12">
                <form action="/kontak" class="form" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control app-form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Enter Name*"
                                    value="{{old('name')}}">
                                    @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                <label for="floatingInput">Enter Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingEmail"
                                    placeholder="Enter Email*" value="{{old('email')}}">
                                    @error('email')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                <label for="floatingEmail">Enter Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" name="kontak" class="form-control @error('kontak') is-invalid @enderror" id="floatingPassword"
                                    placeholder="Enter Phone*" value="{{old('kontak')}}">
                                    @error('kontak')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                                <label for="floatingPassword">Enter Phone</label>
                            </div>
                        </div>

                        <div class="form-floating col-lg-6">
                            <textarea name="message" class="form-control  @error('message') is-invalid @enderror" placeholder="Leave a comment here" id="floatingMessage"
                                style="height: 206px;resize: none" value="{{old('message')}}"></textarea>
                                @error('message')
                                        <div class="invalid-feedback">{{$message}}</div>
                                    @enderror
                            <label for="floatingMessage" class="px-4">Enter Message</label>
                        </div>

                        <div class=" mt-4 d-flex justify-content-center">
                            <button class="btn buttonsmk btn-lg btn-outline-light">SEND MESSAGE</button>

                        </div>
                        <div class="container">
                            @if ( session("alif") )
                            <div class="alert alert-secondary mt-3">
                                <h3 class="shout text-center">Show Message</h3>
                                <table style="width:100%">
                                    <tr>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Number</th>
                                      <th>Message<th>
                                    </tr>
                                    <tr>
                                      <td>{{ session("alif.name")}} </td>
                                      <td>{{ session('alif.email')}}  </td>
                                      <td>{{ session('alif.kontak')}} </td>
                                      <td>{{ session('alif.message')}} </td>
                                    </tr>
                                  </table>
                            </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
