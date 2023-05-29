<?php

/**
 * ShisakuController
 *
 * @author Katsuhiro Ogawa <fivestar@nequal.jp>
 */
class ShisakuController extends Controller
{
  
    protected $auth_actions = array('index','post');


    public function signupAction()
    {

        $user_name = $this->request->getPost('user_name');
        $password = $this->request->getPost('password');

        //$this->db_manager->get('Shisaku')->fetchAllByUserName($id, $user_name);

        $this->db_manager->get('Shisaku')->insert($user_name, $password);

        return $this->render(array(
          
        ));
    }

    public function indexAction()
    {
       
        return $this->render(array(
          
        ));
    }

    public function listAction()
    {

    
        $users = $this->db_manager->get('Shisaku')->fetchAllByIdandUserName();


        return $this->render(array(
            'users' => $users,
        ));
    }


    public function deleteAction($params)
    {
     
        $this->db_manager->get('Shisaku')->deleteById($params['id']);

        return $this->render(array(   
            ));
    }




   


    
}