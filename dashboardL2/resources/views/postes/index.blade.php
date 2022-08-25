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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>$320,800</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>$170,750</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>$86,000</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>$433,060</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>$162,700</td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection