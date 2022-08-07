<?php 
    echo view_header($data);
    getModal('modalEstudiantes', $data);
?>
<main class="app-content">
    <div class="app-title">
    <div>
        <h1><i class="fa fa-users"></i> <?php echo $data['page_title']?></h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li> 
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>estudiantes">Estudiantes </a></li>
    </ul>
    </div>
    <div class="row">
    <div class="col-md-12">
    <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Estudiantes</h3>
                <button type="button" class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalEstudiante">
                    <i class="fa fa-plus"></i> Nuevo
                </button>
            </div>
            <div class="tile-body">
            <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
            </div>
          </div>
    </div>
    </div>
</main>


<?php echo view_footer($data)?>