@extends('blank')

@section('page-title', 'Nouveau tâche');
@section('page-description', 'Vous pouvez ajouter ici les nouveaux tâches dans l\'entreprise');

@section('main-content')

<div class="br-pagebody my-3">
    <div class="br-section-wrapper">
      <h4 class="br-section-label">Formulaire d'ajout nouveau tâche</h4>
      <p class="br-section-text">Remplissez les informations suivantes</p>

      <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <input class="form-control mt-2 @error('titre') is-invalid @enderror" name="titre" placeholder="Entrez le titre du tâche" type="text">
                <input class="form-control mt-2 @error('date') is-invalid @enderror" name="add_tache_date" placeholder="Date d'ajout du tâche" type="text">
            </div>
            <div class="col-lg-6">
                <input class="form-control mt-2 @error('departement') is-invalid @enderror" name="department" placeholder="Entrez le departement" type="text">
                <input class="form-control mt-2 @error('description') is-invalid @enderror" name="description" placeholder="Description du tâche" type="text">
            </div>
        </div>
        <div class="row mt-2 justify-content-center">
            <button type="submit" class="btn btn-success">Ajouter cette tâche</button>
        </div>
     </form>
    </div>
</div>

@endsection