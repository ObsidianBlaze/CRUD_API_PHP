<?php 
    class delete_user{

        private $conn;

        // constructor
        function __construct() {
            require_once 'android_login_connect.php';
            // connecting to database
            $db = new android_login_connect();
            $this->conn = $db->connect();
        }
    
        // destructor
        function __destruct() {
    
        }

        //Deleting users info with the use of an email address.
        public function deleteUser($email){
            $stmt = $this->conn->prepare("DELETE FROM android_php_post where email = ?");
            $stmt->bind_param("s", $email);
            $result = $stmt->execute();

            if($result){
                return true;
                $stmt->close();

            }
            else{
                return false;
                $stmt->close();

            }
    
        }
    

    }

?>