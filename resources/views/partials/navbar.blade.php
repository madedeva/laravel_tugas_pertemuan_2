<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Tugas Web Lanjut</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Tugas Satu") ? 'active' : ''}}" href="/">Tugas Satu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Tugas Dua") ? 'active' : ''}}" href="/tugasdua">Tugas Dua</a>
        </li>
      </ul>
    </div>
  </div>
</nav>