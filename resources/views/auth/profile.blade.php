<x-auth-layout title="Profile">
    <x-navbar></x-navbar>
    <x-search search="Книгу или Автора"></x-search>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-sm-10 col-md-6 col-lg-4 w-100">
                <h2 >Мой аккаунт</h2>
                <form class="p-3 bg-light rounded">
                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: var(--pink-color)">Имя на сайте</label>
                        <input type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label" style="color: var(--pink-color)">E-mail</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: var(--pink-color)">Пароль</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 mt-3">
                        <ul class="list-group d-flex flex-column flex-md-row gap-2 gap-md-4 justify-content-between"
                        style="border: none !important;">

                            <li class="list-group-item flex-fill text-center text-md-start" style="border: none !important;">
                                <strong>Зарегистрирован:</strong> <span class="form-label fs-5" style="color: var(--pink-color)">3 сент.</span>
                            </li>
                            <li class="list-group-item flex-fill text-center text-md-start" style="border: none !important;">
                                <strong>Комментариев:</strong> <span class="form-label fs-5" style="color: var(--pink-color)">100</span>
                            </li>
                            <li class="list-group-item flex-fill text-center text-md-start" style="border: none !important;">
                                <strong>Предложено книг:</strong> <span class="form-label fs-5" style="color: var(--pink-color)">12</span>
                            </li>
                            <li class="list-group-item flex-fill text-center text-md-start" style="border: none !important;">
                                <strong>Статус:</strong> <span class="form-label fs-5" style="color: var(--pink-color)">User</span>
                            </li>
                        </ul>
                    </div>





                    <button style="width: 100% !important;" type="submit" class="btn btn-info w-100 mb-3">Сохранить</button>


                </form>
            </div>
        </div>

    </div>
</x-auth-layout>
