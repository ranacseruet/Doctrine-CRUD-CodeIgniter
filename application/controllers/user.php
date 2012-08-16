<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* @property Usermodel        $usermodel
*/

class User extends MY_Controller
{
    /**
     * constructor
     */
    public function __construct()
    {
         parent::__construct();                       
        $this->load->model("usermodel");
    }
   
    /**
     * @param int $id
     * user details according to user id
     */
    public function details($id)
    {
        try
        {
            /*@var $user DxUser */ 
            $user        = $this->usermodel->get($id);

            print_r($user);
        }
        catch(Exception $err)
        {
            log_message("error", $err->getMessage());
            return show_error($err->getMessage());
        }
    }
    
    
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */