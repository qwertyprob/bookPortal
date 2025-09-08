<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />

    <div class="container">
        <div class="row my-5 bg-light rounded">

            <div class="col-12 col-md-6 d-flex flex-column rounded p-3 g-2 mb-0">
                <div class="bg-white rounded h-100 m-4 ps-2 pe-2">

                    <h3 class="text-start ps-2 rounded pt-2 py-0 mb-0" style="font-family: Arial,serif !important;">
                        Об авторе #{{$author->id}}:
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <h3 class="mb-0 ps-2">
                        Имя:
                        <span style="color:indianred!important;">{{$author->name}}</span>
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <h3 class="mb-0 ps-2">
                        Книги:
                        <span style="color:indianred!important;">
                            @foreach($author->books as $book)
                                <a href="/book/{{$book->id}}">{{$book->title}}</a>@if(!$loop->last), @endif
                            @endforeach
                        </span>
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <div class="mb-0 d-flex ps-2" style="max-width:100%;">
                        <h3 class="me-2 mb-0">Биография:</h3>
                        <p class="text-danger text-start flex-grow-1 mb-0"
                           style="font-size: 1.6em; max-width:100%; word-break: break-word; overflow-wrap: anywhere; white-space: normal;">
                            {{$author->bio}}
                        </p>
                    </div>

                    <hr style="color: #f8f9fa !important;">
                </div>
            </div>

            <div class="col-12 col-md-6 mt-0 pt-4">
                <div class="img-container d-flex justify-content-center p-5 pt-4">
                    <!-- мобилка -->
                    <img class="img-fluid w-100 d-block d-md-none" src="{{$author->portrait}}" alt="Book cover">

                    <!-- планшет -->
                    <img class="img-fluid w-100 d-none d-md-block d-lg-none" src="{{$author->portrait}}" alt="Book cover">

                    <!-- десктоп -->
                    <img class="img-fluid w-50 d-none d-lg-block" src="{{$author->portrait}}" alt="Book cover">
                </div>
            </div>

        </div>

        <!-- If admin it appears -->
        @if($author)
            <div class="row mt-5 bg-light rounded p-4">
                <div class="col-12">
                    <div class="button-group d-flex justify-content-end align-items-center">
                        <button class="btn btn-info m-2 p-1 pb-1" data-bs-toggle="modal" data-bs-target="#editAuthor{{ $book->id }}">
                            <img class="icon-btn" src="{{asset("img/icons/edit.png")}}" alt="Edit">
                        </button>

                        <x-popup-edit
                            id="editAuthor{{ $book->id }}"
                            title="Редактирование автора"
                            :item="$author"

                        />

                        <button class="btn btn-danger m-2 p-1" data-bs-toggle="modal" data-bs-target="#deleteAuthor{{ $author->id }}">
                            <img class="icon-btn" src="{{ asset('img/icons/delete.png') }}" alt="Delete">
                        </button>

                        <x-popup-delete
                            id="deleteAuthor{{ $author->id }}"
                            title="Удаление автора"
                            body="автора {{ $author->name }}?"

                        />

                    </div>
                </div>
            </div>
        @endif
    </div>

</x-layout>
