<?php

class Crud extends CI_Controller
{
	public function view_record()
	{
		$data['userdata']= $this->model->Select('users');
		$this->load->view('view_records',$data);
	}
	public function view()
	{
		$view = array('user_id' =>$this->uri->segment(3));
		$ShowData['Show'] = $this->model->DBedit('users',$view); 
		$this->load->view('view',$ShowData);
	}
	public function Delete()
	{
		$Delete = array('user_id' =>$this->uri->segment(3));
		$del    = $this->model->Dbdelete('users',$Delete);
		if ($del) 
		{
			$this->view_record();
		}
	}
	public function Edit()
	{
		$Edit = array('user_id' =>$this->uri->segment(3));
		$go['Edit']   = $this->model->DBedit('users',$Edit);
		$this->load->view('edit',$go);
	}
	public function Update()
	{
		if ($this->input->post("submit")) 
		{
			$where = array('user_id'       => $this->input->post('ID') ); 
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
			$load = $this->model->DBupdate("users",$data,$where);
			if ($load) 
			{
				$this->view_record();
			}
		}
	}
}

?>