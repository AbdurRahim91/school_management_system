<?php
	include_once'Session.php';
	include'Database.php';
	
	class User{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}
		
        /*--------- 
        Method for User Signup Process
        ---------*/
		public function UserRegistration($data){
			$firstName = $data['firstName'];
			$lastName  = $data['lastName'];
			$email 	   = $data['email'];
			$password  = $data['password'];
			
			$chk_email = $this->emailCheck($email);
			
			if(empty($firstName) || empty($lastName) || empty($email) || empty($password)){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $msg;
			}
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Email address is not valid!</div>";
				return $msg;
			}
			if($chk_email == true){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Email address is already exist!</div>";
				return $msg;
			}
			if(strlen($password) < 6){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Password length should be at least 6 character!</div>";
				return $msg;
			}
			$password = md5($data['password']);
			
			$sql   = "INSERT INTO user_info(firstName, lastName, password, email) VALUES(:firstName, :lastName, :password, :email)";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':firstName',$firstName);
			$query->bindValue(':lastName',$lastName);
			$query->bindValue(':email',$email);
			$query->bindValue(':password',$password);
			$result = $query->execute();
			if($result){
				$msg = "<div class='alert alert-success'><strong>Success! </strong>You have been registered!</div>";
				return $msg;
			} else{
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>There have a problem to inserting your details!</div>";
				return $msg;
			}
		}
		
        /*--------- 
        Method for Available Email
        ---------*/
		public function emailCheck($email){
			$sql   = "SELECT email FROM user_info WHERE email=:email";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email',$email);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			} else{
				return false;
			}
		}
		
        /*--------- 
        Method for Check User Signin Data Available
        ---------*/
		public function getLoginUser($email,$password){
			$sql = "SELECT * FROM user_info WHERE email=:email AND password=:password";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email',$email);
			$query->bindValue(':password',$password);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
		}
		
        /*--------- 
        Method for User Signin Process
        ---------*/
		public function UserLogin($data){
			$email 	  = $data['email'];
			$password = md5($data['password']);
			
			$chk_email = $this->emailCheck($email);
			
			if(empty($email) || empty($password)){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Field must not be empty!</div>";
				return $msg;
			}
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Email address is not valid!</div>";
				return $msg;
			}
			if($chk_email == false){
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Email address is not exist!</div>";
				return $msg;
			}
			
			$result = $this->getLoginUser($email,$password);
			if($result){
				Session::init();
				Session::set("login",true);
				Session::set("id",$result->id);
				Session::set("firstName",$result->firstName);
				Session::set("lastName",$result->lastName);
				Session::set("loginmsg","<div class='alert alert-success'><strong>Success! </strong>You are Logged In!</div>");
				header("location:index_munaim.php");
			} else{
				$msg = "<div class='alert alert-danger'><strong>Error! </strong>Data not found!</div>";
				return $msg;
			}
		}
	}
?>