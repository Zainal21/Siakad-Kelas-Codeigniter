 <?php $data['judul'] = 'Manage Siswa' ?>
<?php $data['judulkon'] = 'Manage Siswa' ?>
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
                         <?= form_open('ManageSiswa/TambahSiswa'); ?>
                          <div class="form-group">
                                <input type="hidden" class="form-control" id="exampleFormControlInput1"  name="id">
                               
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">NIS</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIS" name="nis">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('nis') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Siswa</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Siswa" name="nama">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama') ?></small>
                              </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelas</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                                   <?php foreach($kelas as $sw) { ?>
                                      <option value="<?= $sw['kode_kelas'] ?>"><?= $sw['nama_kelas']; ?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url(); ?>ManageSiswa" class="btn btn-primary">Kembali</a>
                            <?= form_close();?>
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
  


