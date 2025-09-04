<x-layout title="О нас">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <x-navbar />

    <div class="container my-5">
        <div class="row my-5 py-1 px-0">

            <div class="col-12 my-5">
                <x-map></x-map>
            </div>
        </div>

        <div class="row d-flex">
            <div class="col=12 col-md-6">
                <p>
                    Адрес:
                    <span class="fs-5" style="font-family: Arial; color: var(--pink-color);">
                    Samuel Von Brukenthal 4, Sibiu 550178, Romania
                </span>
                </p>

                <p>
                    Телефон:
                    <span class="fs-5" style="font-family: Arial; color: var(--pink-color);">
                    +40 269 217 691
                </span>
                </p>
            </div>
                <div class="col=12 col-md-6">
                    <div class="d-flex my-2">
                        <p class="me-2">График работы:</p>
                        <ul class="fs-6 my-2" style="list-style: none; padding-left: 0; font-family: Arial; color: var(--pink-color);">
                            <li><strong>Понедельник:</strong> 09:00 — 18:00</li>
                            <li><strong>Вторник:</strong> 09:00 — 18:00</li>
                            <li><strong>Среда:</strong> 09:00 — 18:00</li>
                            <li><strong>Четверг:</strong> 09:00 — 18:00</li>
                            <li><strong>Пятница:</strong> 09:00 — 18:00</li>
                            <li><strong>Суббота:</strong> 09:00 — 14:00</li>
                            <li><strong>Воскресенье:</strong> Закрыто</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-layout>



