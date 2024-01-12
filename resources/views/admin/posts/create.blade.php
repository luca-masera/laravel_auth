@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Create Posts</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    required maxlength="200" value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body">Body</label>
                <textarea type="text" class="form-control @error('body') is-invalid @enderror" name="body" id="body" required
                    cols="30" row="5" value="{{ old('body') }}">
                </textarea>

                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image">Image</label>
                <input type="url" class="form-control @error('image') is-invalid @enderror" name="image"
                    id="image" value="{{ old('title') }}">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Invia</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
