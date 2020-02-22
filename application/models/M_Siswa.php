<<<<<<< HEAD
<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class M_Siswa extends CI_Model{

 public function allsiswa(){
   $this->db->order_by('nis','ASC');
    return $this->db->from('siswa')
    ->join('kelas', 'siswa.kode_kelas=kelas.kode_kelas')->get()->result_array();
    
 }
  public function FetchData()
    {
      return $this->db->get('kelas')->result_array();
    }

    public function delete($id)
    {
      $this->db->delete('siswa', ['id'=> $id]);
    }
    public function Add()
    {
      $data = [
        'id' => $this->input->post('id'),
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kode_kelas' => $this->input->post('kelas')
      ];
      $this->db->insert('siswa', $data);
    }
    public function update($id)
    {
        $data = [
        'id' => $this->input->post('id'),
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kode_kelas' => $this->input->post('kelas')
      ];
      $this->db->where('id', $id);
      $this->db->update('siswa', $data);
    }
<<<<<<< HEAD
=======


}



=======
<?php 
defined('BASEPATH') OR exit('dilarang mengakses file ini');
class M_Siswa extends CI_Model{

 public function allsiswa(){
   $this->db->order_by('nis','ASC');
    return $this->db->from('siswa')
    ->join('kelas', 'siswa.kode_kelas=kelas.kode_kelas')->get()->result_array();
    
 }
  public function FetchData()
    {
      return $this->db->get('kelas')->result_array();
    }

    public function delete($id)
    {
      $this->db->delete('siswa', ['id'=> $id]);
    }
    public function Add()
    {
      $data = [
        'id' => $this->input->post('id'),
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kode_kelas' => $this->input->post('kelas')
      ];
      $this->db->insert('siswa', $data);
    }
    public function update($id)
    {
        $data = [
        'id' => $this->input->post('id'),
        'nis' => $this->input->post('nis'),
        'nama' => $this->input->post('nama'),
        'kode_kelas' => $this->input->post('kelas')
      ];
      $this->db->where('id', $id);
      $this->db->update('siswa', $data);
    }
>>>>>>> a97929e791a6ae828ed899667dad6c7189cc6d71


}



>>>>>>> d218089b615ef190f2762115b1e7cb640c306826
?>