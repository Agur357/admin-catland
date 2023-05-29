<?php


class AdminController extends Controller
{
	public function indexAction()
	{
		return $this->render(array(
          
        ));
	}

	public function signupAction()
    {
    	$name     = $this->request->getPost('name');
    	$password = $this->request->getPost('password');

    	$this->db_manager->get('Admin')->insert($name, $password);

    	return $this->render(array(
          
        ));
    }

}