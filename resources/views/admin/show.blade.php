
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="{{ $vignette->url }}" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h1 class="card-title">légende : {{ $vignette->legende }}</h1>
          
          <p>description : {{ $vignette->description }}</p>
          
          <p>Statut : {{ $vignette->Statut ? "actif" : "inactif"}}</p>
          
        </div>
      </div>
    </div>
  </div>