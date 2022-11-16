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
                        <h2 class="text-dark font-weight-bold mb-2">Véhicules</h2>
                        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                            <button type="button" class="btn btn-primary btn-icon-text">
                                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Ajouter un engin </button>
                        </div>



                    </div>




                    <div class="page-header">

                    </div>
                    <div class="row">




                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Véhicules enregistrés</h4>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Identifiant </th>
                                                <th> Type de transport </th>
                                                <th> Nombre de place naximale </th>

                                                <th> Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> BUS78-89 </td>
                                                <td> Bus </td>
                                                <td> 23 </td>

                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> PLANE78-89 </td>
                                                <td> Pick-up </td>
                                                <td> 7 </td>

                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> PICKUP78-89 </td>
                                                <td> Hélicoptère </td>
                                                <td> 3 </td>

                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row" id="proBanner">
                        <div class="col-12">

                        </div>
                    </div>

                    <div class="d-xl-flex justify-content-between align-items-start">
                        <h2 class="text-dark font-weight-bold mb-2">Sites</h2>
                        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                            <button type="button" class="btn btn-primary btn-icon-text">
                                <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Ajouter un site </button>
                        </div>



                    </div>




                    <div class="page-header">

                    </div>
                    <div class="row">




                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sites de destination</h4>

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Libellé </th>
                                                <th> Adresse </th>


                                                <th> Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> 1 </td>
                                                <td> Essakane Ouahigouya </td>
                                                <td> Nord Ouahigouya </td>


                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

                                            </tr>
                                            <tr>
                                                <td> 2 </td>
                                                <td> Mine de Perkouan Réo </td>
                                                <td> Koudougou </td>


                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

                                            </tr>
                                            <tr>
                                                <td> 3 </td>
                                                <td> IAM Gold </td>
                                                <td> Sanmatenga kaya </td>


                                                <td><button type="button" class="btn btn-outline-secondary btn-sm">Supprimer</button> <button type="button" class="btn btn-outline-secondary btn-sm">Modifier</button></td>

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