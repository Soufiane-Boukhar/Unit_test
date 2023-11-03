@extends('layout.layout')
@extends('layout.nav')
@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<div class="container d-flex justify-content-center">


    <form class="mt-5 w-50" action="" method="post">
        @csrf
        @method('POST')
        <div class="form-outline mb-4">
            <label class="form-label" for="nom">Nom</label>
            <input type="text" id="nom" class="form-control" name="nom" />
        </div>

        <div class="form-group">
            <label for="inputDescription">Description</label>
            <textarea name="description" id="inputDescription" class="form-control" required
                oninvalid="this.setCustomValidity('Ajouter ce champ s'ils vous plait')"
                oninput="setCustomValidity('')"></textarea>
        </div>

        <div class="form-outline mb-4">
            <label class="form-label" for="prix">Prix</label>
            <input type="number" id="prix" class="form-control" name="prix" />
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Ajouter</button>
    </form>
</div>

@endsection