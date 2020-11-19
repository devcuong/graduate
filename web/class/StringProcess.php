<?php
class StringProcess{
    /*LẤY SUBDOMAIN TỪ URL*/
    function get_subdomain_from_url(){
        return explode(".", $_SERVER['HTTP_HOST'])[0];
    }
}
?>