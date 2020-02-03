 <?php $data['judul'] = 'Manage Jurusan' ?>
<?php $data['judulkon'] = 'Manage Jurusan' ?>
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
                      <div class="row">
                        <div class="col-8">
                          <form action="" method="post">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Kode Jurusan</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kode jurusan" name="kode_jurusan" value="<?= $jurusan['kode_jurusan'] ?>">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('kode_jurusan') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Mapel</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Jurusan" name="nama_jurusan" value="<?= $jurusan['nama_jurusan'] ?>">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama_jurusan') ?></small>
                              </div>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="<?= base_url(); ?>ManageJurusan" class="btn btn-primary">Kembali</a>
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
  


