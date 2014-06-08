<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller{

	public function mail()
	{			
		//设置邮件发送协议，这里使用smtp
		$config['protocol']='smtp';
		//设置我们使用的smtp_host地址
		//找到php配置文件把；extension=php_openssl.dll前面的；去掉
		$config['smtp_host']='ssl://smtp.gmail.com';
		//设置我们的邮箱地址
		$config['smtp_user']='zing.studio.nz@gmail.com';
		//设置邮箱密码
		$config['smtp_pass']='ilgm6927833';
		//设置端口号
		$config['smtp_port']='465';
		//设置默认字符集
		$config['charset']='utf-8';
		//设置邮件类型，可选html或text
		$config['mailtype']='text';
		//设置smtp超时设置(秒)
		$config['smtp_timeout']='3';
		//设置换行符
		$config['newline']="\r\n";
		//以上$config配置信息也可放在config/email.php 文件内，ci能自动使用
		 
		//载入CI的email类
		$this->load->library('email', $config);
		//设置发信人的email地址及名字
		$this->email->from('zing.studio.nz@gmail.com', 'zheli');
		//设置收信人的地址以及名字
		$this->email->to('zing.studio.nz@gmail.com', 'Larry');
		//设置邮件的主题
		$this->email->subject('From Website');
		//设置邮件的内容
		$message="Here is a meaagage from the website.\nName:".$_POST['name']."\nEmail:".$_POST['email']."\nPhone".$_POST['phone']."\nMessage:".$_POST['message'];
		$this->email->message($message);
		//发送邮件
		if($this->email->send()){
			echo 1;
		}else{
			echo 0;
		}		
		 
		//为了查看是否工作，可以使用如下进行Debug
		//return $this->email->print_debugger();
	}
}

?>