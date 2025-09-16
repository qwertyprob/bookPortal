<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />

    <div class="container">
        <div class="row my-5 bg-light rounded">
            <div class="col-12 mt-0 pt-4 d-block d-md-none">
                <div class="img-container d-flex justify-content-center p-5">
                    <!-- мобилка -->
                    <img class="img-fluid w-100 d-block d-md-none" src="{{$book->cover_image}}" alt="Book cover">
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column rounded p-2 p-md-3 m-0 g-2 mb-0">
                <div class="bg-white rounded h-100 m-0 m-md-4 p-2 p-md-3">

                    <h3 class="text-start mb-3 pe-2" style="font-family: Arial !important;">
                        О книге #{{$book->id}}
                    </h3>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <strong>Название:</strong>
                            <span class="text" style="color: var(--pink-color)">{{$book->title}}</span>
                        </li>

                        <li class="list-group-item">
                            <strong>Авторы:</strong>
                            <span class="text" style="color: var(--pink-color)">
                            @foreach($book->authors as $author)
                                    <a href="/author/{{$author->id}}">{{$author->name}}</a>@if(!$loop->last), @endif
                            @endforeach
                </span>
                        </li>

                        <li class="list-group-item">
                            <strong>Рейтинг:</strong> 4.3
                        </li>

                        <li class="list-group-item">
                            <strong>Жанры:</strong>
                            <span class="text" style="color: var(--pink-color)">
                            {{ $book->genres->pluck('name')->implode(', ') }}
                            </span>
                        </li>

                        <li class="list-group-item">
                            <strong>Описание:</strong>
                            <p class="text-start" style="color: var(--pink-color)" style="font-size: 1.2em; word-break: break-word;">
                                {{$book->description}}
                            </p>
                        </li>

                    </ul>

                </div>
            </div>


            <div class="col-12 col-md-6 mt-0 pt-4">
                <div class="img-container d-flex justify-content-center p-5 pt-4">

                    <!-- планшет -->
                    <img class="img-fluid w-100 d-none d-md-block d-lg-none" src="{{$book->cover_image}}" alt="Book cover">

                    <!-- десктоп -->
                    <img class="img-fluid w-50 d-none d-lg-block" src="{{$book->cover_image}}" alt="Book cover">
                </div>
            </div>
        </div>

        <x-comments></x-comments>

        <!-- If admin it appears -->
{{--        @if($book)--}}
{{--            <div class="row mt-5 bg-light rounded p-4">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="button-group d-flex justify-content-end align-items-center">--}}
{{--                        <!-- Edit -->--}}

{{--                        <button class="btn btn-info m-2 p-1 pb-1" data-bs-toggle="modal" data-bs-target="#editBook{{ $book->id }}">--}}
{{--                            <img class="icon-btn" src="{{asset("img/icons/edit.png")}}" alt="Edit">--}}
{{--                        </button>--}}

{{--                            <x-popup-edit--}}
{{--                                id="editBook{{ $book->id }}"--}}
{{--                                title="Редактирование книги"--}}
{{--                                :item="$book"--}}
{{--                            />--}}
{{--                        <!-- Delete -->--}}

{{--                        <button class="btn btn-danger m-2 p-1" data-bs-toggle="modal" data-bs-target="#deleteBook{{ $book->id }}">--}}

{{--                            <img class="icon-btn" src="{{ asset('img/icons/delete.png') }}" alt="Delete">--}}
{{--                        </button>--}}

{{--                            <x-popup-delete--}}
{{--                                id="deleteBook{{ $book->id }}"--}}
{{--                                title="Удаление книги"--}}
{{--                                body="книгу {{ $book->title }}?"--}}
{{--                            />--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endif--}}
    </div>

</x-layout>

