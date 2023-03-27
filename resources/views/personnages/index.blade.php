@extends('layouts.master')
@section('title','Home')
@section('content')
            <div class="w100 d-flex justify-content-between align-items-center">
                <h1>Tutriel Laravel 9 CRUD</h1>
                <a href="{{Route('personnages.add')}}" class="btn btn-success">Ajouter</a>
            </div>
            <hr>
            @if (session('secces'))
                <div class="alert alert-success">
                    {{ session('secces') }}
                </div>
            @endif
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Company</th>
                    <th scope="col">Fortune</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($personnages as $key=>$personne)
                 <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$personne->nom}}</td>
                    <td>{{$personne->detail}}</td>
                    <td>{{$personne->company}}</td>
                    <td>{{$personne->fortune}}</td>
                    <td class="d-flex gap-2">
                        <a href="{{Route('personnages.show',$personne->id)}}" class="btn btn-info btn-sm">Voir</a>
                        <a href="{{Route('personnages.edit',$personne->id)}}" class="btn btn-primary btn-sm">Modifier</a>
                        <form action="{{Route('personnages.delete',$personne->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Suppprimer</button>
                        </form>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>

@endsection
