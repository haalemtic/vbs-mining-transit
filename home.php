<div class="container-scroller">

    <?php
    include('components/header.php');
    ?>
    <div class="container-fluid page-body-wrapper">
      <?php

      include('components/sidebar.php'); ?>

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12">

            </div>
          </div>
          <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> DASHBOARD-PROGRAMME-DE-VOYAGE </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

              <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                <button id=" " type="button" class="btn btn-primary btn-icon-text">
                  <i class="mdi mdi-plus-circle btn-icon-prepend"></i> Ajouter un nouveau départ </button>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                <ul class="nav nav-tabs tab-transparent" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Semaine 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Semaine 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Semaine 3</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Semaine 4</a>
                  </li>
                </ul>
                <div class="d-md-block d-none">
                  <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                  <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                </div>
              </div>
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Places disponibles</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">18/25</h2>
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-truck icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0"> Départ: 5/09/2022 à 8H-30M </p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">PICKUP356</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Places disponibles</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">3/5</h2>
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-airplane icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Départ: 5/09/2022 à 8H-30M</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">PLANE3600</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Places disponible</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">20/23</h2>
                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-bus icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Départ: 5/09/2022 à 8H-30M</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">BUS457</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Places disponible</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">3/5</h2>
                          <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-car icon-md absolute-center text-dark"></i></div>
                          <p class="mt-4 mb-0">Départ: 5/09/2022 à 8H-30M</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">CAR768</h3>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">




                    <div class="col-lg-12 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-xl-flex justify-content-between align-items-start">
                            <h2 class="text-dark font-weight-bold mb-2">Récentes réservations</h2>
                            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">

                              <button type="button" class="btn btn-success btn-sm">Confirmer tout</button>
                              &nbsp; &nbsp; &nbsp; &nbsp;
                              <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitches">
                                <label class="custom-control-label" for="customSwitches">Confirmer automatiquement</label>
                              </div>
                            </div>



                          </div>
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th> Employé </th>
                                <th> Embarquation </th>
                                <th> Date de réservation </th>
                                <th> Date de départ </th>

                                <th> Action </th>

                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td> Kaboré Moussa </td>
                                <td> BUS575 </td>
                                <td> 28/09/2022 à 12H-30M </td>
                                <td> 28/09/2022 à 12H-30M </td>

                                <td> <button type="button" class="btn btn-outline-success btn-sm">Confirmer</button></td>

                              </tr>
                              <tr>
                                <td> Kaboré Moussa </td>
                                <td> BUS575 </td>
                                <td> 28/09/2022 à 12H-30M </td>
                                <td> 28/09/2022 à 12H-30M </td>

                                <td> <button type="button" class="btn btn-outline-success btn-sm">Confirmer</button></td>

                              </tr>
                              <tr>
                                <td> Kaboré Moussa </td>
                                <td> BUS575 </td>
                                <td> 28/09/2022 à 12H-30M </td>
                                <td> 28/09/2022 à 12H-30M </td>

                                <td> <button type="button" class="btn btn-outline-success btn-sm">Confirmer</button></td>
                              </tr>


                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- content-wrapper ends -->
        <?php

        include('components/footer.php');
        ?>
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>