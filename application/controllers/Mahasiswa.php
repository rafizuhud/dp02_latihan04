<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct(){
        parent:: __construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index() {

        $this->data['title'] = 'Mahasiswa';
        $this->data['mahasiswa'] = $this->Mahasiswa_model->getDataMahasiswa();
		$this->load->view('mahasiswa/mahasiswa_list', $this->data);

        
	}

    public function add(){
        $this->data['title'] = 'Tambah Data Mahasiswa';
        $this->load->view('mahasiswa/mahasiswa_add',$this->data);

    }

    public function add_save(){

        $data = array(
            'Nama' => $this->input->post('nama'),
            'Nim' => $this->input->post('nim'),
            'No_Hp' => $this->input->post('no_hp'),
            'Email' => $this->input->post('email'),
            'Jurusan' => $this->input->post('jurusan'),
            'Foto_Profil' => $this->input->post('foto_profil'),
            'Alamat' => $this->input->post('alamat')
        );

        $simpan = $this->Mahasiswa_model->simpanData($data);

        if($simpan){
            redirect('mahasiswa');
        }
    }
    
    public function edit($id_mhs){
        //select * from mahasiswa when id_mhs = 'id_mhs'

        $this->data['title']  = 'Edit Data Mahasiswa';
        $this->data['mahasiswa'] = $this->Mahasiswa_model->findData($id_mhs);

        $this->load->view('mahasiswa/mahasiswa_edit',$this->data);

        
    }
    
    public function edit_save(){
        // update barang set nama_barang = 'xx, harga_satuan='xx' where no_barrage='xxx'
        $id_mhs = $this->input->post('id_mhs');
        $data = array(
            'Nama' => $this->input->post('nama'),
            'Nim' => $this->input->post('nim'),
            'No_Hp' => $this->input->post('no_hp'),
            'Email' => $this->input->post('email'),
            'Jurusan' => $this->input->post('jurusan'),
            'Foto_Profil' => $this->input->post('foto_profil'),
            'Alamat' => $this->input->post('alamat'),
        );
        $update = $this->Mahasiswa_model->updateData($data,$id_mhs);

        if($update){
            redirect('mahasiswa');
        }
    }

    public function hapus($id_mhs){
        //delete from barang where no_barang ='xxx'
        $del = $this->Mahasiswa_model->deleteData($id_mhs);
        if($del){
            redirect('mahasiswa');
        }

    }


}

?>