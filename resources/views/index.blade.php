<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />


    <div class="container">
        <div class="row mt-5 mb-5 g-2">
            <!-- 1 блок -->
            <div class="col-12">
                <div class="bg-light rounded p-3 align-items-center hover-block position-relative">
                    <h1 class="text-center">Наши книги</h1>
                    <div class="d-flex justify-content-center w-md-50 w-lg-50">
                        <img class="img-fluid" src="{{ asset('img/book-png-2.png') }}" alt="book">
                    </div>
                    <a href="/books" class="stretched-link"></a>
                </div>
            </div>

            <!-- 2 блок -->
            <div class="col-12 col-md-6">
                <div class="bg-light rounded hover-block w-100 h-100 d-flex flex-column justify-content-between position-relative p-3 pb-0 mb-0">
                    <h2 class="text-center my-3">Наши авторы</h2>
                    <div class="d-flex align-items-center justify-content-end flex-column flex-md-row gap-3">
                        <p class="w-50 m-0 d-none d-md-block ps-3" style="font-family: Arial;">
                            Здесь можно почитать о наших авторах
                        </p>
                        <img class="img-fluid" style="width: 13em;" src="{{ asset('img/dostoevskii.png') }}" alt="book">
                    </div>
                    <a href="/authors" class="stretched-link"></a>
                </div>
            </div>

            <!-- 3 блок -->
            <div class="col-12 col-md-6">
                <div class="bg-light rounded hover-block w-100 h-100 d-flex flex-column justify-content-between position-relative p-3 pb-0 mb-0">
                    <h2 class="text-center my-3">О нас</h2>
                    <div class="d-flex align-items-center flex-column flex-md-row gap-3 pb-0 mb-0">
                        <img class="img-fluid" style="width: 7em;" src="{{ asset('img/mem.png') }}" alt="book">
                        <p class="w-50 m-0 d-none d-md-block ps-md-0 ps-5" style="font-family: Arial;">
                            Хотите узнать о нас?
                            Переходите в раздел.
                        </p>
                    </div>
                    <a href="/about" class="stretched-link"></a>
                </div>
            </div>
        </div>





        <h1 class="text-start">Специальные предложения:</h1>

        <div class="row g-3 mb-3">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
        </div>


        <h1 class="text-start">Популярные книги:</h1>

        <div class="row g-3 mb-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="bg-light p-3 rounded">
                    <pre>
    asdasdasd
    dsasda
    dassad
    dassad
    dassad
    dassaddassad
      </pre>
                </div>
            </div>
        </div>

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
