@extends('blank')

@section('page-title', 'Liste poste')
@section('page-description', 'Liste des postes dans l\'entreprise')

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <h6 class="br-section-label">Liste de tous les postes</h6>
        <p class="br-section-text">Vous pouvez visualiser ici tous les postes présents dans l'entreprise</p>

        <div class="bd bd-gray-300 rounded table-responsive">
            <table class="table mg-b-0">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Nom du poste</th>
                    <th>Domaine</th>
                    <th>Nombre d'employée</th>
                    <th>Date d'ajout</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Developpeur</td>
                    <td>Informatique</td>
                    <td class="text-center">10</td>
                    <td class="">24 Août 2022</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon" data-toggle="modal" data-target="#edit">
                            <div>
                                <i class="icon ion-edit"></i>
                            </div>
                        </a>
                        <a href="#" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#delete">
                            <div>
                                <i class="=icon ion-trash-a"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Comptabilité</td>
                    <td>Gestion & Finance</td>
                    <td class="text-center">3</td>
                    <td class="">24 Août 2022</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon" data-toggle="modal" data-target="#edit">
                            <div>
                                <i class="icon ion-edit"></i>
                            </div>
                        </a>
                        <a href="#" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#delete">
                            <div>
                                <i class="=icon ion-trash-a"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Administration système & réseau</td>
                    <td>Informatique</td>
                    <td class="text-center">5</td>
                    <td class="">24 Août 2022</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon" data-toggle="modal" data-target="#edit">
                            <div>
                                <i class="icon ion-edit"></i>
                            </div>
                        </a>
                        <a href="#" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#delete">
                            <div>
                                <i class="=icon ion-trash-a"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Ressources Humaine</td>
                    <td>Administration</td>
                    <td class="text-center">6</td>
                    <td class="">24 Août 2022</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon" data-toggle="modal" data-target="#edit">
                            <div>
                                <i class="icon ion-edit"></i>
                            </div>
                        </a>
                        <a href="#" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#delete">
                            <div>
                                <i class="=icon ion-trash-a"></i>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Call center</td>
                    <td>Call center</td>
                    <td class="text-center">2</td>
                    <td class="">24 Août 2022</td>
                    <td>
                        <a href="#" class="btn btn-info btn-icon" data-toggle="modal" data-target="#edit">
                            <div>
                                <i class="icon ion-edit"></i>
                            </div>
                        </a>
                        <a href="#" class="btn btn-danger btn-icon" data-toggle="modal" data-target="#delete">
                            <div>
                                <i class="=icon ion-trash-a"></i>
                            </div>
                        </a>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>


<!-- MODAL DELETE -->
<div id="delete" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-body tx-center pd-y-20 pd-x-20">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <i class="icon ion-trash-b tx-100 tx-danger lh-1 mg-t-20 d-inline-block"></i>
            <h4 class="tx-danger  tx-semibold mg-b-20">Confirmation de suppression</h4>
            <p class="mg-b-20 mg-x-20">Vous voulez vraiment supprimer ce poste ?</p>
            <button type="button" class="btn btn-danger tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                Confirmer suppression
            </button>
        </div>
        </div>
    </div>
</div>
<!--FIN MODAL DELETE -->

<!--MODAL EDIT -->
<div id="edit" class="modal fade">
    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <i class="icon ion-edit tx-100 tx-info lh-1 mg-t-20 d-inline-block"></i>
                <h4 class="tx-info  tx-semibold mg-b-20">Modification du poste : </h4>
                <form action="{{ route('clients.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control mt-2 @error('titre') is-invalid @enderror" name="titre" placeholder="Entrez le nouveau titre du poste" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control mt-2 @error('date') is-invalid @enderror" name="date" placeholder="Date d'ajout du poste" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control mt-2 @error('departement') is-invalid @enderror" name="departement" placeholder="Entrer le nouveau département" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control mt-2 @error('description') is-invalid @enderror" name="description" placeholder="Entrer le nouveau description" type="text">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                        Confirmer la modification
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--FIN MODAL EDIT -->
@endsection