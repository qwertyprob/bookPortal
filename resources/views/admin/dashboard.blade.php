<x-admin-layout title="Dashboard">

    <div class="row mb-4 mt-0">
        <h1 class="text-start">Статистика:</h1>
    </div>

    <!-- Карточки статистики -->
    <div class="row d-flex justify-content-center">
        <div class="col-6 col-md-3 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Книги</h5>
                    <p class="display-6 fw-bold">{{ $booksCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-6 col-md-3 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Авторы</h5>
                    <p class="display-6 fw-bold">{{ $authorsCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Жанры</h5>
                    <p class="display-6 fw-bold">{{ $genresCount }}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-3 mb-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Комментарии</h5>
                    <p class="display-6 fw-bold">{{ $commentsCount ?? 0 }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Популярные элементы -->
    <div class="row d-flex justify-content-center mt-4">
        <div class="col-12 col-md-6 mb-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Самая популярная книга</h5>
                    <p class="display-6 fw-bold">{{ $popularBook->title ?? 'Нет данных' }}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Самый популярный автор</h5>
                    <p class="display-6 fw-bold">{{ $popularAuthor->name ?? 'Нет данных' }}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Самый популярный жанр</h5>
                    <p class="display-6 fw-bold">{{ $popularGenre->name ?? 'Нет данных' }}</p>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 mb-4">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Админов</h5>
                    <p class="display-6 fw-bold">2</p>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
