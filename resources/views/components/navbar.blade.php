

<div class="container custom-container fixed-top"  style="background-color: white !important;">
  <div class="navbar-custom p-2">
    <!-- Левая группа ссылок -->
    <div class="nav-group-left ms-0 ms-sm-4">
      <a href="/" class="nav-item {{ Request::is('/*') ? 'active' : '' }}">
        <i class="fas fa-home"></i>
        <span class="nav-text">Главная</span>
      </a>
      <a href="/books" class="nav-item {{ Request::is('book*') || Request::is('books*') ? 'active' : '' }}">
        <i class="fas fa-book"></i>
        <span class="nav-text">Книги</span>
      </a>
      <a href="/authors" class="nav-item {{ Request::is('author*' ) || Request::is('authors*') ? 'active' : '' }}">
        <i class="fas fa-feather-alt"></i>
        <span class="nav-text">Авторы</span>
      </a>
      <a href="/about" class="nav-item {{ Request::is('about*') ? 'active' : '' }}">
        <i class="fas fa-info"></i>
        <span class="nav-text">О нас</span>
      </a>
    </div>

      <!-- Правая группа (профиль / дропдаун) -->
      <div class="nav-group-right pe-3">
          <div class="dropdown">
              <a class="nav-item  {{ Request::is('profile*') ? 'active' : '' }}
               dropdown-toggle d-flex align-items-center text-decoration-none" href="#"
                 id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <!-- Аватар с иконкой Bootstrap -->
                  <i class="fas fa-user"></i> <span class="nav-text"></span>
                  <span class="nav-text fw-medium">Гость</span>
              </a>

              <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="userDropdown" style="min-width: 200px;">
                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/login">
                          <i class="bi bi-box-arrow-in-right me-2"></i> Войти
                      </a>
                  </li>
                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/register">
                          <i class="bi bi-person-plus me-2"></i> Регистрация
                      </a>
                  </li>
                  <li>
                      <a class="dropdown-item d-flex align-items-center" href="/admin/dashboard">
                          <i class="bi bi-speedometer2 me-2"></i> Панель
                      </a>
                  </li>
              </ul>
          </div>
      </div>

  </div>
  </div>
</div>

<script src="{{ asset('js/dropdown-scroll-blocker.js') }}"></script>



