 <?php $data['judul'] = 'Manage Guru' ?>
<?php $data['judulkon'] = 'Manage Guru' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent', $data); ?>
<?php $this->load->view('StructureView/Sidebar'); ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        
        </div>
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-8">
                          <form action="" method="post">
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Form Edit</label>
                                <input type="hidden" class="form-control" id="exampleFormControlInput1" placeholder="NIP" name="nip" value="<?= $guru['nip'] ?>">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('nip') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Guru</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama Guru" name="nama" value="<?= $guru['nama'] ?>">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama') ?></small>
                              </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kode Mapel</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kode_mapel">
                                    <?php foreach($mapel as $m) { ?>
                                        <?php if($m == $m['kode_mapel']) : ?>
                                      <option value="<?= $m['kode_mapel'] ?>" selected><?= $m['kode_mapel']?></option>
                                      <?php else : ?>
                                        <option value="<?= $m['kode_mapel'] ?>"><?= $m['kode_mapel']?></option>
                                        <?php endif ?>
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
                                <button type="submit" class="btn btn-primary">Ubah</button>
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
  


