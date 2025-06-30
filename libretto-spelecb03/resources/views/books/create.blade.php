@extends('layouts.app')

@section('content')
    <h1>Add New Book</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Title</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
            @error('title') <div>{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Author</label>
            <select name="author_id" required>
                @foreach(\App\Models\Author::all() as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
            @error('author_id') <div>{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Genres</label>
            <select name="genres[]" multiple>
                @foreach(\App\Models\Genre::all() as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
            @error('genres') <div>{{ $message }}</div> @enderror
        </div>

        <button type="submit">Add Book</button>
    </form>
@endsection
