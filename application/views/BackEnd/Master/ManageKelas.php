<?php $data['judul'] = 'Manage Kelas' ?>
<?php $data['judulkon'] = 'Manage Kelas' ?>
<?php $this->load->view('StructureView/Header', $data); ?>
<?php $this->load->view('StructureView/HeaderContent', $data); ?>
<?php $this->load->view('StructureView/Sidebar'); ?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('Data'); ?>"></div>
          
              <div class="row">
                <div class="col">
                  <div class="card">
                   <div class="card">
                  <div class="card-text text-center pt-2 mt-2">
                    <h2 class="">Data Kelas</h2>
                  </div>
                    <div class="card-body">
                      <a href="<?= base_url(); ?>ManageKelas/Tambah" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Data</a>
                         <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                      <tr>
                                          <th>Kode Kelas</th>
                                          <th>Kelas</th>
                                          <th>Jurusan</th>
                                          <th>Manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                    <?php foreach($kelas as $kls) { ?>
                                     <tr>
                                          <td><?= $kls['kode_kelas'] ?></td>
                                          <td><?= $kls['nama_kelas'] ?></td>
                                          <td><?= $kls['nama_jurusan'] ?></td>
                                          <td><a href="<?= base_url(); ?>ManageKelas/Ubah/<?= $kls['kode_kelas'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="<?= base_url(); ?>ManageKelas/Hapus/<?= $kls['kode_kelas'] ?>" class="btn btn-md btn-danger ml-2"><i class="fas fa-trash"></i></a></td>
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
      title: 'Data Kelas',
      text : 'Berhasil ' + flashdata,
      type :'success'
  });
}

</script>
  


