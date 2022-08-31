@extends('blank')


    <!-- ########## START: MAIN PANEL ########## -->


    <div class="br-contentpanel">
      <div class="br-pageheader pd-y-15 pd-md-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index-2.html">Entreprise</a>
          <a class="breadcrumb-item" href="pages.html">Pages</a>
          <span class="breadcrumb-item active">Congés</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="br-pagetitle">
        <i class="icon ion-ios-filing-outline"></i>
        <div>
          <h4>Gestion des congés</h4>
          <p class="mg-b-0">Cette page regroupe les demandes de congé des employées de l'entreprise.</p>
        </div>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

        <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i class="fa fa-navicon"></i></button>

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown hidden-sm-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
          <div class="dropdown-menu pd-10">
            <nav class="nav nav-style-1 flex-column">
              <a href="#" class="nav-link">Tout validé</a>
              <a href="#" class="nav-link">Tout refusé</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="nav-link">Supprimer</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

        <div class="btn-group hidden-xs-down">
          <a href="#" class="btn btn-outline-info">Tout validé</a>
          <a href="#" class="btn btn-outline-info">Tout refusé</a>
        </div><!-- btn-group -->
        <div class="btn-group mg-l-10 hidden-xs-down">
          <a href="#" class="btn btn-outline-info">Supprimer</a>
      
        </div><!-- btn-group -->

        <div class="btn-group mg-l-auto hidden-sm-down">
          <a href="#" class="btn btn-outline-info active">Tout</a>
          <a href="#" class="btn btn-outline-info">Validés</a>
          <a href="#" class="btn btn-outline-info">Refusés</a>
          <a href="#" class="btn btn-outline-info">En attente</a>
          
        </div><!-- btn-group -->

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown mg-l-auto hidden-md-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown">Tout <i class="fa fa-angle-down mg-l-5"></i></a>
          <div class="dropdown-menu dropdown-menu-right pd-10">
            <nav class="nav nav-style-1 flex-column">
          <a href="#" class="btn btn-outline-info active">Tout</a>
          <a href="#" class="btn btn-outline-info">Validés</a>
          <a href="#" class="btn btn-outline-info">Refusés</a>
          <a href="#" class="btn btn-outline-info">En attente</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

      </div><!-- d-flex -->

      <div class="br-pagebody pd-x-20 pd-sm-x-30">
        <div class="card bd-0 shadow-base">
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th class="wd-5p">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </th>
                <th class="tx-10-force tx-mont tx-medium">Nom</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Date</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Motif</th>
                <th class="wd-5p"></th>
              </tr>
            </thead>
            <tbody>
            @foreach ($conges as $conge)
            <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-person-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">{{$conge->nom_employe}}</span>
                </td>
                <td class="hidden-xs-down">{{$conge->date_demande}}</td>
                <td class="hidden-xs-down">{{$conge->motif}}</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Valider</a>
                      <a href="#" class="nav-link">Refuser</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div><!-- br-pagebody -->
      <footer class="br-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Bracket Plus. All Rights Reserved.</div>
          <div>Attentively and carefully made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- br-contentpanel -->



    <!-- ########## END: MAIN PANEL ########## -->

<!-- Why i'm so good at coding ? -->
