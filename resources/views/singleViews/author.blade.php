<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />

    <div class="container">
        <div class="row my-5 bg-light rounded">
            <div class="col-12 mt-0 pt-4 d-block d-md-none">
                <div class="img-container d-flex justify-content-center p-5 pt-4">
                    <!-- мобилка -->
                    <img class="img-fluid w-100 d-block d-md-none" src="{{$author->portrait}}" alt="Book cover">
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column rounded p-2 p-md-3 m-0 g-2 mb-0">
                <div class="bg-white rounded h-100 m-0 m-md-4 p-2 p-md-3">

                    <h3 class="text-center mb-3" style="font-family: Arial !important;">
                        Об авторе #{{$author->id}}
                    </h3>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">
                            <strong>Имя автора:</strong>
                            <span class="text" style="color: var(--pink-color)">{{$author->name}}</span>
                        </li>

                        <li class="list-group-item">
                            <strong>Книги:</strong>
                            <span class="text" style="color: var(--pink-color)">
                                @foreach($author->books as $book)
                                    <a href="/book/{{$book->id}}">{{$book->title}}</a>@if(!$loop->last), @endif
                                @endforeach
                            </span>
                        </li>

                        <li class="list-group-item">
                            <strong>Биография автора:</strong>
                            <p class="text-start" style="color: var(--pink-color)" style="font-size: 1.2em; word-break: break-word;">
                                {{$author->bio}}
                            </p>
                        </li>

                    </ul>

                </div>
            </div>

            <div class="col-12 col-md-6 mt-0 pt-4">
                <div class="img-container d-flex justify-content-center p-5 pt-4 ">

                    <!-- планшет -->
                    <img class="img-fluid w-100 d-none d-md-block d-lg-none rounded" src="{{$author->portrait}}" alt="Book cover">

                    <!-- десктоп -->
                    <img class="img-fluid w-50 d-none d-lg-block rounded" src="{{$author->portrait}}" alt="Book cover">

                </div>
            </div>

        </div>


    </div>

</x-layout>
