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
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" value="{{ old('title', $post->title) }}" required>

                            @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Publish Status</label>
                            <select name="status" class="form-select" required>
                                <option value="1" {{ $post->status == 1 ? 'selected' : '' }}>Present</option>
                                <option value="0" {{ $post->status == 0 ? 'selected' : '' }}>Absen</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Reason</label>
                            <textarea name="content" id="content"
                                class="form-control @error('content') is-invalid @enderror" rows="5"
                                required>{{ old('content', $post->content) }}</textarea>

                            @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Update</button>
                        <a href="{{ route('post.index') }}" class="btn btn-md btn-secondary">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Scripts section -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- include summernote js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#content').summernote({
            height: 250, //set editable area's height
        });
    })
</script>
@endsection
