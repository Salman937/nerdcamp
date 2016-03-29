<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index');
	}
	
	public function insert()
	{
		if ($this->input->post("submit")) 
		{
			$data = array('std_name'       =>$this->input->post('std_name') , 
						  'fth_name'       =>$this->input->post('fth_name') ,
						  'nationality'    =>$this->input->post('ntnlty') ,
						  'course'         =>$this->input->post('courses') ,
						  'cnic'           =>$this->input->post('cnic') ,
						  'present_adrs'   =>$this->input->post('pre_adrs') ,
						  'permanent_adrs' =>$this->input->post('per_adrs') ,
						  'std_mobile'     =>$this->input->post('std_mobile') ,
						  'fth_mobile'     =>$this->input->post('fth_mobile') ,
						  'admsn_no'       =>$this->input->post('admsn_no') ,
						  'total_fee'      =>$this->input->post('tot_fee') ,
						  'class'          =>$this->input->post('cls') ,
						  'paid'           =>$this->input->post('paid') ,
						  'date'           =>date("y-m-d h:i:s") ,
						  'balance'        =>$this->input->post('bal') 
						  );
			$get = $this->model->insert("users",$data);
			if ($get) 
			{
				$this->index();
			}
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */