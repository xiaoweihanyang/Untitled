
## 目录结构

目录结构如下：

~~~
├─application           应用目录
│  ├─common             公共模块目录（可以更改）
│  │  ├─Upload.php      文件上传类
│  │  ├─OSS.php         阿里云存储类
│  │
│  └─controller         
│     ├─ajax.php        Ajax异步请求接口
│     └─index.php       模拟添加
│
├─public  
│  ├─assets     
│  │  ├─img             文件后缀名图片（svg格式）
│  │  ├─js              快速测试文件
│  │  │  ├─upload.js    核心控制层
│  │  │  ├─require.js   
│  │  │  └─require-main.js 
│  │  └─libs
│  │     └─dropzone.js  文件上传预览
│  └─uploads            上传文件保存目录
~~~

详细开发文档参考 [README.docs]
