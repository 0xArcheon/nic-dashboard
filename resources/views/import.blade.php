@extends('layout')
@section('title', 'Import')
@section('content')
    <section class="vh-100"
        style="background-color: #0093E9; background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-4">Upload your file</h3>
                            <h5 class="mb-4">(Only .xlsx file supported)</h5>
                            @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif
                            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="import_file" class="form-control mb-4" required>
                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block"
                                    type="submit">Import</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
