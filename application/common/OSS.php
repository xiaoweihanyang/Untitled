<?php

namespace app\common;
use OSS\OssClient;
use OSS\Core\OssException;

/**
 * 阿里云存储
 */
class OSS
{

	protected $accessKeyId = "LTAI5tAkyHnTjA5UtKseXS3F";
    protected $accessKeySecret = "lHtYNfK37P92wPcO2g0rkVYzBEj10v";
    protected $endpoint = "https://oss-cn-hangzhou.aliyuncs.com";
    protected $bucket= "g-master-dev";
    protected $ossDir = "g-master/";
    protected $filePath;

    /**
     * 文件上传
     * @param $ossPath OSS文件目录
     * @param $uploadPath 上传本地文件的物理路径
     */
    public function upload($ossPath = null, $uploadPath = null)
    {
 	 try {
            $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);
            $result = $ossClient->uploadFile($this->bucket, $this->ossDir.$ossPath, $uploadPath);
            $arr = array(
                'oss_file' =>$result['info']['url'],
                'oss_path' => $this->ossDir.$ossPath
            );
            return $arr;
        } catch (OssException $e) {
            // printf(__FUNCTION__ . ": FAILED\n");
            // printf($e->getMessage() . "\n");
            // log_msg('文件上传失败',$e->getMessage());
            // log_msg('文件上传失败',$uploadPath.'---'.$this->ossDir.$ossPath);
            return false;
        }
    }

}