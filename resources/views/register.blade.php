@extends('layout')
@section('title', 'Register')
@section('content')

    <section class="vh-100"
        style="background-color: #0093E9; background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Create an Account</h3>
                            <div class="mt-5">
                                @if ($errors->any())
                                    <div class="col-12">
                                        @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <form action="{{ route('register.post') }}" method="POST">
                                @csrf
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control form-control-lg" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                </div>

                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                                    type="submit">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
