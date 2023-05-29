<?php

class ShisakuRepository extends DbRepository
{
	public function insert($user_name,$password)
	{
		//$password = $this->hashPassword($password);
		$now = new DateTime();

		$sql = "
		    INSERT INTO shisaku(user_name,password,created_at)
		        VALUES(:user_name,:password,:created_at)
		";

		$stmt = $this->execute($sql,array(
			':user_name' => $user_name,
			':password'  => $password,
			':created_at'=> $now->format('Y-m-d H:i:s'),
		));

	}

	
	public function hashPassword($password)
	{
		return sha1($password . 'SecretKey');
	}

    
    public function fetchAllByIdandUserName()
    {
        $sql = "SELECT * FROM shisaku";

        return $this->fetchAll($sql,array(

		
		));
    }


    public function deleteById($id)
    {
    	$sql = "DELETE FROM shisaku WHERE id =:id";

    	return $this->execute($sql,array(
    		':id'        => $id,
        	
        ));
    }




}