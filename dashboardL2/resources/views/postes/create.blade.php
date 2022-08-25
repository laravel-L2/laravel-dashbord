@extends('blank')

@section('page-title', 'Nouveau poste');
@section('page-description', 'Vous pouvez ajouter ici les nouveaux postes dans l\'entreprise');

@section('main-content')

<div class="br-pagebody my-3">
    <div class="br-section-wrapper">
      <h4 class="br-section-label">Formulaire d'ajout nouveau Poste</h4>
      <p class="br-section-text">Remplissez les informations suivantes</p>

      <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <input class="form-control mt-2 @error('titre') is-invalid @enderror" name="nom" placeholder="Entrez le titre du poste" type="text">
                <input class="form-control mt-2 @error('departement') is-invalid @enderror" name="nom" placeholder="Entrez le departement" type="text">
            </div>
            <div class="col-lg-6">
                <input class="form-control mt-2 @error('lieu') is-invalid @enderror" name="nom" placeholder="Entrez le lieu de travail (facultatif)" type="text">
                <input class="form-control mt-2 @error('date') is-invalid @enderror" name="nom" placeholder="Date d'ajout du poste" type="text">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <input class="form-control mt-2 @error('description') is-invalid @enderror" name="nom" placeholder="Description du poste" type="text">
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <button type="submit" class="btn btn-success">Ajouter cette poste</button>
        </div>
     </form>
    </div>
</div>

@endsection