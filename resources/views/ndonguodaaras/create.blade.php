@extends('layouts.navigation')
@extends('dashboard')

@section('contenue')
    <form action="{{ url('ndonguodaaras') }}" method="post">
        @csrf

        <div class="col-md-12 mx-auto shadow p-4">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nom: </label>
                    <input type="text" class="form-control" name="nom" id="nom">
                </div>
                <div class="col">
                    <label for="" class="form-label">Prenom :</label>
                    <input type="text" class="form-control" name="prenom" id="prenom">
                </div>
                <div class="mb-3">
                    <label for="chemin" class="form-label">Fichier : </label>
                    <input value="{{ old('chemin') }}" type="file" name="chemin"
                        class="form-control  @error('chemin')
            is-invalid   @enderror" id="chemin"
                        aria-describedby="emailHelp">
                </div>
                <div class="col">
                    <label for="" class="form-label">Naissance :</label>
                <input type="text" class="form-control" name="telephone" id="telephone">
                </div>
                <div class="col">
                    <label for="" class="form-label">Statue :</label>
                <input type="text" class="form-control" name="telephone" id="telephone">
                </div>
                <div class="col">
                    <label for="" class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="telephone" id="telephone">
                </div>
            </div>
            <div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection
