<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>BackOffice</title>
</head>
<body>
    
<div style="">
    <h1>Gestion des vignettes</h1>
    <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="Go Home">
        <button class="btn btn-primary" style="pointer-events:;" type="button" ><a href="/" class="text-warning">home</a></button>
      </span>
</div>   
<div style="margin:20px">
    <button type="button" class="btn btn-sm btn-outline-secondary text-success" onclick="window.location.href='/create'">Add a new cat</button>
</div> 
<div>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Légende</th>
            <th scope="col">Decription</th>
            <th scope="col">Url image</th>
            <th scope="col">Show</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $vignettes as $vignette)
            <form method="post" action="delete/{{$vignette->id}}">
          <tr>
            
            <th scope="row">{{ $vignette->id }}</th>
            <td style="margin:10px"> {{ $vignette->legende }}</td>
            <td style="margin:10px">{{ $vignette->description }}</td>
            <td><img src="{{ $vignette->url }}" class="img-thumbnail " alt="..."></td>
            
            <td style="margin:10px">                    
                <button type="button" class="btn btn-sm btn-outline-secondary text-info" onclick="window.location.href='show/{{ $vignette->id }}'">Show</button>
            </td>
            <td style="margin:10px">                   
                <button type="button" class="btn btn-sm btn-outline-secondary text-warning" onclick="window.location.href='edit/{{ $vignette->id }}'">Edit</button>
            </td>
            <td style="margin:10px">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-sm-danger btn-outline-secondary text-danger" type="submit">Delete</button>
            </td>
          </tr>
            </form>
          @endforeach
        </tbody>
      </table>
</div>
<div style="margin:20px">
    <button type="button" class="btn btn-sm btn-outline-secondary text-success" onclick="window.location.href='/create'">Add a new cat</button>
</div> 
      
</body>
</html>