<?php
class Email extends CI_Controller {

    public function index()
		{
	        $this->load->library('session');
	        $this->load->helper('form');
	        $this->load->library('email');
	        // $data['title'] = ucfirst($page); // Capitalize the first letter
	        // $this->load->view('templates/header');
	        // $this->load->view('pages/home');
	        // $this->load->view('templates/footer');
	      //   $data=array(
	      //   	// 'smtp_crypto' => 'STARTTLS ',
	      //   	'protocol' => 'smtp',
			    // 'smtp_host' => 'ssl://smtp.gmail.com',
			    // 'smtp_port' => 465,
			    // 'smtp_user' => 'sajivanirmal@gmail.com',
			    // 'smtp_pass' => 'sajivan@123',
			    // 'mailtype'  => 'text',
			    // 'charset'  => 'utf-8'
	      //   );
	        $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'ssl://smtp.gmail.com';
            $config['smtp_port']    = '465';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'sajivanirmal@gmail.com';
            $config['smtp_pass']    = 'xxxxxxxx';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'text'; // or html
            $config['validation'] = FALSE;
	        $this->email->initialize($config);
	        // $from_email="shashi257@outlook.com";
	        $this->email->from('sajivanirmal@gmail.com', 'Shashikant Murya');
	        // $to_email="shashim2507@gmail.com";
	        $this->email->to('shashim2507@gmail.com');
	        $this->email->subject('test');
	        $this->email->message('test message');

	        if($this->email->send())
	        {
	        	echo "Mail has been send";
	        }
	        else
	        {
	        	echo $this->email->print_debugger();
	        }
		}
}