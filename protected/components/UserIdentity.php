<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    
//    private $_id;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
            
//            $user=Users::model()->find("LOWE(username)=?",array(strtolower($this->username)));
//
//		if($user===null)
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif(sha1($this->password)!==$user->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//                {
//                        $this->_id=$user->id;
//                        $this->setState("email",$user->email);
//			$this->errorCode=self::ERROR_NONE;
//                }
//		return !$this->errorCode;
                
                $conexion =Yii::app()->db;
                $consulta="select username,password from user where username='".$this->username."' and password='". sha1($this->password)."' and tipo='a'";
                
                $result=$conexion->createCommand($consulta)->query();
                
                $result->bindColumn(1,$this->username);
                $result->bindColumn(2,$this->password);
                
                while($result->read()!==false){
                       $this->errorCode=  self::ERROR_NONE;
                       return !$this->errorCode;
                    
                }
                
                
	}
}