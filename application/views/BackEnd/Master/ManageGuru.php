<?php $data['judul'] = 'Manage Guru' ?>
<?php $data['judulkon'] = 'Manage Guru' ?>
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
                    <h2 class="">Data Guru</h2>
                  </div>
                    <div class="card-body">
                      <a href="<?= base_url(); ?>ManageGuru/TambahData" class="btn btn-primary float-left"><i class="fas fa-plus"></i> Tambah Data</a>
                         <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                      <tr>
                                          <th>NIP</th>
                                          <th>Nama</th>
                                          <th> Mapel</th>
                                          <th>Jurusan</th>
                                          <th>manage</th>
                                      </tr>
                                <thead>
                                  <tbody>
                                    <?php foreach($guru as $g) { ?>
                                     <tr>
                                          <td><?= $g['nip'] ?></td>
                                          <td><?= $g['nama'] ?></td>
                                          <td><?= $g['nama_mapel'] ?></td>
                                          <td><?= $g['nama_jurusan'] ?></td>
                                          <td><a href="<?= base_url(); ?>ManageGuru/UbahData/<?= $g['nip'] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a><a href="<?= base_url(); ?>ManageGuru/delete/<?= $g['nip'] ?>" class="btn btn-md btn-danger ml-2"><i class="fas fa-trash"></i></a></td>
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
      title: 'Data Guru',
      text : 'Berhasil ' + flashdata,
      type :'success'
  });
}


var base = '<?= base_url(); ?>'
function delete(){
  $.ajax({
    type:'POST',
    url :  base +'ManageGuru/delete',
    dataType:'json',
    data : {"id":id},
    contentType:'application/json',
    success:function(response){
      console.log(response);
    }
  });
}
</script>
  


