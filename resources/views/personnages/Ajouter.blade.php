@extends('layouts.master')
@section('title','Home')
@section('content')
<form style="width: 50vw" method="POST" action="{{Route('personnages.store')}}">
    @csrf
    <h1>Ajouter Personne</h1>
    <br/>
    <div class="mb-3">
      <input type="text" name="nom" value="{{old('nom')}}" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom">
      @error('nom')
        <div class="form-text text-danger">{{$message}}</div>
     @enderror
    </div>
    <div class="row">
        <div class="col">
          <input type="text" name="company" value="{{old('company')}}" class="form-control @error('company') is-invalid @enderror" placeholder="Company">
          @error('company')
          <div class="form-text text-danger">{{$message}}</div>
       @enderror
        </div>
        <div class="col">
          <input type="text" class="form-control @error('fortune') is-invalid @enderror" name="fortune" value="{{old('fortune')}}" placeholder="Fortune">
          @error('fortune')
          <div class="form-text text-danger">{{$message}}</div>
       @enderror
        </div>
      </div>
      <br>
    <div class="form-group">
        <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" value="{{old('detail')}}" placeholder="Detail" rows="3"></textarea>
        @error('detail')
        <div class="form-text text-danger">{{$message}}</div>
     @enderror
    </div>
      <br>
    <button type="submit" class="btn btn-primary form-control">Submit</button>
  </form>
@endsection
