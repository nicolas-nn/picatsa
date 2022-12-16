
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <h1>Show</h1>
    <div style="">
        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Go Home">
            <button class="btn btn-primary" style="pointer-events:;" type="button" ><a href="/vignettes" class="text-warning">Vignettes</a></button>
          </span>
    </div>  
    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ $vignette->url }}" alt="Card image cap">
            <div class="card-body">
                <h1 class="card-title">légende : {{ $vignette->legende }}</h1>
              <p class="card-text">description : {{ $vignette->description }}</p>
              <p>Statut : {{ $vignette->Statut ? "actif" : "inactif"}}</p>
            </div>
            </div>        
        </div>
</body>
</html>