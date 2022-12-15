
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
      <input type="text" class="form-control" name="legend" id="exampleInputEmail1" aria-describedby="emailHelp" 
      value="{{ $vignette->legende ?? old('legend')}}">
      @error('legend')
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
        <select name="pets" id="pet-select">
            <option value="">--Please choose an option--</option>
            <option value="true">Actif</option>
            <option value="false">Inactif</option>
            
        </select>
        @error('statut')
        {{$message}}
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  