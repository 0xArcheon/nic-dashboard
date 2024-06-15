@extends('layout')
@section('title','Register')
@section('content')
    {{-- <div class='container pt-5 pb-5 border border-dark mt-5 rounded' style="background-color: #BFF6C3;">
    <form style="width: 500px" class="ms-auto me-auto mt-5" >
   <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control"  name="name">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
    </div> --}}

    <section class="vh-100" style="background-color: #0093E9; background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
    
                <h3 class="mb-5">Create an Account</h3>
                <form action="{{route('register.post')}}" method="POST">
                  @csrf
                  <div data-mdb-input-init class="form-outline mb-4"> 
                    <label class="form-label" >Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4"> 
                    <label class="form-label" >Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" />
                  </div>
    
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" >Password</label>
                    <input type="password" name="password" class="form-control form-control-lg" />
                  </div>
    
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection 