
<?php
class Auth {

	private $loginPage = "main/login";

	//CONSTRUCTOR
	public function __construct()
        {
		$CI =& get_instance();
                $this->dbUsers = $CI->load->database('default',TRUE);
        }
	
	//CHECK SESSION DATA
	function isLoggedIn()
	{
		$CI =& get_instance();
		
		if($CI->session->userdata('user_id') == '')
			return FALSE;

		return TRUE;
	}

	public function restrict()
	{
		if(!$this->isLoggedIn())
			redirect($this->loginPage);
        }

	//CHECK ACCOUNT
	function checkAccount($mail, $pass)
	{
		$CI =& get_instance();
		$m_query = $this->dbUsers
			->where('email', $mail)
			->get('irs_user');

		$m_data = $m_query->row();
		$m_pass = $m_data->password;
		
		$pass = md5($pass);

		if($m_query->num_rows() == 1)
		{
			$r_mail = TRUE;
			if($m_pass === $pass)
				$r_pass = TRUE;
			else
				$r_pass = FALSE;
				
		}
		else
		{
			$r_mail = FALSE;
			$r_pass = FALSE;
		}

		$m_return = array($r_mail, $r_pass);
		return $m_return;
	}
}