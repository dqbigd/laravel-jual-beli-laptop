<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">JualLaptop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item {{request()->segment(1) == 'home' ? 'active' : ''}}">
          <a class="nav-link" href="/home">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item {{request()->segment(1) == 'pesan' ? 'active' : ''}}">
          <a class="nav-link" href="/pesan">Pesan</a>
        </li>
      </ul>
    </div>
  </nav>
