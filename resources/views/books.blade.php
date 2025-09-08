<x-layout title="Книги">
    <x-navbar />
    <x-search search="Любимую книгу" />
    <div class="container">
        @if($books->isNotEmpty())
            <div class="row g-3 mb-3 mt-5">
                    @foreach($books as $book)
                        <div class="col-6 col-md-6 col-lg-2">
                            <div class="book-block bg-light p-3 rounded hover position-relative">
                                <div class="d-flex flex-column pt-3 align-items-center">
                                    <img src="{{$book->cover_image}}" class="book-image">
                                    <p class="text-start py-4"> {{$book->title}}</p>
                                </div>
                                <a href="/book/{{$book->id}}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
            </div>
        @else
         <div class="row g-3 mb-3 mt-5">
                <h1>Извините, но книги отсутствуют!</h1>
         </div>
    </div>

    @endif
</x-layout>
