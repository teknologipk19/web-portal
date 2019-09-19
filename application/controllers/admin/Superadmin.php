<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller
{
	public function __Construct()
	{
		parent::__Construct();
		$this->load->model('m_admin');
	}

	//Dashboard Admin
	public function dashboardadmin()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Dashboard Admin', 
					'hitungberita' => $this->m_admin->hitungdataberita(),
					'hitungiklan' => $this->m_admin->hitungdataiklan(),
					'hitungkategori' => $this->m_admin->hitungdatakategori(),
					'hitungadmin' => $this->m_admin->hitungdataadmin(),
					'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		);
		$this->load->view('admin/v_dashboardadmin', $data);
	}

	//Identitas Website
	public function identitaswebsite()
	{
		$valid = $this->form_validation;

		$valid->set_rules('namawebsite','Username','required|is_unique[tbl_identitaswebsite.namawebsite]',
		array(	'is_unique' => 'Nama Website:<strong>'.
				$this->input->post('namawebsite'). '</strong>. sudah ada. Buat Nama Website baru!'));

		$valid->set_rules('urlwebsite','Url Website','required',
		array('required' => 'Url Website harus diisi'));

		$valid->set_rules('metadeskripsi','Meta Deskripsi','required',
		array('required' => 'Meta Deskripsi harus diisi'));

		$valid->set_rules('metakeyword','Meta Keyword','required',
		array('required' => 'Meta Keyword harus diisi'));

		$valid->set_rules('email','Email','required',
		array('required' => 'Email harus diisi'));

		$valid->set_rules('notelepon','No Telepon/Hp','required',
		array('required' => 'No Telepon/Hp harus diisi'));

		$valid->set_rules('googlemaps','Google Maps','required',
		array('required' => 'Google Maps harus diisi'));

		$valid->set_rules('norekening','No Rekening','required',
		array('required' => 'No Rekening harus diisi'));

		if ($valid->run() === FALSE)
		{
			$id_user = $this->session->userdata('id');
			$config = array(
						'upload_path'	=> './assets/admin/upload/favicon/',
						'allowed_types'	=> 'fav',
						'max_size'		=> '1000',
			);
			$this->load->library('upload', $config);
			if (! $this->upload->do_upload('gambar')) {
				$data = array(
							'title' 		=> 'Identitas Website',
							'subtitle' 		=> 'Identitas Website',
							'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
				);
				$this->load->view('admin/v_tambahidentitaswebsite', $data);
			}else{
				$upload_data 				= array('uploads' => $this->upload->data());
				$config = array(
							'image_library'	 	=> 'gd2',
							'source_image'		=> './assets/admin/upload/favicon/'.$upload_data['uploads']['file_name'],
							'create_thumb'		=> TRUE,
							'maintain_ratio'	=> TRUE,
							'thumb_marker'		=> '',
							'encrypt'			=> TRUE,
				);
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array(
							'namawebsite' 	=> $this->input->post('namawebsite'),
							'urlwebsite' 	=> $this->input->post('urlwebsite'),
							'metadeskripsi' => $this->input->post('metadeskripsi'),
							'metakeyword' 	=> $this->input->post('metakeyword'),
							'email' 		=> $this->input->post('email'),
							'notelepon' 	=> $this->input->post('notelepon'),
							'googlemaps' 	=> $this->input->post('googlemaps'),
							'norekening' 	=> $this->input->post('norekening'),
							'gantifavicon' 	=> $upload_data['uploads']['file_name'],
				);
				$this->m_admin->InsertData('tbl_identitaswebsite', $data);
				echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/identitaswebsite';</script>";
			}		
		}
	}

	//Master Data Berita
	public function masterdataberita()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Master Data Berita', 
					'subtitle' => 'Master Data Berita', 
					'listmasterdataberita' => $this->m_admin->getmasterdataberita(),
					'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		);
		$this->load->view('admin/v_masterdataberita', $data);
	}

	//Tambah Data Berita
	public function tambahmasterdataberita()
	{
	    $valid = $this->form_validation;

	    $valid->set_rules('gambar','Gambar','required',
		array('required' => 'Gambar harus diisi'));

	    if ($valid->run() === FALSE)
	    {
	      	$id_user = $this->session->userdata('id');
	      	$config = array(
	      				'upload_path' 	=> './assets/admin/upload/berita/',
	      				'allowed_types' => '.gif|jpg|png|jpeg|JPG',
	      				'max_size'		=> '1000', //KB
	      				'encrypt_name'	=> TRUE,
	      	);
	      	$this->load->library('upload', $config);
	      	if (! $this->upload->do_upload('gambar')) {
	        	# code...
		        $id_user = $this->session->userdata('id');
		        $data = array(
				            'title'     => 'Tambah Master Data Berita',
				            'subtitle'     => 'Tambah Master Data Berita',
				            'listmasterdatakategori' => $this->m_admin->getmasterdatakategori(),
				            'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		        );
	        	$this->load->view('admin/v_tambahmasterdataberita',$data);
	      	}else{
		      	$upload_data         = array('uploads' => $this->upload->data());
			    $config = array(
					          'image_library'   => 'gd2',
					          'source_image'     => './assets/admin/upload/berita/'.$upload_data['uploads']['file_name'],
					          'create_thumb'     => true,
					          'maintain_ratio'   => true,
					          'thumb_marker'     => '',
		      	);
		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
			    $data = array(
			    		'judul_berita'   => $this->input->post('judul_berita', TRUE),
			    		'author'   => $this->input->post('author', TRUE),
			    		'kategori_berita'   => $this->input->post('kategori_berita', TRUE),
			    		'status_publish'   => $this->input->post('status_publish', TRUE),
			    		'isi_berita'   => $this->input->post('isi_berita', TRUE),
			            'gambar'   => $upload_data['uploads']['file_name'],
			    );
		      	$this->m_admin->InsertData('tbl_masterdataberita', $data);
		      	echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdataberita';</script>";
	      	} 
	    }
	}

	//Edit Master Data Berita
	public function editmasterdataberita($id_berita = 'id_berita')
	{
	    $valid = $this->form_validation;

	    $valid->set_rules('gambar','Gambar','required',
		array('required' => 'Gambar yang di edit bukan Gambar'));

	    if ($valid->run() === FALSE)
	    {
	      	$id_user = $this->session->userdata('id');
	      	$config = array(
	      				'upload_path' 	=> './assets/admin/upload/berita/',
	      				'allowed_types' => '.gif|jpg|png|jpeg',
	      				'max_size'		=> '1000', //KB
	      				'encrypt_name'	=> TRUE,
	      	);

	      	$this->load->library('upload', $config);
	      	if (! $this->upload->do_upload('gambar')) {
	        	$berita = $this->m_admin->getmasterdataberita("WHERE id_berita = $id_berita ");
		        $id_user = $this->session->userdata('id');
		        $data = array(
				            'title'     		=> 'Edit Master Data Berita',
				            'subtitle'     		=> 'Edit Master Data Berita',
				            'id_berita' 		=> $berita[0]['id_berita'],
				            'judul_berita' 		=> $berita[0]['judul_berita'],
				            'author' 			=> $berita[0]['author'],
				            'kategori_berita' 	=> $berita[0]['kategori_berita'],
				            'isi_berita' 		=> $berita[0]['isi_berita'],
				            'gambar' 			=> $berita[0]['gambar'],
				            'listmasterdatakategori' => $this->m_admin->getmasterdatakategori(),
				            'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		        );
	        	$this->load->view('admin/v_editmasterdataberita',$data);
	      	}else{
		      	$upload_data         = array('uploads' => $this->upload->data());
			    $config = array(
					          'image_library'   => 'gd2',
					          'source_image'     => './assets/admin/upload/berita/'.$upload_data['uploads']['file_name'],
					          'create_thumb'     => true,
					          'maintain_ratio'   => true,
					          'thumb_marker'     => '',
		      	);
		      	$this->load->library('image_lib', $config);
		      	$this->image_lib->resize();
		      	$id_berita = $this->input->post('id_berita');
			    $data = array(
			    		'judul_berita'   => $this->input->post('judul_berita', TRUE),
			    		'author'   => $this->input->post('author', TRUE),
			    		'kategori_berita'   => $this->input->post('kategori_berita', TRUE),
			    		'status_publish'   => $this->input->post('status_publish', TRUE),
			    		'isi_berita'   => $this->input->post('isi_berita', TRUE),
			            'gambar'   => $upload_data['uploads']['file_name'],
			    );
			    $id = $this->db->where('id_berita', $id_berita);
			    $query = $this->db->get('tbl_masterdataberita');
			    $row = $query->row();
			    unlink("./assets/admin/upload/berita/$row->gambar");
		      	$this->m_admin->Updatedata('tbl_masterdataberita', $data, array('id_berita' => $id_berita));
		      	echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdataberita';</script>";
	      	} 
	    }
	}	

	//Hapus Master Data Berita
	public function hapusmasterdataberita()
	{
	    $id_berita = $this->input->post('id_berita');

	    $id = $this->db->where('id_berita', $id_berita);
	    $query = $this->db->get('tbl_masterdataberita');
	    $row = $query->row();
	    unlink("./assets/admin/upload/berita/$row->gambar");

	    $this->m_admin->DeleteData('tbl_masterdataberita', array('id_berita' => $id_berita));

	    echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdataberita';</script>";
	}

	//Data Komentar Berita
	public function datakomentarberita()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Data Komentar Berita', 
					'subtitle' => 'Data Komentar Berita', 
					'listdatabkomentarberita' => $this->m_admin->getdatabkomentarberita(),
					'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		);
		$this->load->view('admin/v_masterdataberita', $data);
	}

	//Master Data Kategori
	public function masterdatakategori()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Master Data Kategori', 
					'subtitle' => 'Master Data Kategori', 
					'listmasterdatakategori' => $this->m_admin->getmasterdatakategori(),
					'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		);
		$this->load->view('admin/v_masterdatakategori', $data);
	}

	//Action Master Data Kategori
	public function actionmasterdatakategori()
	{
		$kategori_berita = $this->input->post('kategori_berita');
		$statusdata = $this->input->post('statusdata');
		if ($statusdata == "Tambah")
		{
			$data = array(
						'kategori_berita' => $kategori_berita, 
			);
			$this->m_admin->InsertData('tbl_masterdatakategori', $data);
			echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdatakategori';</script>";
		}

		if ($statusdata == "Update")
		{
			$id_kategoriberita = $this->input->post('id_kategoriberita');
			$data = array(
						'kategori_berita' => $kategori_berita, 
			);
			$this->m_admin->UpdateData('tbl_masterdatakategori', $data, array('id_kategoriberita' => $id_kategoriberita));
			echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdatakategori';</script>";
		}

		if ($statusdata == "Hapus")
		{
			$id_kategoriberita = $this->input->post('id_kategoriberita');
			$this->m_admin->DeleteData('tbl_masterdatakategori', array('id_kategoriberita' => $id_kategoriberita));
			echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/masterdatakategori';</script>";
		}
	}	

	//Data Iklan Header
	public function dataiklanheader()
	{
	    $id_user = $this->session->userdata('id');
	    $data = array(
	          'title'     => 'Data Iklan Header', 
	          'subtitle'     => 'Data Iklan Header', 
	          'listdataiklanheader' => $this->m_admin->getdataiklanheader(),
	          'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	    );
	    $this->load->view('admin/v_dataiklanheader', $data);
	}

	//Edit Data Iklan Header
	public function editdataiklanheader($id_iklan = 'id_iklan')
  	{
      	$valid = $this->form_validation;

      	$valid->set_rules('img_iklan','Gambar','required',
		array('required' => 'Gambar yang di edit bukan Gambar'));

      	if ($valid->run() === FALSE)
      	{
          	$config = array(
                'upload_path'   => './assets/admin/upload/iklan/',
                'allowed_types' => '.gif|jpg|png|jpeg',
                'max_size'    => '1000', //KB
                'encrypt_name'	=> TRUE,
          	);
	        $this->load->library('upload', $config);
	        if (! $this->upload->do_upload('img_iklan')) {
	            $iklan = $this->m_admin->getmasterdataiklan("WHERE id_iklan = $id_iklan ");
	            $id_user = $this->session->userdata('id');
	            $data = array(
	                    'title'         => 'Edit Data Iklan Header',
	                    'subtitle'      => 'Edit Data Iklan Header',
	                    'id_iklan'      => $iklan[0]['id_iklan'],
	                    'judul_iklan'   => $iklan[0]['judul_iklan'],
	                    'img_iklan'     => $iklan[0]['img_iklan'],
	                    'url_iklan'     => $iklan[0]['url_iklan'],
	                    'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	            );
            	$this->load->view('admin/v_editdataiklanheader',$data);
          	}else{
            	$upload_data         = array('uploads' => $this->upload->data());
          		$config = array(
		                    'image_library'   => 'gd2',
		                    'source_image'     => './assets/admin/upload/iklan/'.$upload_data['uploads']['file_name'],
		                    'create_thumb'     => true,
		                    'maintain_ratio'   => true,
		                    'thumb_marker'     => '',
            	);
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
	            $id_iklan = $this->input->post('id_iklan');
		        $data = array(
			                'img_iklan'     => $upload_data['uploads']['file_name'],
			                'url_iklan'     => $this->input->post('url_iklan', TRUE),
			                'judul_iklan'   => $this->input->post('judul_iklan', TRUE),
		        );

	          	$id = $this->db->where('id_iklan', $id_iklan);
	          	$query = $this->db->get('tbl_masterdataiklan');
	          	$row = $query->row();

        		if($row->img_iklan == 'default-thumbnail.jpg')
        		{
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanheader';</script>";
		    	}else{
			        unlink("./assets/admin/upload/iklan/$row->img_iklan");
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanheader';</script>";    
		   	 	}
        	}
    	}
  	}

  	//Hapus Data Iklan Header
	public function hapusdataiklanheader()
	{
	    // algoritma unlink
	    // 1. ambil id dataiklan
	    // 2. ambil table master dataiklan
	    // 3. pecah data 

	    // algoritma menghapus data
	    // 1. ambil id 
	    // 2. ambil gambar default 
	    // 3. 
	  
	    $id_iklan = $this->input->post('id_iklan');

	    $data = array(
	      'img_iklan' => 'default-thumbnail.jpg',
	      'url_iklan' => '',
	      'judul_iklan' => ''
	    );
	    
	    $id = $this->db->where('id_iklan', $id_iklan);
	    $query = $this->db->get('tbl_masterdataiklan');
	    $row = $query->row();
	    $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
		if($row->img_iklan == 'default-thumbnail.jpg'){
	      echo "<script>alert('Anda belum memasukkan iklan.');window.location='".base_url()."admin/superadmin/dataiklanheader';</script>";
	    } else {
	      unlink("./assets/admin/upload/iklan/$row->img_iklan");
	      echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanheader';</script>";
	      // $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
	    }
	}

	// Data Iklan Sidebar
	public function dataiklansidebar()
	{
	    $id_user = $this->session->userdata('id');
	    $data = array(
	          'title'     => 'Data Iklan Sidebar', 
	          'subtitle'     => 'Data Iklan Sidebar', 
	          'listdataiklansidebar' => $this->m_admin->getdataiklansidebar(),
	          'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	    );
	    $this->load->view('admin/v_dataiklansidebar', $data);
	}

	//Edit Data Iklan Sidebar
	public function editdataiklansidebar($id_iklan = 'id_iklan')
  	{
      	$valid = $this->form_validation;

      	$valid->set_rules('img_iklan','Gambar','required',
		array('required' => 'Gambar yang di edit bukan Gambar'));

      	if ($valid->run() === FALSE)
      	{
          	$id_user = $this->session->userdata('id');
          	$config = array(
                'upload_path'   => './assets/admin/upload/iklan/',
                'allowed_types' => '.gif|jpg|png|jpeg',
                'max_size'    => '1000', //KB
                'encrypt_name'	=> TRUE,
          	);
	        $this->load->library('upload', $config);
	        if (! $this->upload->do_upload('img_iklan'))
	        {
	            $iklan = $this->m_admin->getmasterdataiklan("WHERE id_iklan = $id_iklan ");
	            $id_user = $this->session->userdata('id');
	            $data = array(
	                    'title'         => 'Edit Data Iklan Sidebar',
	                    'subtitle'         => 'Edit Data Iklan Sidebar',
	                    'id_iklan'       => $iklan[0]['id_iklan'],
	                    'judul_iklan'     => $iklan[0]['judul_iklan'],
	                    'img_iklan'     => $iklan[0]['img_iklan'],
	                    'url_iklan'     => $iklan[0]['url_iklan'],
	                    'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	            );
            	$this->load->view('admin/v_editdataiklansidebar',$data);
          	}else{
            	$upload_data         = array('uploads' => $this->upload->data());
          		$config = array(
		                    'image_library'   => 'gd2',
		                    'source_image'     => './assets/admin/upload/iklan/'.$upload_data['uploads']['file_name'],
		                    'create_thumb'     => true,
		                    'maintain_ratio'   => true,
		                    'thumb_marker'     => '',
            	);
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
	            $id_iklan = $this->input->post('id_iklan');
		        $data = array(
			                'img_iklan'     => $upload_data['uploads']['file_name'],
			                'url_iklan'     => $this->input->post('url_iklan', TRUE),
			                'judul_iklan'   => $this->input->post('judul_iklan', TRUE),
		        );

	          	$id = $this->db->where('id_iklan', $id_iklan);
	          	$query = $this->db->get('tbl_masterdataiklan');
	          	$row = $query->row();

        		if($row->img_iklan == 'default-thumbnail.jpg')
        		{
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklansidebar';</script>";
		    	}else{
			        unlink("./assets/admin/upload/iklan/$row->img_iklan");
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklansidebar';</script>";    
		   	 	}
        	}
    	}
  	}

  	//Hapus Data Iklan Sidebar
	public function hapusdataiklansidebar()
	{
	    // algoritma unlink
	    // 1. ambil id dataiklan
	    // 2. ambil table master dataiklan
	    // 3. pecah data 

	    // algoritma menghapus data
	    // 1. ambil id 
	    // 2. ambil gambar default 
	    // 3. 
	  
	    $id_iklan = $this->input->post('id_iklan');

	    $data = array(
	      'img_iklan' => 'default-thumbnail.jpg',
	      'url_iklan' => '',
	      'judul_iklan' => ''
	    );
	    
	    $id = $this->db->where('id_iklan', $id_iklan);
	    $query = $this->db->get('tbl_masterdataiklan');
	    $row = $query->row();
	    $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
		if($row->img_iklan == 'default-thumbnail.jpg'){
	      echo "<script>alert('Anda belum memasukkan iklan.');window.location='".base_url()."admin/superadmin/dataiklansidebar';</script>";
	    } else {
	      unlink("./assets/admin/upload/iklan/$row->img_iklan");
	      echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklansidebar';</script>";
	      // $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
	    }
	}

	//Data Iklan Footer
	public function dataiklanfooter()
	{
	    $id_user = $this->session->userdata('id');
	    $data = array(
	          'title'     => 'Data Iklan Footer', 
	          'subtitle'     => 'Data Iklan Footer', 
	          'listdataiklanfooter' => $this->m_admin->getdataiklanfooter(),
	          'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	    );
	    $this->load->view('admin/v_dataiklanfooter', $data);
	}

	//Edit Data Iklan Footer
	public function editdataiklanfooter($id_iklan = 'id_iklan')
  	{
      	$valid = $this->form_validation;

      	$valid->set_rules('img_iklan','Gambar','required',
		array('required' => 'Gambar yang di edit bukan Gambar'));

      	if ($valid->run() === FALSE)
      	{
          	$id_user = $this->session->userdata('id');
          	$config = array(
                'upload_path'   => './assets/admin/upload/iklan/',
                'allowed_types' => '.gif|jpg|png|jpeg',
                'max_size'    => '1000', //KB
                'encrypt_name'	=> TRUE,
          	);
	        $this->load->library('upload', $config);
	        if (! $this->upload->do_upload('img_iklan')) {
	            $iklan = $this->m_admin->getmasterdataiklan("WHERE id_iklan = $id_iklan ");
	            $id_user = $this->session->userdata('id');
	            $data = array(
	                    'title'         => 'Edit Data Iklan Footer',
	                    'subtitle'      => 'Edit Data Iklan Footer',
	                    'id_iklan'      => $iklan[0]['id_iklan'],
	                    'judul_iklan'   => $iklan[0]['judul_iklan'],
	                    'img_iklan'     => $iklan[0]['img_iklan'],
	                    'url_iklan'     => $iklan[0]['url_iklan'],
	                    'users_aktif'   => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
	            );
            	$this->load->view('admin/v_editdataiklanfooter',$data);
          	}else{
            	$upload_data         = array('uploads' => $this->upload->data());
          		$config = array(
		                    'image_library'   => 'gd2',
		                    'source_image'     => './assets/admin/upload/iklan/'.$upload_data['uploads']['file_name'],
		                    'create_thumb'     => true,
		                    'maintain_ratio'   => true,
		                    'thumb_marker'     => '',
            	);
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();
	            $id_iklan = $this->input->post('id_iklan');
		        $data = array(
			                'img_iklan'     => $upload_data['uploads']['file_name'],
			                'url_iklan'     => $this->input->post('url_iklan', TRUE),
			                'judul_iklan'   => $this->input->post('judul_iklan', TRUE),
		        );

	          	$id = $this->db->where('id_iklan', $id_iklan);
	          	$query = $this->db->get('tbl_masterdataiklan');
	          	$row = $query->row();

        		if($row->img_iklan == 'default-thumbnail.jpg')
        		{
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanfooter';</script>";
		    	}else{
			        unlink("./assets/admin/upload/iklan/$row->img_iklan");
			        $this->m_admin->Updatedata('tbl_masterdataiklan', $data, array('id_iklan' => $id_iklan));
			        echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanfooter';</script>";    
		   	 	}
        	}
    	}
  	}

  	//Hapus Data Iklan Footer
	public function hapusdataiklanfooter()
	{
	    // algoritma unlink
	    // 1. ambil id dataiklan
	    // 2. ambil table master dataiklan
	    // 3. pecah data 

	    // algoritma menghapus data
	    // 1. ambil id 
	    // 2. ambil gambar default 
	    // 3. 
	  
	    $id_iklan = $this->input->post('id_iklan');

	    $data = array(
	      'img_iklan' => 'default-thumbnail.jpg',
	      'url_iklan' => '',
	      'judul_iklan' => ''
	    );
	    
	    $id = $this->db->where('id_iklan', $id_iklan);
	    $query = $this->db->get('tbl_masterdataiklan');
	    $row = $query->row();
	    $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
		if($row->img_iklan == 'default-thumbnail.jpg'){
	      echo "<script>alert('Anda belum memasukkan iklan.');window.location='".base_url()."admin/superadmin/dataiklanfooter';</script>";
	    } else {
	      unlink("./assets/admin/upload/iklan/$row->img_iklan");
	      echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataiklanfooter';</script>";
	      // $this->m_admin->Updatedata('tbl_masterdataiklan', $data , array('id_iklan' => $id_iklan));
	    }
	}

	//Data Adnin
	public function dataadmin()
	{
		$id_user = $this->session->userdata('id');
		$data = array(
					'title' => 'Data Admin', 
					'subtitle' => 'Data Admin', 
					'listdataadmin' => $this->m_admin->getdataadmin(),
					'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
		);
		$this->load->view('admin/v_dataadmin', $data);
	}

	//Tambah Data Admin
	public function tambahdataadmin()
	{
		$valid = $this->form_validation;

		$valid->set_rules('username','Username','required|is_unique[tbl_admin.username]',
		array(	'is_unique' => 'username:<strong>'.
				$this->input->post('username'). '</strong>. sudah terdaftar. Buat Username baru!'));

		$valid->set_rules('nama_lengkap','Nama Lengkap','required',
		array('required' => 'Nama Lengkap harus diisi'));

		$valid->set_rules('notelepon','No. Telepon/Hp','required',
		array('required' => 'No. Telepon/Hp harus diisi'));

		$valid->set_rules('email','Email','required',
		array('required' => 'Email harus diisi'));

		$valid->set_rules('password','Password','required',
		array('required' => 'Password harus diisi'));

		$valid->set_rules('status','Status','required',
		array('required' => 'Status harus diisi'));

		$valid->set_rules('hak_akses','Hak Akses','required',
		array('required' => 'Hak Akses harus diisi'));

		if ($valid->run() === FALSE)
		{
			$id_user = $this->session->userdata('id');
			$data = array(
						'title' 		=> 'Tambah Data Admin',
						'subtitle' 		=> 'Tambah Data Admin',
						'users_aktif' => $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
			);
			$this->load->view('admin/v_tambahdataadmin', $data);
		}else{
			$data = array(
						'username' 		=> $this->input->post('username'),
						'nama_lengkap' 	=> $this->input->post('nama_lengkap'),
						'notelepon' 	=> $this->input->post('notelepon'),
						'email' 		=> $this->input->post('email'),
						'password' 		=> md5($this->input->post('password')),
						'status' 		=> $this->input->post('status'),
						'hak_akses' 	=> $this->input->post('hak_akses'),
			);
			$this->m_admin->InsertData('tbl_admin', $data);
			echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataadmin';</script>";
		}
	}

	//Edit Data Admin
	public function editdataadmin($id_admin = "")
	{
		$valid = $this->form_validation;

		$valid->set_rules('nama_lengkap','Nama Lengkap','required',
		array('required' => 'Nama Lengkap harus diisi'));

		$valid->set_rules('notelepon','No. Telepon/Hp','required',
		array('required' => 'No. Telepon/Hp harus diisi'));

		$valid->set_rules('email','Email','required',
		array('required' => 'Email harus diisi'));

		$valid->set_rules('password','Password','required',
		array('required' => 'Password harus diisi'));

		$valid->set_rules('status','Status','required',
		array('required' => 'Status harus diisi'));

		$valid->set_rules('hak_akses','Hak Akses','required',
		array('required' => 'Hak Akses harus diisi'));

		if ($valid->run() === FALSE)
		{
			$id_user = $this->session->userdata('id');
			$admin = $this->m_admin->getdataadmin("WHERE id_admin = $id_admin");
			$data = array(
						'title' 			=> 'Edit Data Admin',
						'subtitle' 			=> 'Edit Data Admin',
						'id_admin'			=> $admin[0]['id_admin'],
						'username'			=> $admin[0]['username'],
						'nama_lengkap'		=> $admin[0]['nama_lengkap'],
						'notelepon'			=> $admin[0]['notelepon'],
						'email'				=> $admin[0]['email'],
						'password'			=> $admin[0]['password'],
						'status'			=> $admin[0]['status'],
						'hak_akses'			=> $admin[0]['hak_akses'],
						'listdataadmin'		=> $this->m_admin->getdataadmin(),
						'users_aktif' 		=> $this->m_admin->getdataadmin("WHERE id_admin = $id_user"),
			);
			$this->load->view('admin/v_editdataadmin', $data);
		}else{
			$id_admin = $this->input->post('id_admin');
			$data = array(
						'username' 		=> $this->input->post('username'),
						'nama_lengkap' 	=> $this->input->post('nama_lengkap'),
						'notelepon' 	=> $this->input->post('notelepon'),
						'email' 		=> $this->input->post('email'),
						'password' 		=> md5($this->input->post('password')),
						'status' 		=> $this->input->post('status'),
						'hak_akses' 	=> $this->input->post('hak_akses'),
			);
			$this->m_admin->Updatedata('tbl_admin', $data, array('id_admin' => $id_admin));
			echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataadmin';</script>";
		}
	}

	//Hapus Data Admin
	public function hapusdataadmin()
	{
		$id_admin = $this->input->post('id_admin');
		$this->m_admin->DeleteData('tbl_admin', array('id_admin' => $id_admin));
		echo "<script>alert('Berhasil');window.location='".base_url()."admin/superadmin/dataadmin';</script>";
	}
}
?>		