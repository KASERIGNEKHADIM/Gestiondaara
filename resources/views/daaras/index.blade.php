@extends('layouts.master')
@section('contenue')
<table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NOM</th>
        <th scope="col">CAPACITE</th>
        <th scope="col">ADRESSE</th>
        <th scope="col">TELEPHONE</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($daaras as $d)
        <tr>
            <th scope="row">{{$d->id}}</th>
           <td>{{$d->nom}}</td>
            <td>{{$d->capacite}}</td>
            <td>{{$d->adresse}}</td>
            <td>{{$d->telephone}}</td>
            <td class="btn-group ">
                <a href="{{url('daaras/' .$d->id)}}" class="btn btn-primary"><i class="fa-regular fa-eye" ></i></a>
                <a action="{{url('daaras/'.$d->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                <a href="{{ route('daaras.edit',$d->id) }}" class="btn btn-warning"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
