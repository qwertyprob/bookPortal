<x-layout title="Главная страница">
    <x-navbar />
    <x-search search="Любимую книгу" />


    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-1">Добро пожаловать на портал по книгам!</h1>
            </div>
        </div>
        <div class="area cards">
        <!-- Cards -->
        
        <!-- По 4 карточки в ряду (col-6 на sm, col-3 на md и выше) -->
        <div class="row gx-3 gy-4 p-3">
            <div class="col-12 col-md-3 order-4">
                <div class="card h-100 shadow-sm" style="border: none !important;">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 7</h5>
                        <p class="card-text">Описание карточки 7.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 order-3">
                <div class="card h-100 shadow-sm" style="border: none !important;">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 8</h5>
                        <p class="card-text">Описание карточки 8.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 order-1">
                <div class="card h-100 shadow-sm" style="border: none !important;">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 9</h5>
                        <p class="card-text">Описание карточки 9.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 order-2">
                <div class="card h-100 shadow-sm" style="border: none !important;">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 10</h5>
                        <p class="card-text">Описание карточки 10.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- По 3 карточки в ряду (col-12 на xs, col-6 на sm, col-4 на md) -->
        <div class="row gx-3 gy-4 p-3 order-1">
            <div class="col-12 col-sm-6 col-md-4 order-3">
                <div class="card h-100 shadow-sm" style="border: none !important;">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 11</h5>
                        <p class="card-text">Описание карточки 11.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 order-2">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 12</h5>
                        <p class="card-text">Описание карточки 12.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 order-1">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Карточка 13</h5>
                        <p class="card-text">Описание карточки 13.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </div>

</x-layout>
