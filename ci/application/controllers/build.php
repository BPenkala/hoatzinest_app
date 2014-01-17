<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Build extends CI_Controller {


	public function index()
	{
            
            	if ($this->session->userdata('is_logged_in') == TRUE){
			
                    $data['title'] = "Let's Build | HoatziNest";
                    $this->load->view('header', $data);
                    $this->load->view('build');
                    $this->load->view('footer');
                    $this->load->library('upload');
			
		} else {
			
			redirect('login');
			
		}
	

                
	}
        
        public function create(){
                    
            // Check Checkboxes (Looking for?)
            if ( $this->input->post('developers') == 'on' ) { $developers = 'Developers'; } else $developers = '';
            if ( $this->input->post('designers') == 'on' ) { $designers = 'Designers'; } else $designers = '';
            if ( $this->input->post('managers') == 'on' ) { $managers = 'Project Managers'; } else $managers = '';  
            if ( $this->input->post('engineers') == 'on' ) { $engineers = 'Engineers'; } else $engineers = '';
            if ( $this->input->post('directors') == 'on' ) { $directors = 'Art Directors'; } else $directors = '';
            if ( $this->input->post('artists') == 'on' ) { $artists = 'Artists'; } else $artists = '';  
            if ( $this->input->post('marketers') == 'on' ) { $marketers = 'Marketers'; } else $marketers = '';
            if ( $this->input->post('animators') == 'on' ) { $animators= 'Video/Animators'; } else $animators = '';
            if ( $this->input->post('writers') == 'on' ) { $writers = 'Writers'; } else $writers = '';  
            
            // Save Project
            $data = array(
                'project_title' => $this->input->post('project_title'),
                
                'developers' => $developers,
                'designers' => $designers,
                'managers' => $managers,
                'engineers' => $engineers,
                'artists' => $artists,
                'marketers' => $marketers,
                'animators' => $animators,
                'writers' => $writers,
                'directors' => $directors,
                'project_what' => $this->input->post('project_what'),
                'project_why' => $this->input->post('project_why'),
                'project_how' => $this->input->post('project_how'),
                'project_goals' => $this->input->post('project_goals'),
                'project_repo' => $this->input->post('project_repo')

                //'projet_img' => 
                
            );
            $project_id = $this->project_model->make_project($data);
              
            // Uploaded File
            $image = $_FILES['userfile']['name']; 
            $ext = substr($image, -3);
            
            
            // Save Uploaded File   
            $config['upload_path'] = './assets/uploads/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']	= '99999999';
            $config['max_width']  = '9999999';
            $config['max_height']  = '9999999';
            $config['file_name'] = $project_id.'.png';

            $this->load->library('upload', $config);

                
            if ( !$this->upload->do_upload() )
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('build');
                redirect('index.php/success');
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                $this->resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
                redirect('index.php/success');
                
                
            }
            
            // Update Record to save filename
        }
        
        function resize($path, $file){
            
            $config['image_library']= 'gd2';
            $config['source_image']= $path;
            $config['create_thumb']= TRUE;
            $config['maintain_ration']= TRUE;
            $config['width']= 320;
            $config['height']= 196;
            $config['new_image']='./assets/uploads/'.$file;
            
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            
            
        }
}