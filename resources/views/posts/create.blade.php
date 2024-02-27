@extends('halamanutama')

@section('container')
    <section class="py-5">
        <div class="container py-5">
            <div class="col-12 mt-5 d-flex flex-column text-center justify-content-center">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger"> <!-- Changed to alert-danger for Bootstrap 5 -->
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Name</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    name="title" value="{{ old('title') }}" required>

                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="status" class="form-label">Publish Status</label>
                                <select name="status" class="form-select" required>
                                    <option value="1" selected>Present</option>
                                    <option value="0">Absen</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="content" class="form-label">Reason</label>
                                <textarea
                                    name="content" id="content"
                                    class="form-control @error('content') is-invalid @enderror"
                                    rows="5"
                                    required>{{ old('content') }}</textarea>

                                @error('content')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('post.index') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <!-- Scripts moved to a separate section -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#content').summernote({
                height: 250,
            });
        });
    </script>
@endsection
