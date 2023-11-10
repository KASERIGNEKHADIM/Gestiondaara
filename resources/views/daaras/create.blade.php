@extends('layouts.master')
@extends('dashboard')
@section('contenue')
    <form action="{{ url('daaras') }}" method="post">
        @csrf

        <a href={{ url('daaras') }}>Listes des daaras</a>
        <div class="col-md-12 mx-auto shadow p-4">
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Nom du daara: </label>
                    <input type="text" class="form-control" name="nom" id="nom">
                </div>
                <div class="col">
                    <label for="" class="form-label">Capacite :</label>
                    <input type="text" class="form-control" name="capacite" id="capacite">
                </div>
                <div class="col">
                    <label for="" class="form-label">Adresse :</label>
                <input type="text" class="form-control" name="adresse" id="adresse">
                </div>
                <div class="col">
                    <label for="" class="form-label">Telephone :</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" >
                </div>
            </div> <br>
            <div>
            <button type="" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
@endsection
