<?php $data['judul'] = 'Manage Guru' ?>
<?php $data['judulkon'] = 'Manage Guru' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent', $data); ?>
<?php $this->load->view('StructureView/Sidebar'); ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <a href="" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Data</a>
                         <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                      <tr>
                                          <th>Kode Mapel</th>
                                          <th>Nama Mapel</th>
                                          <th>Manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                    <?php foreach($mapel as $mpl) { ?>
                                     <tr>
                                          <td><?= $mpl['kode_mapel'] ?></td>
                                          <td><?= $mpl['nama_mapel'] ?></td>
                                          <td><a href="" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="" class="btn btn-md btn-danger ml-2"><i class="fas fa-trash"></i></a></td>
                                      </tr>
                                      <?php } ?>
                                  </tbody>
                      </table> 
                </div>
                </div>
                    
               </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php $this->load->view('StructureView/Footer'); ?>
  


