<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Acceuil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('show.create_product') }}">Ajouter un Produit</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">List des Produits</a>
      </li>
    </ul>
  </div>
</nav>
