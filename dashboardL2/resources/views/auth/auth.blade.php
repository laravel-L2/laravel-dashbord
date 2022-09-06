<!-- ======================== TEMPLATE AUTHENTIFICATION ========================= -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRM - Entreprise</title>
    <link href="./css/all.min.css" rel="stylesheet">
    <link href="./css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/bracket.css">
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-center ht-100v">
      <video id="headVideo" class="pos-absolute a-0 wd-100p ht-100p
        object-fit-cover" autoplay muted loop>
        <source src="./videos/video1.mp4" type="video/mp4">
        <source src="./videos/video1.ogv" type="video/ogg">
        <source src="./videos/video1.webm" type="video/webm">
      </video>

      <div class="overlay-body bg-black-7 d-flex align-items-center justify-content-center">
        <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded bg-black-6">
          <div class="signin-logo tx-center tx-28 tx-bold tx-white"><span class="tx-normal">[</span> 
          CRM <span class="tx-info">Entreprise</span> <span class="tx-normal">]</span></div>
          <div class="tx-white-5 tx-center mg-b-60">
            === Identification ===
          </div>

          <!-- ===================== SECTION =================== -->
          <div id="page_section"></div>
          <!-- ==================================================== -->

        </div>
      </div>
    </div>

    <!-- =================== MODAL =================== -->
    <div class="modal fade" tabindex="-1" id="modal_message"
      role="dialog" aria-labelledby="mySmallModalLabel" 
      aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-body font-weight-bold 
            text-danger text-center" 
            id="messages"></div>
        </div>
      </div>
    </div>
    <!-- ============================================= -->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/datepicker.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/auth.js"></script>
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>
  </body>
</html>
