<<<<<<< HEAD
 <?php $data['judul'] = 'Manage Siswa' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent'); ?>
<?php $this->load->view('StructureView/Sidebar'); ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('Data'); ?>"></div>
      
        
              <div class="row">
                <div class="col">
                  <div class="card">
                  <div class="card-text text-center pt-2 mt-2">
                    <h2 class="">Data Siswa</h2>
                  </div>
                    <div class="card-body">
                      <a href="<?= base_url(); ?>ManageSiswa/TambahSiswa" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Data</a>
                         <table id="example1" class="table table-bordered ">
                                <thead>
                                      <tr>
                                          <th>Nis</th>
                                          <th>Nama</th>
                                          <th>Kelas</th>
                                         
                                          <th>Manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                  <?php foreach($siswa as $sw){ ?>
                                    <tr>
                                      <td><?= $sw['nis']; ?></td>
                                      <td><?= $sw['nama']; ?></td>
                                      <td><?= $sw['nama_kelas']; ?></td>
                                    <td><a href="<?= base_url(); ?>ManageSiswa/Update/<?= $sw['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="<?= base_url(); ?>ManageSiswa/delete/<?= $sw['id'] ?>" class="btn btn-md btn-danger ml-2"><i class="fas fa-trash"></i></a></td>
                                    
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
  
  <script src="<?= base_url(); ?>assest/js/sweetalert2.all.min.js"></script>
<script>
const flashdata = $('.flash-data').data('flashdata');

if(flashdata){
  Swal({
      title: 'Data Siswa',
      text : 'Berhasil ' + flashdata,
      type :'success'
  });
}

  var base = '<?= base_url();?>';


function delete(){
  $.ajax({
    url: base + 'ManageSiswa/Delete',
    dataType: 'json',
    success: function(data){
      console.log(data)
    },
    error:function(){
      console.log('no response');
    }

  });
}

</script>

=======
 <?php $data['judul'] = 'Manage Siswa' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent'); ?>
<?php $this->load->view('StructureView/Sidebar'); ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('Data'); ?>"></div>
      
        
              <div class="row">
                <div class="col">
                  <div class="card">
                  <div class="card-text text-center pt-2 mt-2">
                    <h2 class="">Data Siswa</h2>
                  </div>
                    <div class="card-body">
                      <a href="<?= base_url(); ?>ManageSiswa/TambahSiswa" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Data</a>
                         <table id="example1" class="table table-bordered ">
                                <thead>
                                      <tr>
                                          <th>Nis</th>
                                          <th>Nama</th>
                                          <th>Kelas</th>
                                         
                                          <th>Manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                  <?php foreach($siswa as $sw){ ?>
                                    <tr>
                                      <td><?= $sw['nis']; ?></td>
                                      <td><?= $sw['nama']; ?></td>
                                      <td><?= $sw['nama_kelas']; ?></td>
                                    <td><a href="<?= base_url(); ?>ManageSiswa/Update/<?= $sw['id'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="<?= base_url(); ?>ManageSiswa/delete/<?= $sw['id'] ?>" class="btn btn-md btn-danger ml-2"><i class="fas fa-trash"></i></a></td>
                                    
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
  
  <script src="<?= base_url(); ?>assest/js/sweetalert2.all.min.js"></script>
<script>
const flashdata = $('.flash-data').data('flashdata');

if(flashdata){
  Swal({
      title: 'Data Siswa',
      text : 'Berhasil ' + flashdata,
      type :'success'
  });
}

  var base = '<?= base_url();?>';


function delete(){
  $.ajax({
    url: base + 'ManageSiswa/Delete',
    dataType: 'json',
    success: function(data){
      console.log(data)
    },
    error:function(){
      console.log('no response');
    }

  });
}

</script>

>>>>>>> d218089b615ef190f2762115b1e7cb640c306826
