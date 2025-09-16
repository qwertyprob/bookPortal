<x-admin-layout title="Books">

    <div class="add-button-container mt-3 mb-4 w-100">
        <button class="btn btn-info w-100 d-flex justify-content-around"
                data-bs-toggle="modal" data-bs-target="#createAuthorModal">
            <span class="icon fs-2"><i class="bi bi-cloud-plus"></i></span>
        </button>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead class="p-2">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Книги</th>
                <th scope="col">Биография</th>
                <th scope="col">Портрет</th>
                <th scope="col">Настройки</th>
            </tr>
            </thead>
            <tbody>
            @foreach($authors as $author)
                <tr>
                    <th scope="row">{{ $author->id }}</th>
                    <td>{{ $author->name }}</td>
                    <td>
                        @if($author->books->isNotEmpty())
                            @foreach($author->books as $book)
                                <span class="badge bg-secondary">{{ $book->title }}</span>
                            @endforeach
                        @else
                            —
                        @endif
                    </td>
                    <td>{{ Str::limit($author->bio, 100) }}</td>
                    <td>
                        @if($author->portrait)
                            <img src="{{ $author->portrait }}" alt="cover"
                                 class="img-thumbnail my-3" style="max-width: 80px;">
                        @else
                            —
                        @endif
                    </td>
                    <td class="bg-white">
                        <div class="d-flex flex-column justify-content-center p-3">

                            <button class="btn btn-info my-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#editAuthor{{ $author->id }}">
                                <span class="icon" style="color: white !important;">
                                    <i class="bi bi-pencil-square"></i>
                                </span>
                            </button>

                            <button class="btn btn-danger my-2"
                                    data-bs-toggle="modal"
                                    data-bs-target="#deleteAuthor{{ $author->id }}">
                                <span class="icon" style="color: white !important;">
                                    <i class="bi bi-trash"></i>
                                </span>
                            </button>
                        </div>
                    </td>
                </tr>

                {{-- Переносим модалки в стек --}}
                @push('modals')
                    <x-popup-edit
                        id="editAuthor{{ $author->id }}"
                        title="Редактирование автора"
                        :item="$author"
                    />
                    <x-popup-delete
                        id="deleteAuthor{{ $author->id }}"
                        title="Удаление автора"
                        body="автора {{ $author->name }}?"
                    />
                @endpush
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-5 flex-wrap ">
        {{ $authors->onEachSide(2)->links('pagination::bootstrap-5') }}
    </div>

</x-admin-layout>
