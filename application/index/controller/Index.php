<?php
namespace app\index\controller;
use app\common\Upload;
use think\Request;

class Index extends \think\Controller
{
    public function index()
    {
    	return $this->view->fetch();
    }

    public function add()
    {
        $params = $this->request->post("row/a");
        var_dump($params);
    }
}
