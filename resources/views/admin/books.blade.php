<x-admin-layout title="Books">

    <div class="add-button-container mt-3 mb-4 w-100">
        <button class="btn btn-success w-100 d-flex justify-content-around" data-bs-toggle="modal"
                data-bs-target="#createBookModal">
            <span class="icon fs-2"><i class="bi bi-cloud-plus"></i></span>
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="p-2">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название</th>
                <th scope="col">Авторы</th>
                <th scope="col">Рейтинг</th>
                <th scope="col">Жанры</th>
                <th scope="col">Описание</th>
                <th scope="col">Картинка</th>
                <th scope="col">Настройки</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->title }}</td>
                    @foreach($book->authors as $author)
                        <td>{{ $author->name ?? '—' }}</td>
                    @endforeach
                    <td>{{ $book->rating ?? '—' }}</td>
                    <td>
                        @foreach($book->genres as $genre)
                            <span class="badge bg-secondary">{{ $genre->name }}</span>
                        @endforeach
                    </td>
                    <td>{{ Str::limit($book->description, 100) }}</td>
                    <td>
                        @if($book->cover_image)
                            <img src="{{ $book->cover_image }}"
                                 alt="cover" class="img-thumbnail my-3" style="max-width: 80px;">
                        @else
                            —
                        @endif
                    </td>
                    <td class="bg-white">
                        <div class="d-flex flex-column justify-content-center p-3">
                            <button class="btn btn-info my-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editBook{{ $book->id }}">
                                    <span class="icon" style="color: white !important;">
                                        <i class="bi bi-pencil-square"></i>
                                    </span>
                            </button>

                            <button class="btn btn-danger my-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteBook{{ $book->id }}">
                                    <span class="icon" style="color: white !important;">
                                        <i class="bi bi-trash"></i>
                                    </span>
                            </button>
                        </div>
                    </td>
                </tr>

                {{-- Откладываем модалки в секцию --}}
                @push('modals')
                    <x-popup-edit
                        id="editBook{{ $book->id }}"
                        title="Редактирование книги"
                        :item="$book"
                    />
                    <x-popup-delete
                        id="deleteBook{{ $book->id }}"
                        title="Удаление книги"
                        body="книгу {{ $book->title }}?"
                    />
                @endpush
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-5 flex-wrap g-5">
        {{ $books->onEachSide(2)->links('pagination::bootstrap-5') }}
    </div>

</x-admin-layout>
