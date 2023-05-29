<?php 

class AdminRepository extends DbRepository
{
	public function insert($name,$password)
	{
		$now = new DateTime();

		$sql = "
		    INSERT INTO admin(name,password,created_at,updated_at)
		    	VALUES(:name,:password,:created_at,:updated_at)
		";

		$stmt = $this->execute($sql,array(
			//':id'             => $id,
			':name'           => $name,
			//':login_id'       => $login_id,
			':password'       => $password,
			//':auth_level_type'=> $auth_level_type,
			':created_at'    => $now->format('Y-m-d H:i:s'),
			':updated_at'     => $now->format('Y-m-d H:i:s'),

		));
	}
}



