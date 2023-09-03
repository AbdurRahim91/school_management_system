<?php
    class Session{
        /*--------- 
        Method for initialize session
        ---------*/
        public static function init(){
            if(version_compare(phpversion(), '5.4.0', '<')){
                if(session_id == ''){
					session_start();
				}
            } else{
                if(session_status() == PHP_SESSION_NONE){
                    session_start();
                }
            }
        }

        /*--------- 
        Method for pass information to session
        ---------*/
        public static function set($key, $val){
            $_SESSION[$key] = $val;
        }

        /*--------- 
        Method for retrive information from session
        ---------*/
        public static function get($key){
            if(isset($_SESSION[$key])){
                return $_SESSION[$key];
            } else{
                return false;
            }
        }

        /*--------- 
        Method for prevent access without login
        ---------*/
        public static function chkLogin(){
            if(self::get('login') == false){
                header("location:signin_munaim.php");
            }
        }

        /*--------- 
        Method for prevent access to signin page when logged in
        ---------*/
        public static function chkSession(){
            if(self::get('login') == true){
                header("location:index_munaim.php");
            }
        }

        /*--------- 
        Method for unset & destroy session
        ---------*/
        public static function destroy(){
            session_unset();
            session_destroy();
            header("location:signin_munaim.php");
        }
    }
?>