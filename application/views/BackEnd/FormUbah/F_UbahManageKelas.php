 <?php $data['judul'] = 'Manage Kelas' ?>
<?php $data['judulkon'] = 'Manage Kelas' ?>
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
                                <label for="exampleFormControlInput1">Kode Kelas</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="kode Kelas" name="kode_kelas" value="<?= $kelas['kode_kelas'] ?>">
                                 <small id="emailHelp" class="form-text text-danger "><?= form_error('kode_kelas') ?></small>
                              </div>     
                              <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Kelas</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama kelas" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                                  <small id="emailHelp" class="form-text text-danger "><?= form_error('nama_kelas') ?></small>
                              </div>
                                 <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kode Jurusan</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kode_jurusan">
                                    <?php foreach($jurusan as $j) { ?>
                                        <?php if($j == $j['kode_jurusan']) : ?>
                                            <option value="<?= $j['kode_jurusan'] ?>" selected><?= $j['kode_jurusan']?></option>
                                        <?php else : ?>
                                            <option value="<?= $j['kode_jurusan'] ?>"><?= $j['kode_jurusan']?></option>
                                        <?php endif ?>
                                      <?php } ?>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                                <a href="<?= base_url(); ?>ManageKelas" class="btn btn-primary">Kembali</a>
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
  


