 <?php
   
   class AAccount 
   {    private $errorarray;
   	    private $con;
        private $bday;
        private $gender;
        private $phone;
   		public	function __construct($conn)
   			{       $this->con = $conn;
   					$this->errorarray = array();
   			}

    private function usernamelength($unn)
    {
      if (strlen($unn)>0)
        { if(strlen($unn)>16)
             return 1;
          else 
             return 0;
        }
      else
        return 2;
    }


    private function passwordlength($pw)
    {
      if (strlen($pw)>0)
      {
        if(strlen($pw)>16)
          return 1;
        else if(strlen($pw)<8)
          return 3;
        else
          return 0;
      }
      else
        return 2;
    }

    public function login($unn,$pw) {
    	//$pw= md5($pw);
     
    	$query = mysqli_query($this->con,"SELECT * FROM userdetails WHERE Username='$unn' AND Password = '$pw'");
    	if(mysqli_num_rows($query) == 1 )
    	{
    		return true;
    	}
    	else
    	{   
          array_push($this->errorarray, CConstants::$loginfailed);
    		  return false;
    	}
    
    

  }

   	public function register($un, $name, $bday, $gender, $phone, $em,$pwd)
   	{
   		$this->validateUsername($un);
  		//$this->validatefname($name);
      $this->bday = $bday;
      $this->gender = $gender;
      $this->validatePhone($phone);
  		//$this->validatelname($ln);
  		$this->validatemails($em);
  		$this->validatepwd($pwd);

  		if(empty($this->errorarray)){
  			// insert into DB
  			return $this->insertuserDetails($un,$name,$bday,$gender,$phone,$em,$pwd);
  		}
  		else {
  			return false;
  		}
   	}		
    


    public function geterror($error)
    {
    	if(!in_array($error, $this->errorarray))
    	{
    		$error="";
    	}
    	return "<span class='errorMessage'>$error</span>"; 
    }

    private function insertuserDetails($un,$name,$bday,$gender,$phone,$em,$pwd) {
                //  INSERT INTO `userdetails`(`Name`, `Username`, `DateOfBirth`, `Gender`, `Email`, `Password`, `PhoneNumber`)
                  // echo "INSERT INTO userdetails VALUES ('$name','$un','$bday','$gender','$phone','$em','$pwd')";
                  $result = mysqli_query($this->con, "INSERT INTO userdetails VALUES ('$name','$un','$bday','$gender','$em','$pwd','$phone')");
                  return $result;
          }

    private function validateUsername($un) {
    	//echo "fncn called";
    
    $checUsernameQuery = mysqli_query($this->con, "SELECT username FROM users WHERE username ='$un' ");
    echo $checUsernameQuery;
    // if(mysqli_num_rows($checUsernameQuery)!=null)
    // {
    // 	array_push($this->errorarray,CConstants::$usernametaken);
    // 	return;
    // }
  }

  	private function validatefname($name) {
    if (strlen($name)>25 || strlen($name)<2) {
     
      array_push($this->errorarray,CConstants::$firstnamechars);
    }
  }
	/*private function validatelname($ln) {
    if (strlen($ln)>25 || strlen($ln)<2) {
     
      array_push($this->errorarray,CConstants::$lastnamechars);
    }
  } */
    private function validatemails($em) {
     

   $checemailQuery = mysqli_query($this->con, "SELECT Email FROM users WHERE Email ='$em' ");
   echo $checemailQuery;
    // if(mysqli_num_rows($checemailQuery)!=null)
    // {
    // 	array_push($this->errorarray,CConstants::$emailexists);
    // 	return;
    // }
  }
  private function validatepwd($pwd) {
    
    if(preg_match('/[^A-Za-z0-9]/', $pwd)){
      #Just to make sure pwd can contain only letters & nos
    	array_push($this->errorarray,CConstants::$passwordnotalphanumeric);
      return;
    }
    
  }
   private function validatePhone($phone){

    if(strlen($phone)>10)
    {
      array_push($this->errorarray,CConstants::$numberlenghty);
    }
    
    if(strlen($phone)<10)
    {
      array_push($this->errorarray,CConstants::$numberlenghty);
    }


    if(preg_match('/[^0-9]/',$phone))
    {
      array_push($this->errorarray,CConstants::$phonenumberwrong);
    }
   } 


   }



 ?>