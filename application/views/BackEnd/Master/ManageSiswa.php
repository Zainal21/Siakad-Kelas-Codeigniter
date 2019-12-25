 <?php $data['judul'] = 'Manage Siswa' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent'); ?>
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
                         <table id="example1" class="table table-bordered ">
                                <thead>
                                      <tr>
                                          <th>NIP</th>
                                          <th>Nama</th>
                                          <th>Kode Mapel</th>
                                          <th>Kode Jurusan</th>
                                          <th>manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                    
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
  


