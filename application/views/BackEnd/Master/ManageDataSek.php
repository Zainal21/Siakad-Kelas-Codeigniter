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
                  
                  <div class="card-text text-center pt-2 mt-2">
                    <h2 class="">Data Sekolah</h2>
                  </div>
                    <div class="card-body">
                        <div class="container ">
                        <div class="row">
                          <div class="col-6">
                            <?= form_open('ManageDatasekolah'); ?>
                              <div class="form-grup mt-4">
                                <label for="">Nama Sekolah</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-grup mt-4">
                                <label for="">Alamat Sekolah</label>
                                <input type="text" class="form-control">
                              </div>
                              <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kode Jurusan</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kode_jurusan">
                                            <option value="TK/PAUD">TK/PAUD</option>
                                            <option value="SD/MI">SD/MI</option>
                                            <option value="SMP/SLTP">SMP/SLTP</option>
                                            <option value="SMK/SMA/SLTA">SMK/SMA/SLTA</option>
                                    </select>
                                  </div>
                                  <a href="<?= base_url(); ?>ManageDataSekolah/TambahData" class="btn btn-info float-left ml-1"><i class="fas fa-edit"></i> Ubah</a>
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
  


