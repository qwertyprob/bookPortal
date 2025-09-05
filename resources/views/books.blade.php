<x-layout title="Книги">
    <x-navbar />
    <x-search search="Любимую книгу" />
    <div class="container">
        <div class="row my-4">
            <div class="col-12">
                <h1 class="text-center display-1">Наши книги:</h1>
            </div>
            @foreach ($books as $book)
                <div style="margin-bottom: 20px;">
                    <h2>{{ $book->title }}</h2>
                    <p>{{ $book->description }}</p>
                    <img class="img-fluid w-25" src="{{ $book->cover_image }}" alt="{{ $book->title }}">


                    <p><strong>Авторы:</strong>
                        @foreach ($book->authors as $author)
                            {{ $author->name }}@if(!$loop->last), @endif
                        @endforeach
                    </p>

                    <p><strong>Жанры:</strong>
                        @foreach ($book->genres as $genre)
                            {{ $genre->name }}@if(!$loop->last), @endif
                        @endforeach
                    </p>
                </div>
            @endforeach

        </div>
    </div>
</x-layout>
