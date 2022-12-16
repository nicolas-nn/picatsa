<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Formulaire</title>
</head>
<body>
    
@if( !empty($vignette)  )

<form method="POST" action="{{route('update',$vignette->id)}}">
@method('POST')

@else

<form method="POST" action="{{route('store')}}">
@method('POST')

@endif

    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Légende </label>
      <input type="text" class="form-control" name="legende" id="exampleInputEmail1" aria-describedby="emailHelp" 
      value="{{ $vignette->legende ?? old('legend')}}">
      @error('legende')
      {{$message}}
      @enderror
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">url image</label>
      <input type="text" class="form-control" name="url" id="exampleInputPassword1" 
      value="https://cataas.com/cat">       
            @error('url')
            {{$message}}
            @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" id="description" aria-describedby="emailHelp" 
        value="{{ $vignette->description ?? old('description')}}">
        @error('description')
        {{$message}}
        @enderror
      </div>
      <div class="mb-3">
        <label for="statut" class="form-label">Statut :</label>
        <select name="statut" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="1">Actif</option>
            <option value="0">Inactif</option>
            
        </select>
        @error('statut')
        {{$message}}
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  
</body>
</html>