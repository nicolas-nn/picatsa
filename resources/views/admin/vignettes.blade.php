<div style="display:flex;">
    <h1>Gestion des vignettes</h1>
  <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='/create'">Add</button>
  </div>
  <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ( $vignettes as $vignette)
          <div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top"src={{$vignette->url}} alt="">
              <div class="card-body">
                <h4><a href="#">
                  {{ $vignette->legende }}
              </a></h4>
                <p class="card-text">{{ $vignette->description }}</p>
                
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='show/{{ $vignette->id }}'">Show</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="window.location.href='edit/{{ $vignette->id }}'">Edit</button>
                                 
                    <form method="post" action="delete/{{$vignette->id}}">
                  
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                  
                      <button class="btn btn-sm btn-outline-secondary" type="submit">Delete</button>
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$vignette->url}} " alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>