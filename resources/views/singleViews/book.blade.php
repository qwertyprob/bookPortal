<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />

    <div class="container">
        <div class="row my-5 bg-light rounded">
            <div class="col-12 col-md-6 d-flex flex-column rounded p-3 g-2 mb-0">
                <div class="bg-white rounded h-100 m-4 ps-2 pe-2">
                    <h3 class="text-start ps-2 rounded pt-2 py-0 mb-0" style="font-family: Arial !important;">
                        О книге #{{$book->id}}:
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <h3 class="mb-0 ps-2">
                        Название:
                        <span style="color:indianred!important;">{{$book->title}}</span>
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <h3 class="mb-0 ps-2">
                        Авторы:
                        <span style="color:indianred!important;">
                            @foreach($book->authors as $author)
                                <a href="/author/{{$author->id}}">{{$author->name}}</a>@if(!$loop->last), @endif
                            @endforeach
                        </span>
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <h3 class="mb-0 ps-2">Рейтинг: 4.3 </h3>

                    <hr style="color: #f8f9fa !important;">


                    <h3 class="mb-0 ps-2">
                        Жанры:
                        <span style="color:indianred!important;">
                            {{ $book->genres->pluck('name')->implode(', ') }}
                        </span>
                    </h3>

                    <hr style="color: #f8f9fa !important;">

                    <div class="mb-0 d-flex ps-2" style="max-width:100%;">
                        <h3 class="me-2 mb-0">Описание:</h3>
                        <p class="text-danger text-start flex-grow-1 mb-0"
                           style="font-size: 1.6em; max-width:100%; word-break: break-word; overflow-wrap: anywhere; white-space: normal;">
                            {{$book->description}}
                        </p>
                    </div>

                    <hr style="color: #f8f9fa !important;">
                </div>
            </div>

            <div class="col-12 col-md-6 mt-0 pt-4">
                <div class="img-container d-flex justify-content-center p-5 pt-4">
                    <!-- мобилка -->
                    <img class="img-fluid w-100 d-block d-md-none" src="{{$book->cover_image}}" alt="Book cover">

                    <!-- планшет -->
                    <img class="img-fluid w-100 d-none d-md-block d-lg-none" src="{{$book->cover_image}}" alt="Book cover">

                    <!-- десктоп -->
                    <img class="img-fluid w-50 d-none d-lg-block" src="{{$book->cover_image}}" alt="Book cover">
                </div>
            </div>
        </div>

        <!-- Comments -->
        <div class="row mt-5 mb-5 bg-light rounded">
            <div class="col-12 p-3 g-2 mb-2">
                <h1>Комментарии:</h1>
                <div>
                    <div class="d-flex flex-column mx-3 mt-2 p-2 bg-white rounded">
                        <h4 class="m-0 mt-2" style="color: var(--orange-color) !important;">
                            Арсений Игоревич (qwertyprob)
                        </h4>
                        <small style="font-style: italic">Суббота 21 июня 10:43</small>
                        <hr style="color: #f8f9fa !important; border: #f8f9fa solid 0.1px">
                        <p class="text-start mb-0 fs-4 fs-md-5 fs-lg-4 "
                           style="font-family: 'Calibri Light' !important;
                                  font-size: 2em;
                                  line-height: 1.1;
                                  color: var(--pink-color)">
                            Я был приятно удивлён этой книгой. С самого начала автор затягивает в атмосферу и постепенно раскрывает персонажей так, что к каждому из них начинаешь относиться как к знакомым людям. Особенно понравилось, что сюжет развивается динамично, но при этом не теряется глубина смыслов. Некоторые главы заставили задуматься о действительно важных вещах — о ценности семьи, дружбы и собственных решений. Единственный момент, который можно отметить как слабый — это слегка затянутое описание в середине, но в целом оно не портит впечатления. После прочтения остаётся ощущение тепла и желание вернуться к книге ещё раз.
                        </p>
                        <hr style="color: #f8f9fa !important; border: #f8f9fa solid 0.1px">
                    </div>

                    <div class="button-group d-flex justify-content-end align-items-center p-2 " >
                        <a class="btn btn-info m-2 p-0 pb-1">
                            <img class="icon-btn" src="{{asset("img/icons/edit.png")}}" alt="Edit">
                        </a>
                        <a class="btn btn-danger m-2 p-0 pb-1">
                            <img class="icon-btn" src="{{asset("img/icons/delete.png")}}" alt="Delete">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add comment -->
        <div class="row mt-5 bg-light rounded">
            <div class="col-12 p-4 mb-0">
                <form>
                    <div class="form-group p-2">
                        <h3 for="name" class="form-label">Имя:</h3>
                        <input type="text" class="form-control" id="name" placeholder="Введите имя">
                    </div>

                    <div class="form-group p-2">
                        <h3 for="comment" class="form-label">Добавьте комментарий:</h3>
                        <textarea class="form-control" id="comment" rows="3" placeholder="Ваш комментарий"></textarea>
                    </div>

                    <div class="d-flex justify-content-end p-2">
                        <button type="submit" class="btn btn-info">Отправить</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- If admin it appears -->
        @if($book)
            <div class="row mt-5 bg-light rounded p-4">
                <div class="col-12">
                    <div class="button-group d-flex justify-content-end align-items-center">
                        <!-- Edit -->

                        <button class="btn btn-info m-2 p-1 pb-1" data-bs-toggle="modal" data-bs-target="#editBook{{ $book->id }}">
                            <img class="icon-btn" src="{{asset("img/icons/edit.png")}}" alt="Edit">
                        </button>

                            <x-popup-edit
                                id="editBook{{ $book->id }}"
                                title="Редактирование книги"
                                :item="$book"
                            />
                        <!-- Delete -->

                        <button class="btn btn-danger m-2 p-1" data-bs-toggle="modal" data-bs-target="#deleteBook{{ $book->id }}">
                            <img class="icon-btn" src="{{ asset('img/icons/delete.png') }}" alt="Delete">
                        </button>

                            <x-popup-delete
                                id="deleteBook{{ $book->id }}"
                                title="Удаление книги"
                                body="книгу {{ $book->title }}?"
                            />
                    </div>
                </div>
            </div>
        @endif
    </div>
</x-layout>
