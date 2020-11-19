<?php
require_once 'web/class/StringProcess.php';
class Home extends Controller
{
    // Khai báo model
    public $TemplateModel;
    
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        // Model
        $this->TemplateModel = $this->model("TemplateModel");
    }
    
    function Index($a = NULL)
    {
        $stringProcess = new StringProcess();
        $tenWeb = $stringProcess->get_subdomain_from_url();
        
        /*Lấy template*/
        $template = $this->TemplateModel->LayTemplateBangTenWeb($tenWeb);
        $getRVNow = $template->fetch_assoc();
        $tenTemplate = $getRVNow["template"];
        
        /*View*/
        $this->view($tenTemplate."/main-template", [
            "Page" => $tenTemplate."/pages/main-home"]);
        
    }
}