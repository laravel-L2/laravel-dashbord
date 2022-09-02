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
                        <th style="width:70px;">Domaine</th>
                        <th>Date d'ajout</th>
                        <th style="width:300px;">A propos du poste</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($postes as $poste)
                    <tr>
                        <th scope="row">{{++$numero}}</th>
                        <td>{{ $poste->titre}} </td>
                        <td style="width:70px;">{{$poste->department}}</td>
                        <td class="">{{$poste->add_poste_date}}</td>
                        <td style="width:300px;">{{$poste->description}}</td>
                        <td>
                            <a href="javascript:void(0)" class="btn btn-info btn-icon editOnePoste" data-toggle="modal" data-target="#edit" data-posteedit="{{ $poste }}">
                                <div>
                                    <i class="icon ion-edit"></i>
                                </div>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-icon deleteOnePoste" data-poste="{{ $poste }}">
                                <div>
                                    <i class="=icon ion-trash-a"></i>
                                </div>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
    </div>
</div>


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
                <form id="form_edit">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control mt-2" id="idPoste" name="idPoste" type="text" value="" hidden>
                                <input class="form-control mt-2" id="titre" name="titre" placeholder="Entrez le nouveau titre du poste" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control mt-2"  id="date" name="date" placeholder="Date d'ajout du poste" type="text" value="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input class="form-control mt-2" id="department" name="departement" placeholder="Entrer le nouveau département" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control mt-2" id="description" name="description" placeholder="Entrer le nouveau description" type="text" value="">
                            </div>
                        </div>
                    </div>
                    <button type="button" id="submit_edit" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                        Confirmer la modification
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--FIN MODAL EDIT -->
@endsection