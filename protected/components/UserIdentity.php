<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
//		$users=array(
//			// username => password
//			//'demo'=>'demo',
//			//'admin'=>'admin',
//		);
//		if(!isset($users[$this->username]))
//			$this->errorCode=self::ERROR_USERNAME_INVALID;
//		elseif($users[$this->username]!==$this->password)
//			$this->errorCode=self::ERROR_PASSWORD_INVALID;
//		else
//			$this->errorCode=self::ERROR_NONE;
//		return !$this->errorCode;
        $user = UserLoginModel::model()->findByAttributes(array('USER_NAME' => $this->username));
        if ($user == null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;
        } else if ($user->PASSWORD !== crypt($this->password, $user->PASSWORD)) {
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        } else {
            Yii::app()->user->setState("userId", $user->USER_ID);
            $familyRegistration = FamilyRegistration::model()->findByAttributes(array('USER_ID' => $user->USER_ID));
            if($familyRegistration!=null){
                Yii::app()->user->setState("familyId", $familyRegistration->FAMILY_ID);
            }
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function checkPassword($password) {
        $new_hash = crypt($this->password, $password);
        if ($new_hash != $password) {
            return true;
        } else {
            return false;
        }
    }

}