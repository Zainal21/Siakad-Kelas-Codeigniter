 <?php $data['judul'] = 'Manage Sekolah' ?>
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
                        <a href="<?= base_url(); ?>ManageDataSekolah/TambahData" class="btn btn-info float-left ml-3"><i class="fas fa-edit"></i> Ubah</a>
                        <div class="container mt-5">
                        <div class="row">
                          <div class="col-8">
                            <?= form_open('ManageDatasekolah'); ?>
                              <div class="form-grup mt-4">
                                <label for="">Nama Sekolah</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-grup mt-4">
                                <label for="">Alamat Sekolah</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-grup mt-4">
                                <label for="">Jenjang Sekolah</label>
                                <input type="text" class="form-control">
                              </div>
                           <?= form_close() ?>
                          </div>
                          
                         </div>
                        </div>
                 </div>
                    
               </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php $this->load->view('StructureView/Footer'); ?>
  


