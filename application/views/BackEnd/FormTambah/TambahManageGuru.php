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
                  <!-- <div class="card-titte m-4">
                    <h2 class="mb-2 text-center">Tambah Data Guru</h3>
                  </div> -->
                    <div class="card-body">
                      <div class="row">
                      
                      <h1 class= "text-center">Form Tambah Data Guru</h1>
                    
                        <div class="col-8">
                          <form action="<?= base_url(); ?>ManageGuru/TambahData" method="post">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">NIP</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NIP" name="nip">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('nip') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Guru</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Guru" name="nama">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama') ?></small>
                              </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kode Mapel</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kode_mapel">
                                    <?php foreach($mapel as $m) { ?>
                                      <option value="<?= $m['kode_mapel'] ?>"><?= $m['kode_mapel']?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kode Jurusan</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kode_jurusan">
                                    <?php foreach($jurusan as $j) { ?>
                                      <option value="<?= $j['kode_jurusan'] ?>"><?= $j['kode_jurusan']?></option>
                                      <?php } ?>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                                <a href="<?= base_url(); ?>ManageGuru" class="btn btn-primary">Kembali</a>
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
  


