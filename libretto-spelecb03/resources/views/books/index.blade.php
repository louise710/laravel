@extends('layouts.app')

@section('content')
    <h1>Books</h1>

    @foreach ($books as $book)
        <div>
            <h2><a href="{{ route('books.show', $book) }}">{{ $book->title }}</a></h2>
            <p>Author: {{ $book->author->name }}</p>
            <p>Genres:
                @foreach ($book->genres as $genre)
                    {{ $genre->name }}@if (!$loop->last), @endif
                @endforeach
            </p>
        </div>
    @endforeach

    {{ $books->links() }}
@endsection
