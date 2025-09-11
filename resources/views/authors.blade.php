<x-layout title="Авторы">
    <x-navbar/>
    <x-search search="Любимого автора" />

    <div class="container">

        {{-- Кнопка создания автора --}}
        <div class="row mt-5 bg-light rounded p-0 p-md-4">
            <div class="col-12">
                <div class="d-flex justify-content-start align-items-center">
                    <button class="btn btn-info m-2 p-1 pb-1" data-bs-toggle="modal" data-bs-target="#createAuthor">
                        <img class="icon-btn" src="{{ asset('img/icons/add.png') }}" alt="Create">
                    </button>

                    <x-popup-create id="createAuthor" title="Создание автора" />
                </div>
            </div>
        </div>

        {{-- Список авторов --}}
        @if($authors->isEmpty())
            <div class="row g-3 mb-3 mt-5">
                <h1>Нет авторов</h1>
            </div>
        @else
            <div class="row g-3 mb-3 mt-5">
                @foreach($authors as $author)
                    <div class="col-6 col-md-6 col-lg-2">
                        <div class="book-block bg-light p-3 pb-0 rounded hover d-flex flex-column align-items-center justify-content-around position-relative">
                            <img src="{{ $author->portrait }}" class="book-image pb-2">
                            <p class="text-start m-0">{{ $author->name }}</p>
                            <a href="/author/{{ $author->id }}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach

                {{-- Пагинация --}}
                <div class="row mt-5 bg-light rounded p-4 mx-2">
                    <div class="d-flex p-2 align-items-center justify-content-center">
                        <x-pagination :paginator="$authors" url="authors"></x-pagination>
                    </div>
                </div>
            </div>
        @endif

    </div>
</x-layout>
