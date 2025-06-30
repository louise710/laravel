@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>

    <p><strong>Author:</strong> {{ $book->author->name }}</p>

    <p><strong>Genres:</strong>
        @foreach ($book->genres as $genre)
            {{ $genre->name }}@if (!$loop->last), @endif
        @endforeach
    </p>

    <h3>Reviews</h3>
    @foreach ($book->reviews as $review)
        <div>
            <p>{{ $review->content }}</p>
            <small>Rating: {{ $review->rating }}/5</small>
        </div>
    @endforeach
@endsection
