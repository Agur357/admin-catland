<?php

/**
 * CatLandApplication.
 *
 * @author Kei Morita 
 */
class CatLandApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        return array(
            '/'
                => array('controller' => 'status', 'action' => 'index'),
            '/status/post'
                => array('controller' => 'status', 'action' => 'post'),
            '/user/:user_name'
                => array('controller' => 'status', 'action' => 'user'),
            '/user/:user_name/status/:id'
                => array('controller' => 'status', 'action' => 'show'),
            '/account'
                => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
                => array('controller' => 'account'),
            '/shisaku'
                => array('controller' => 'shisaku', 'action' => 'index'),
            '/shisaku/signup'
                => array('controller' => 'shisaku', 'action' => 'signup'),
            '/shisaku/list'
                => array('controller' => 'shisaku', 'action' => 'list'),
            '/shisaku/delete/:id'
                => array('controller' => 'shisaku', 'action' => 'delete'),
            '/follow'
                => array('controller' => 'account', 'action' => 'follow'),
            '/admin'
                => array('controller' => 'admin', 'action' => 'index'),
            '/admin/signup'
                => array('controller' => 'admin', 'action' => 'signup'),
        );
    }

    protected function configure()
    {
        $this->db_manager->connect('master', array(
            'dsn'      => 'mysql:dbname=LAA1480512-catlanddb;host=mysql210.phy.lolipop.lan',
            'user'     => 'LAA1480512',
            'password' => 'betora0708',
        ));
    }
}
