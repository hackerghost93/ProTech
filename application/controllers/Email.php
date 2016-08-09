<?php

class Email extends CI_Controller
{
	
	 function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form'); 
        $this->load->library('email');
        $this->load->library('form_validation'); 
        $this->load->model('Email_model');  
    }
    public function index()
    {
        $this->load->view('email_view');
    }
    public function send()

    {
               $this->form_validation->set_rules('sender_email', 'Sender Email', 'trim|required|valid_email');
               $this->form_validation->set_rules('sender_password', 'sender Password', 'trim|required');
              $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
              $this->form_validation->set_rules('message', 'Message', 'trim|required');
              if ($this->form_validation->run() == FALSE) {
              $this->load->view('email_view');
              } else {

               $from_email = $this->input->post('sender_email');//'ner.kelila@gmail.com'; //change this to yours
               $from_password=$this->input->post('sender_password');
               $from_name=$this->input->post('name');
               $subject = $this->input->post('subject');
               $message = $this->input->post('message');

        //configure email settings
               $config['protocol'] = 'smtp';
               $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
               $config['smtp_port'] = '465'; //smtp port number
               $config['smtp_user'] = $from_email;
               $config['smtp_pass'] = $from_password;//'ner123456'; //$from_email password
               $config['mailtype'] = 'html';
               $config['charset'] = 'iso-8859-1';
               $config['wordwrap'] = TRUE;
               $config['newline'] = "\r\n"; //use double quotes
               $this->email->initialize($config);
               $mails=$this->Email_model->getmails();

                foreach ($mails as $address)

              {
               $this->email->clear();

               $this->email->from($from_email, $from_name);
               $this->email->to($address['email']);
               //$this->email->cc();
               //$this->email->bcc();
               //$this->email->attach();
               $this->email->subject($subject);
               $this->email->message($message);
               if($this->email->send())
               {
                $this->session->set_flashdata('success','Email successfully send');
                 redirect('Email');
                 }else{
                      $this->session->set_flashdata('fail','Oops! Error.  Please try again later!');
                      redirect('Email');
                     }
                
           
            }
        }
    } 
}