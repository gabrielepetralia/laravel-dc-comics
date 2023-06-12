<header>
    <div class="container">

      <div class="logo">
        <img src="/img/dc-logo.png" alt="Logo DC">
      </div>

      <nav>
        <ul>
          <li>
            <a href="{{ route('home') }}" class="fs-sm fw-medium {{ Route::currentRouteName() === 'home' ? "active" : ""}}">Home</a>
          </li>
          <li>
            <a href="{{ route('comics.index') }}" class="fs-sm fw-medium {{ Route::currentRouteName() === 'comics.index' ? "active" : ""}}">Comics</a>
          </li>
        </ul>
      </nav>

    </div>
  </header>
