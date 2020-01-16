 <?php $data['judul'] = 'Manage Mapel' ?>
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
                      <div class="row">
                        <div class="col-8">
                          <form action="<?= base_url(); ?>ManageMapel/Tambah" method="post">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Kode Jurusan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Kode mapel" name="kode_mapel">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('kode_jurusan') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Jurusan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Mapel" name="nama_mapel">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama_jurusan') ?></small>
                              </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url(); ?>ManageMapel" class="btn btn-primary">Kembali</a>
                            </form>
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
  


