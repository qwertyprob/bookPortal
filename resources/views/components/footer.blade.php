<footer class="footer py-4">
    <div class="container" ">
        <div class="row d-flex justify-content-between align-items-start">

            <!-- Левая колонка -->
            <div class="col-12 col-md-4 p-1 py-0">
                <h2>О себе:</h2>
                <img src="{{ asset('img/photo-profile.jpeg') }}" class="bio-photo mb-3" alt="profile photo">
                <p>
                    Я — <strong>начинающий PHP-разработчик</strong>, увлечённый созданием веб-приложений.
                    Имею <strong>базовые знания в JavaScript</strong> и опыт работы с веб-технологиями на платформе
                    <strong>.NET</strong>.
                    Люблю разрабатывать <strong>функциональные и аккуратные сайты</strong>, интересуюсь вопросами
                    информационной безопасности и стремлюсь писать <strong>надёжный, чистый код</strong>.
                    В настоящее время активно <strong>изучаю фреймворк Laravel</strong> и развиваю навыки
                    <strong>современной веб-разработки</strong>.
                </p>
            </div>

            <!-- Средняя колонка -->
            <div class="col-12 col-md-4 d-flex flex-column py-0 p-4">
                <h2>Ссылки:</h2>

                <a href="https://github.com/qwertyprob" target="_blank">
                    <i class="fab fa-github me-2" style="color: var(--pink-color);"></i><span>Github</span>
                </a>

                <a href="https://www.linkedin.com/in/arsenii-%C8%99ubenok-95b5342a2/" target="_blank">
                    <i class="fab fa-linkedin me-2" style="color: var(--pink-color);"></i><span>LinkedIn</span>
                </a>

                <a href="https://t.me/gwertysprob" target="_blank">
                    <i class="fab fa-telegram me-2" style="color: var(--pink-color);"></i><span>Telegram</span>
                </a>

                <hr>

                <h2 class="py-2">E-mail:</h2>
                <a href="mailto:eqspertars@gmail.com">
                    <i class="fas fa-envelope me-2" style="color: var(--pink-color);"></i>
                    <span>eqspertars@gmail.com</span>
                </a>
            </div>

            <!-- Правая колонка -->
            <div class="col-12 col-md-4 p-4 py-0">
                <h2>О портале:</h2>
                <p class="text-justify">
                    Этот сайт — мой <strong>учебный проект</strong>, созданный на <strong>PHP (v8.4)</strong>
                    с использованием фреймворка <strong>Laravel 12.x</strong>.
                    Я разработал его для <strong>практики и удовольствия</strong> — ведь люблю книги и увлекаюсь веб-разработкой.
                    Здесь можно <strong>искать и добавлять книги</strong>, делиться описаниями и просто наслаждаться
                    простым и понятным интерфейсом.
                    Сайт не коммерческий — он создавался как <strong>пет-проект</strong>, чтобы изучать
                    <strong>Laravel</strong> на реальном примере и развивать навыки в <strong>backend- и frontend-разработке</strong>.
                    Проект живой: я <strong>постоянно дорабатываю</strong> его, экспериментирую с новыми функциями и учусь писать чище и лучше.
                    <strong><br>Спасибо, что зашли!</strong>
                </p>
            </div>
        </div>


        <!-- Нижняя полоса -->
        <div class="col-12 d-flex justify-content-around gap-3 text-center">
            <medium>Copyright © {{ now()->format('Y') }}</medium>
            <medium>Арсений — qwertyprob.</medium>
        </div>
    </div>
</footer>
