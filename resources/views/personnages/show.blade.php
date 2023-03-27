@extends('layouts.master')
@section('title','Home')
@section('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$personne->nom}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$personne->company}}</h6>
      <p class="card-text">{{$personne->detail}}</p>

    </div>
  </div>

@endsection
