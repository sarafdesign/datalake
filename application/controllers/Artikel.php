<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends MY_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('Model_artikel','model_artikel');
		$this->load->library('upload');
	}

	function index(){
        $data['kategori'] = $this->db->get('kategori')->result();
		$this->load->view('Admin/tambah', $data);
	}

	function halaman_edit($id){
		$data['artikel'] = $this->model_artikel->get_article_by_id($id)->result();
        $data['kategori'] = $this->db->get('kategori')->result();

		$this->load->view('Admin/edit', $data);
	}

	function save(){
		$title = $this->input->post('title',TRUE);
		$content = $this->input->post('content',TRUE);
		
		$this->model_artikel->insert_post($title,$content);
		$id = $this->db->insert_id();
		$result = $this->model_artikel->get_article_by_id($id)->row_array();
		$data['title'] = $result['title'];
		$data['content'] = $result['content'];
        $this->session->set_flashdata('success', 'Artikel Berhasil Ditambah');
		redirect(base_url() . 'Admin/artikel');

	}

	function konfirmasi_artikel($id){
		date_default_timezone_set('Asia/Jakarta');
		$data['coba'] = $this->db->query("select * from post where id ='$id'")->result();

        $data = array(
			'status' => 'yes',
			'date_uploaded' => date('Y-m-d H:i:s')
        );
        $where = array(
            'id' => $id
        );
        $this->model_artikel->update_data($where, $data, 'post');
        $this->session->set_flashdata('info', 'Artikel Berhasil Dipublish');
        redirect(base_url() . 'Admin/artikel');

	}

	function hide_artikel($id){
		$data['post'] = $this->db->query("select * from post where id ='$id'")->result();
		$data = array(
			'status' => 'no'
		);
		$where = array(
			'id' => $id
		);
		$this->model_artikel->update_data($where, $data, 'post');
		$this->session->set_flashdata('warning', 'Artikel Berhasil Disembunyikan');
        redirect(base_url() . 'Admin/artikel');
		

	}

	function edit(){
		$id = $this->input->post('id',TRUE);
		$title = $this->input->post('title',TRUE);
		$content = $this->input->post('content',TRUE);
		$this->model_artikel->edit_post($title,$content,$id);
		$result = $this->model_artikel->get_article_by_id($id)->row_array();
		$data['title'] = $result['title'];
		$data['content'] = $result['content'];
        $this->session->set_flashdata('info', 'Artikel Berhasil Diubah');
		redirect(base_url() . 'Admin/artikel');

	}

	//Upload image summernote
	function upload_image(){
		if(isset($_FILES["image"]["name"])){
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('image')){
				$this->upload->display_errors();
				return FALSE;
			}else{
				$data = $this->upload->data();
		        //Compress Image
		        $config['image_library']='gd2';
		        $config['source_image']='./assets/images/'.$data['file_name'];
		        $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= TRUE;
	            $config['quality']= '60%';
	            $config['width']= 800;
	            $config['height']= 800;
	            $config['new_image']= './assets/images/'.$data['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
				echo base_url().'assets/images/'.$data['file_name'];
			}
		}
	}


	//Delete image summernote
	function delete_image(){
		$src = $this->input->post('src');
		$file_name = str_replace(base_url(), '', $src);
		if(unlink($file_name)){
	        echo 'File Delete Successfully';
	    }
	}

	function delete_article($id){
		$this->model_artikel->delete_article($id);
        $this->session->set_flashdata('danger', 'Artikel Berhasil Dihapus');
		redirect('admin/artikel');
	}

	
}