@extends('blank')

@section('main-content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-subleft">
      <div class="pd-10">
        <a href="#" class="btn btn-teal bd-0 btn-compose"><i class="icon ion-ios-compose-outline"></i> Upload Files</a>
      </div>

      <nav class="nav br-nav-mailbox flex-column">
        <a href="#" class="nav-link"><i class="icon ion-ios-folder-outline"></i> New Folder</a>
        <a href="#" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Share Folder</a>
        <a href="#" class="nav-link"><i class="icon ion-ios-trash-outline"></i> Deleted Files</a>
      </nav>

      <h6 class="tx-uppercase tx-10 mg-t-40 pd-x-10 bd-b pd-b-10 tx-roboto tx-white-7">My Folder</h6>

      <nav class="nav br-nav-mailbox flex-column">
        <a href="#" class="nav-link"><i class="icon ion-ios-folder-outline"></i> Camera Uploads</a>
        <a href="#" class="nav-link"><i class="icon ion-ios-folder-outline"></i> My Collections</a>
        <a href="#" class="nav-link"><i class="icon ion-ios-folder-outline"></i> E-Book</a>
      </nav>
    </div><!-- br-subleft -->

    <div class="br-contentpanel">
      <div class="br-pageheader pd-y-15 pd-md-l-20">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index-2.html">Bracket</a>
          <a class="breadcrumb-item" href="pages.html">Pages</a>
          <span class="breadcrumb-item active">Asset Manager</span>
        </nav>
      </div><!-- br-pageheader -->

      <div class="br-pagetitle">
        <i class="icon ion-ios-filing-outline"></i>
        <div>
          <h4>Asset Manager</h4>
          <p class="mg-b-0">This is the file manager where you can manage files into different types of files.</p>
        </div>
      </div><!-- d-flex -->

      <div class="d-flex align-items-center justify-content-start pd-x-20 pd-sm-x-30 pd-t-25 mg-b-20 mg-sm-b-30">

        <button id="showSubLeft" class="btn btn-secondary mg-r-10 hidden-lg-up"><i class="fa fa-navicon"></i></button>

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown hidden-sm-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown"><i class="icon ion-more"></i></a>
          <div class="dropdown-menu pd-10">
            <nav class="nav nav-style-1 flex-column">
              <a href="#" class="nav-link">Share</a>
              <a href="#" class="nav-link">Download</a>
              <div class="dropdown-divider"></div>
              <a href="#" class="nav-link">Edit</a>
              <a href="#" class="nav-link">Delete</a>
            </nav>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <!-- END: DISPLAYED FOR MOBILE ONLY -->

        <div class="btn-group hidden-xs-down">
          <a href="#" class="btn btn-outline-info">Share</a>
          <a href="#" class="btn btn-outline-info">Download</a>
        </div><!-- btn-group -->
        <div class="btn-group mg-l-10 hidden-xs-down">
          <a href="#" class="btn btn-outline-info">Edit</a>
          <a href="#" class="btn btn-outline-info">Delete</a>
        </div><!-- btn-group -->

        <div class="btn-group mg-l-auto hidden-sm-down">
          <a href="#" class="btn btn-outline-info active">All</a>
          <a href="#" class="btn btn-outline-info">Images</a>
          <a href="#" class="btn btn-outline-info">Videos</a>
          <a href="#" class="btn btn-outline-info">Documents</a>
          <a href="#" class="btn btn-outline-info">Audio</a>
        </div><!-- btn-group -->

        <!-- START: DISPLAYED FOR MOBILE ONLY -->
        <div class="dropdown mg-l-auto hidden-md-up">
          <a href="#" class="btn btn-outline-secondary" data-toggle="dropdown">All <i class="fa fa-angle-down mg-l-5"></i></a>
          <div class="dropdown-menu dropdown-menu-right pd-10">
            <nav class="nav nav-style-1 flex-column">
              <a href="#" class="nav-link">All</a>
              <a href="#" class="nav-link">Images</a>
              <a href="#" class="nav-link">Videos</a>
              <a href="#" class="nav-link">Documents</a>
              <a href="#" class="nav-link">Audio</a>
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
                <th class="tx-10-force tx-mont tx-medium">Name</th>
                <th class="tx-10-force tx-mont tx-medium hidden-xs-down">Modified</th>
                <th class="wd-5p"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Camera Uploads</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">My Collections</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">E-Book</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="far fa-file-pdf tx-22 tx-danger lh-0 valign-middle"></i>
                  <span class="pd-l-5">MyResume.pdf</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 7:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <img src="../img/img18.jpg" class="wd-20" alt="">
                  <span class="pd-l-5">23424343.jpg</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 7:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Illustrations</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="icon ion-ios-folder-outline tx-24 tx-warning lh-0 valign-middle"></i>
                  <span class="pd-l-5">Movies</span>
                </td>
                <td class="hidden-xs-down">---</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">InTheEnd.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 3:20am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">Symphony.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 5:51am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
              <tr>
                <td class="valign-middle">
                  <label class="ckbox mg-b-0">
                    <input type="checkbox"><span></span>
                  </label>
                </td>
                <td>
                  <i class="fa fa-file-audio-o tx-22 tx-primary lh-0 valign-middle"></i>
                  <span class="pd-l-5">Clarity.mp3</span>
                </td>
                <td class="hidden-xs-down">10/11/2017 8:22am</td>
                <td class="dropdown">
                  <a href="#" data-toggle="dropdown" class="btn pd-y-3 tx-gray-500 hover-info"><i class="icon ion-more"></i></a>
                  <div class="dropdown-menu dropdown-menu-right pd-10">
                    <nav class="nav nav-style-1 flex-column">
                      <a href="#" class="nav-link">Info</a>
                      <a href="#" class="nav-link">Download</a>
                      <a href="#" class="nav-link">Rename</a>
                      <a href="#" class="nav-link">Move</a>
                      <a href="#" class="nav-link">Copy</a>
                      <a href="#" class="nav-link">Delete</a>
                    </nav>
                  </div><!-- dropdown-menu -->
                </td>
              </tr>
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

@endsection