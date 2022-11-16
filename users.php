<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>VBS-MINING-TRANSIT</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="components/modal-style.css" class="rel">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <?php include('components/header.php'); ?>
    <div class="container-fluid page-body-wrapper">
      <?php include('components/sidebar.php'); ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12">

            </div>
          </div>

          <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2">UTILISATEURS</h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

              <button id="idDriverBtn" type="button" class="btn btn-primary btn-icon-text">
                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Ajouter un Chauffeur </button>
            </div>


            <script>
              // Get the button that opens the modal
              var btn = document.getElementById("idDriverBtn");



              // When the user clicks the button, open the modal 
              btn.onclick = function() {

              }
            </script>
          </div>




          <div class="page-header">

          </div>
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Chauffeurs enregistrés</h4>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> Numéro matricule </th>
                        <th> Nom et Prénom </th>
                        <th> Adresse email </th>
                        <th> Numéro de téléphone </th>
                        <th> Action </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> MR5679390 </td>
                        <td> Herman Beck </td>
                        <td> johndoe@gmail.com </td>
                        <td> +226 74-57-81-96 </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Editer</button></td>

                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> MR5679390 </td>
                        <td> Messsy Adam </td>
                        <td> johndoe@gmail.com </td>
                        <td> +226 74-57-81-96 </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Editer</button></td>

                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> MR5679390 </td>
                        <td> John Richards </td>
                        <td> johndoe@gmail.com </td>
                        <td> +226 74-57-81-96 </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Editer</button></td>

                      </tr>


                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employés enregistrés</h4>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> Numéro matricule </th>
                        <th> Nom et Prénom </th>
                        <th> Adresse email </th>
                        <th> Action </th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> MR5679390 </td>
                        <td> Herman Beck </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> MR5679390 </td>
                        <td> Messsy Adam </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> MR5679390 </td>
                        <td> John Richards </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 4 </td>
                        <td> MR5679390 </td>
                        <td> Peter Meggik </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 5 </td>
                        <td> MR5679390 </td>
                        <td> Edward </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 6 </td>
                        <td> MR5679390 </td>
                        <td> John Doe </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                      <tr>
                        <td> 7 </td>
                        <td> MR5679390 </td>
                        <td> Henry Tom </td>
                        <td> johndoe@gmail.com </td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button></td>

                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>



          </div>
        </div>


        <?php

        include('components/footer.php');
        ?>

      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->

  <script src="components/modal_actions.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>

  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>