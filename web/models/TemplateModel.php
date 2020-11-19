<?php
class TemplateModel extends DB{
    /*LẤY TEMPLATE BẰNG TÊN WEB*/
    public function LayTemplateBangTenWeb($tenWeb){
        $qr = "SELECT * FROM template WHERE web = '".mysqli_real_escape_string($this->con,$tenWeb)."'";
        return mysqli_query($this->con, $qr);
        //return $qr;
    }
}
?>
