<x-auth-layout title="Not found">
    <x-navbar></x-navbar>
    <x-search search="Книгу или Автора"></x-search>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="text-center" style="font-size: 12rem;">404</h1>
                <h2 style="color:var(--orange-color) !important;"
                    class="text-center display-3"> Страница <span style="color:var(--blue-color-) !important ">{{urldecode(request()->getRequestUri())}} </span> не найдена!</h2>
            </div>
        </div>
    </div>
</x-auth-layout>
