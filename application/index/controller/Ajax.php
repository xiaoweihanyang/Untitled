<?php

namespace app\index\controller;

use app\common\Upload;
use think\Request;


/**
 * Ajax异步请求接口
 * @internal
 */
class Ajax extends \think\Controller
{

    /**
     * 普通上传文件
     */
    public function upload()
    {    
        $attachment = null;
        //默认普通上传文件
        $file = $this->request->file('file');
        $upload = new Upload($file);
        $attachment = $upload->upload();
        $this->success("成功", 'index/index', ['url' => $attachment['url'], 'fullurl' => $attachment['url']]);
    }


    /**
     * 上传文件(OSS云存储)
     */
    public function ossUpload()
    {
        $attachment = null;
        //默认普通上传文件
        $file = $this->request->file('file');
        $upload = new Upload($file);
        $attachment = $upload->ossUpload();

        $this->success("成功", 'index/index', ['url' => $attachment['url'], 'fullurl' => $attachment['url']]);
        
    }


}
