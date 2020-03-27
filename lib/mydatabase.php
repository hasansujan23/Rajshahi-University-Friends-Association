<?php 

/**
 * 
 */
class Database
{

	public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbname = DB_NAME;

	public $link;
	public $error;
	
	function __construct()
	{
		$this->getConnection();
	}

	private function getConnection(){
		$this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);

		if(!$this->link){
			$this->error="Connection fail....!".$this->link->connect_error;
			return false;
		}
	}

	public function getAll($query){
	    $result=mysqli_query($this->link,$query);
        return $result;
    }

    public function getPopularPost($query){
        $result=mysqli_query($this->link,$query);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function getLatestPost($query){
        $result=mysqli_query($this->link,$query);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function getAllSubject($query){
        $result=mysqli_query($this->link,$query);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function updatePostCount($query){
        $result=mysqli_query($this->link,$query);
        if($result){
            return $result;
        }else{
            return false;
        }
    }

    public function getExecute($query){
        $result=mysqli_query($this->link,$query);
        $row=mysqli_affected_rows($this->link);
        if($row>0){
            return $row;
        }else{
            return mysqli_error($this->link);
        }
    }

    public function checkUser($userName){
	    $query="select * from t_user_login where user_id='$userName'";
	    if($userName==""){
	        echo "<span style='color: red;'>Please fill up</span>";
	        exit();
        }else{
            $result=mysqli_query($this->link,$query);
            $row=mysqli_num_rows($result);

            if($row>0){
                echo "<span style='color: red;'>Already exists</span>";
                exit();
            }else{
                echo "<span style='color: green;'>Accepted</span>";
                exit();
            }
        }
    }

}

 ?>