<?php 
    class User{
        
        private $userName;
        private $userPass;
        private $userMail;

        function _construct($userN,$userP,$userM){
                $this->setUserName($userN);
                $this->setUserPass($userP);
                $this->setUserMail($userM);
        }

        public function getUserName()
        {
                return $this->userName;
        } 

        public function setUserName($userName)
        {
                $this->userName = $userName;

                return $this;
        } 

        public function getUserPass()
        {
                return $this->userPass;
        }

        public function setUserPass($userPass)
        {
                $this->userPass = $userPass;

                return $this;
        }

        public function getUserMail()
        {
                return $this->userMail;
        } 

        public function setUserMail($userMail)
        {
                $this->userMail = $userMail;

                return $this;
        }
        
    }

?>