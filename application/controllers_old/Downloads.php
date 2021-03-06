<?php 

/**
* 
*/
class Downloads extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Downloads_model','model');
	}

	function DriverGet()
	{
		$data['type'] = 'driver';
		$data['results'] = $this->model->getAll('other_drivers');
		$this->load->view('downloads',$data);
	}

	function PDFGet()
	{
		$data['type'] = 'pdf';
 		$data['results'] = $this->model->getAll('other_pdf');
 		$this->load->view('downloads',$data);
	}

	function DriverAdd()
	{
		$data['type'] = 'driver';
		$data['results'] = $this->model->getAll('other_drivers');
		$this->load->view('CMS/Downloads.php' , $data);
	}

	function createDriver()
	{
        $url = $this->input->post('url');
        $title = $this->input->post('title');
//		$data['url'] = $this->input->post('url');
//		$data['title'] = $this->input->post('title');
        if(isset($url) && isset($title) && !empty($url) && !empty($title)){
            $data = array('Driver_URL' => $url,
                          'Driver_Title' => $title
                            );
            $this->model->create('other_drivers' , $data);
        }
//		if($data['url'] != "" && $data['title']!=""
//          && )
//			$this->model->create('other_drivers' , $data);
		redirect('Downloads/DriverAdd');
	}


	function PdfAdd()
	{
		$data['type'] = 'pdf';
 		$data['results'] = $this->model->getAll('other_pdf');
		$this->load->view('CMS/Downloads.php' , $data);
	}

	function createPDF()
	{
		$data['PDF_URL'] = $this->input->post('url');
		$data['PDF_Title'] = $this->input->post('title');
			if($data['PDF_URL'] != "" && $data['PDF_Title']!="")
		$this->model->create('other_pdf' , $data);
		redirect('Downloads/PdfAdd');
	}

	function delete()
	{
		$id = $this->input->post('id');
		$type = $this->input->post('type');
		if(is_numeric($id))
		{
			$this->model->delete($type,$id);
		}
		if($type == "pdf")
			redirect('Downloads/PdfAdd');
		else
			redirect('Downloads/DriverAdd');
	}
}
 ?>