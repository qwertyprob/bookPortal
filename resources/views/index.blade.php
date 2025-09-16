<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />


    <div class="container">

        @if($authors == null)
            <h1>{{$error}}</h1>
        @else
        <h1 class="text-start mt-3">Популярные книги:</h1>
            <div class="row g-3 mb-3">
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
        @endif
        <h1 class="text-start mt-3">Популярные Авторы:</h1>
        @if($authors == null)
            <h1>{{$error}}</h1>
        @else
            <div class="row g-3 mb-3">
                @foreach($authors as $author)
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="book-block bg-light p-3 rounded hover position-relative">
                            <div class="d-flex flex-column pt-3 align-items-center justify-content-center">
                                <img src="{{$author->portrait}}" class="book-image rounded">
                            </div>
                            <div class="py-4" style="height: 15px !important;">
                                <p class="text-start "> {{$author->name}}</p>
                            </div>

                            <a href="/author/{{$author->id}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <!-- Блок с цитатой -->
        <div class="row rounded bg-white mt-5 ">
            <hr>
            <!-- Текст -->
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center mt-3">
                <blockquote class="blockquote">
                    <p class="fs-4 fst-italic fw-light px-2" style="font-family: Arial;">
                        «Книга должна быть как несчастье, которое нас потрясает, как смерть кого-то, кого мы любим больше, чем себя, как изгнание в леса, подальше от всех людей, как самоубийство. Книга должна быть опасной»
                    </p>
                    <div class="blockquote-footer text-center mt-3" style="font-family: Arial; color: black;">
                        Франц Кафка
                    </div>
                </blockquote>
            </div>

            <div class="col-12 col-md-6 d-flex justify-content-center align-items-end">
                <!-- Телефон -->
                <img class="img-fluid w-100 d-none d-sm-none"
                     src="{{ asset('img/kafka-png.png') }}" alt="Kafka">

                <!-- Планшет -->
                <img class="img-fluid w-100 d-none d-sm-block d-lg-none"
                     src="{{ asset('img/kafka-png.png') }}" alt="Kafka">

                <!-- ПК -->
                <img class="img-fluid w-50 d-none d-lg-block"
                     src="{{ asset('img/kafka-png.png') }}" alt="Kafka">
            </div>
            <hr>

        </div>

    </div>

</x-layout>
