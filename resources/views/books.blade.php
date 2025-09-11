<x-layout title="Книги">
    <x-navbar />
    <x-search search="Любимую книгу" />
    <div class="container">

        @if($books)
                <div class="row mt-5 bg-light rounded p-4">
                    <div class="col-12">
                        <div class="button-group d-flex justify-content-start align-items-center">
                            <!-- Create -->
                            <div class="col-9 button-group d-flex justify-content-start align-items-center">
                                <button class="btn btn-info m-2 p-1 pb-1" data-bs-toggle="modal" data-bs-target="#createBook">
                                    <img class="icon-btn" src="{{asset("img/icons/add.png")}}" alt="Create">
                                </button>

                                <x-popup-create
                                    id="createBook"
                                    title="Создание книги"
                                />

                            </div>
                        </div>
                    </div>
                </div>
        @endif

        <!-- Content -->
        @if($books->isEmpty())
            <div class="row g-3 mb-3 mt-5">
                <h1>Извините, но книги отсутствуют!</h1>
            </div>
        @else
            <div class="row g-3 mb-3 mt-5">
                @foreach($books as $book)
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="book-block bg-light p-3 rounded hover position-relative">
                            <div class="d-flex flex-column pt-3 align-items-center">
                                <img src="{{ $book->cover_image }}" class="book-image">
                                <p class="text-start py-4">{{ $book->title }}</p>
                            </div>
                            <a href="/book/{{ $book->id }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif


        <!-- Pagination -->
        <div class="row mt-5 bg-light rounded p-0 p-md-4">
            <div class="d-flex p-2 align-items-center justify-content-center">
                <x-pagination :paginator="$books" url="books"></x-pagination>
            </div>
        </div>
</x-layout>
