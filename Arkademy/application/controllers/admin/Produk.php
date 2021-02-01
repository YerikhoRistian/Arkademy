<?php

class Produk extends CI_Controller{

    public function index(){
        $data['produk'] = $this->produk_model->tampil_data()->result();
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('admin/produk.php',$data);
        $this->load->view('templates/footer.php');
    }

    public function input(){

        $data = array(
            'id_produk'		    => set_value('id_produk'),
			'nama_produk'		=> set_value('nama_produk'),
			'keterangan'		=> set_value('keterangan'),
            'harga'	            => set_value('harga'),
            'jumlah'	        => set_value('jumlah')
        );

        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('admin/produk_form.php',$data);
        $this->load->view('templates/footer.php');

    }

    public function input_aksi()
	{
	
			$nama_produk 		= $this->input->post('nama_produk');
			$keterangan			= $this->input->post('keterangan');
            $harga		        = $this->input->post('harga');	
            $jumlah		        = $this->input->post('jumlah');			

			$data = array (

				'nama_produk' 	=> $nama_produk,
				'keterangan'	=> $keterangan,
                'harga'	        => $harga,
                'jumlah'	        => $jumlah

			);

			$this->produk_model->insert($data);
			redirect('admin/produk');
		
	}
    
	public function update($id)
	{
		$where = array('id_produk' => $id);
	
		$data['produk'] = $this->produk_model->edit_data($where, 'produk')->result();
		
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('admin/produk_update.php',$data);
        $this->load->view('templates/footer.php');

	}

	public function update_aksi()
	{
		$this->load->model('produk_model');
        
        $id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$keterangan = $this->input->post('keterangan');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

		$data = array (

			'nama_produk' 	=> $nama_produk,
			'keterangan'    => $keterangan,
            'harga' 		=> $harga,
			'jumlah'        => $jumlah

		);

		$where = array(
			'id_produk'	=> $id
		);
		$this->produk_model->Update($data, $id);
		redirect('admin/produk');
	}

	public function delete($id)
	{
		$this->load->model('produk_model');
		$this->produk_model->delete($id);
		redirect('admin/produk');
	}
}