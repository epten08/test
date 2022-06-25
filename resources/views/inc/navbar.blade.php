<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">{{config('app.name','LOGISTICS')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/branches">Branches</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/drivers">Drivers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tractors">Tractors</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
