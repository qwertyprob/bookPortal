
<x-auth-layout title="Регистрация">
    <div class="container my-4" style="margin-top:5%!important; ">
        <div class="row justify-content-center ">

            <x-logoString/>

            <div class="col-12 col-sm-10 col-md-6 col-lg-4">
                <form class="p-3 bg-light rounded">

                    <div class="mb-3">
                        <label for="name" class="form-label">Имя</label>
                        <input type="text" class="form-control w-100" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Пароль</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Запомни меня</label>
                    </div>

                        <button style="width: 100% !important;" type="submit" class="btn btn-info w-100 mb-3">Регистрация</button>

                        <button style="width: 100% !important;" id="mainPageButton" type="submit" class="btn btn-secondary w-100">На главную</button>

                </form>
            </div>
        </div>
    </div>

</x-auth-layout>





