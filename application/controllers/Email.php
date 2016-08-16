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
         $this->load->view('CMS/InboxSubscribers.php');
    }
    public function sendToAll()

    {
              $this->form_validation->set_rules('Subject', 'Subject', 'trim|required');
              $this->form_validation->set_rules('Send_Email', 'Message', 'trim|required');
              if ($this->form_validation->run() == FALSE) {
              //$this->load->view('email_view');
              } else {

               $from_email = 'ner.kelila@gmail.com'; //change this to yours
               //$from_name=$this->input->post('name');
               $subject = $this->input->post('Subject');
               $message = $this->input->post('Send_Email');

        //configure email settings
               $config['protocol'] = 'smtp';
               $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
               $config['smtp_port'] = '465'; //smtp port number
               $config['smtp_user'] = $from_email;
               $config['smtp_pass'] = 'ner123456'; //$from_email password
               $config['mailtype'] = 'html';
               $config['charset'] = 'iso-8859-1';
               $config['wordwrap'] = TRUE;
               $config['newline'] = "\r\n"; //use double quotes
               $this->email->initialize($config);
               $mails=$this->Email_model->getmails();

                foreach ($mails as $address)

              {
               $this->email->clear();

               $this->email->from($from_email);
               $this->email->to($address['email']);
               //$this->email->cc();
               $this->email->bcc($this->input->post('BCC'));
               //$this->email->attach();
               $this->email->subject($subject);
               $this->email->message($message);
               if($this->email->send())
               {
                $this->session->set_flashdata('success','Email successfully send');
                 
                 }else{
                      $this->session->set_flashdata('fail','Oops! Error.  Please try again later!');
                      
                     }
                
           
            }
        }
        //$this->load->view('CMS/ComposeEmail.php');
         $this->load->view('CMS/InboxSubscribers.php');
    }
    public function UnRead()
    {
      $number = $this->Awd_Model->Counter('emails','Seen','new');
      echo json_encode($number);
    }
    public function send()
    {
      $this->form_validation->set_rules('Subject', 'Subject', 'trim|required');
              $this->form_validation->set_rules('Send_Email', 'Message', 'trim|required');
              if ($this->form_validation->run() == FALSE) {
              //$this->load->view('email_view');
              } else {

               $from_email = 'ner.kelila@gmail.com'; //change this to yours
               //$from_name=$this->input->post('name');
               $subject = $this->input->post('Subject');
               $message = $this->input->post('Send_Email');

        //configure email settings
               $config['protocol'] = 'smtp';
               $config['smtp_host'] = 'ssl://smtp.gmail.com'; //smtp host name
               $config['smtp_port'] = '465'; //smtp port number
               $config['smtp_user'] = $from_email;
               $config['smtp_pass'] = 'ner123456'; //$from_email password
               $config['mailtype'] = 'html';
               $config['charset'] = 'iso-8859-1';
               $config['wordwrap'] = TRUE;
               $config['newline'] = "\r\n"; //use double quotes
               $this->email->initialize($config);

               $this->email->from($from_email);
               $this->email->to($this->input->post('To'));
               $this->email->subject($subject);
               $this->email->message($message);
               if($this->email->send())
               {
                $this->session->set_flashdata('success','Email successfully send');
                 
                 }else{
                      $this->session->set_flashdata('fail','Oops! Error.  Please try again later!');
                      
                     }
                
           
            }
        
        $this->load->view('CMS/ComposeEmail.php');
         
    }
    public function ViewMassage()
    {
      $this->load->view('contact.php');
    }
     public function addMsg()
     {
      $this->form_validation->set_rules('your-email', 'email', 'trim|required');
              $this->form_validation->set_rules('your-name', 'name', 'trim|required');
              $this->form_validation->set_rules('your-subject', 'subject', 'trim|required');
              $this->form_validation->set_rules('your-message', 'message', 'trim|required');

              if ($this->form_validation->run() == TRUE){ 
      $data=array('email'=>$this->input->post('your-email'),
                  'name'=>$this->input->post('your-name'),
                  'subject'=>$this->input->post('your-subject'),
                  'message'=>$this->input->post('your-message')
        );
      $this->Email_model->addRecievedMsg($data);
      //header('location:'.$this->config->base_url());
    }
      redirect('Email/ViewMassage');
   //header('location:'.$this->config->base_url());
     }

     public function select_all()
     {
      $data['mails'] = $this->Email_model->getAll();

      //$this->load->view('CMS/MessageSideBar.php',$data); 
      $this->load->view('CMS/InboxMessages.php',$data);
     }
    public function show()
    {
      if($this->input->post("ID") != null )
      {
      $id=$this->input->post("ID");
      $show = $this->Email_model->getById($id);
      $data["Seen"] = "Seen";
      $this->Awd_Model->update('emails',$data,$id,'id');
      echo json_encode($show);
      }
    }
    public function deleteMessage()
    {
    $id = $this->input->post('RecoredId');
     $this->Email_model->delete_message($id);
                     header('location:'.$this->config->base_url().'index.php/Email/select_all/'); 
    }                 

  public function SearchEmail()
  {
    $email = $_GET['q'];
    $mails = $this->Email_model->search_message($email); 
    foreach ($mails as $row){
     echo' <ul class="subSideBarMenu">
                     
        <li>
        
          <div class="Inboxes">
  
             <div class="checkbox">
              <label>
                <p onclick="ShowMail('. $row['id'] .')">'. $row['name'].'</p>
              </label>
            </div>';
             echo"<a href='#' class='deleteBtn'  data-target='#DeleteInboxMessageModal' data-toggle='modal' title='delete' data-placement='right' data-id='".$row['id']."'><span class='fa fa-trash'></span></a>";
            echo'<p>'.$row['subject'] .'</p>';
           echo' <h4 class="TimeInbox"> '.$row['created_at'].'</h4>';
          //echo'<a href="'. base_url().'index.php/Email/show/'.$row['id'].'">show </a>';
         echo' </div>
        </li> 
          
       </ul>';
      }
  }  
   
}