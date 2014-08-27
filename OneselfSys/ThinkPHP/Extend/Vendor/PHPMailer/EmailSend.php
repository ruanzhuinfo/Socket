<?php 
  //上面定义一个发邮件的类
  /* 
        在一个控制器中使用举例如下:
        Vendor('PHPMailer.EmailSend');
         $msg="msg";
          $arr=array();
		  $arr["UserName"]="15036646038@139.com";
		  $arr["UserPwd"]="zhu@hui123";	  
		  $arr["sendMsg"]=$msg;
		  $arr["EmailTitle"]="zhuguohui";
		  $arr["EmailAddress"]="15036646038@139.com";
		  $arr["ContentType"]="text/html";
		  $send=new     SendMail($arr); //发送邮件
		  //这里有待验证信息
          $send->Send();
  */
   class SendMail //这里定义一个发送邮件的类
   {
   	 private $UserName; //用户名
   	 private $UserPwd;  //用户密码
   	 private $EmailAddress; //用户邮箱地址
   	 private $SendMsg;     //要发送的消息
   	 private $EmailTitle;    
	 private $Host="smtp.139.com";  //服务类型，如果是qq的话"smtp.qq.com" 如果是139邮箱的话是"smtp.139.com"或
      //“smtp.10086.com”
     private  $ContentType="text/plain";   //发送的类型可以为text/html类型或者普通文本类型，这里默认是普通文本类
	 private  $CharSet="utf-8";      //编码类型
   	 public  function  SendMail($configArr)
   	 {
		 //穿过来一个进行设置的数组
   	 	 $this->setConfig($configArr);
   	 }
	 public function setConfig($configArr)
     {
		//设置发送的消息内容
	   if(isset($configArr["UserPwd"]))
		 {
	        $this->UserPwd=$configArr["UserPwd"];
		 }
		if(isset($configArr["UserName"]))
		 {
	        $this->UserName=$configArr["UserName"];
		 }
		if(isset($configArr["sendMsg"]))
		 {
	        $this->SendMsg=$configArr["sendMsg"];
		 }
		 if(isset($configArr["EmailTitle"]))
		 {
		       $this->EmailTitle=$configArr["EmailTitle"];
		 }
		 if(isset($configArr["EmailAddress"]))
		 {
		     $this->EmailAddress=$configArr["EmailAddress"];
		 }
		 if(isset($configArr["Host"]))
		 {
		    $this->Host=$configArr["Host"];
		 }
		 if(isset($configArr["ContentType"]))
		 {
		    $this->ContentType=$configArr["ContentType"];
		 } 
		 if(isset($configArr["CharSet"]))
		 {
		    $this->CharSet=$configArr["CharSet"];
		 }
	 }
   	 public function Send()
   	 {
		 //发送邮件，邮件发送成功返回"OK",发生失败返回失败的原因
   	 	require("class.phpmailer.php"); 
   	 	$mail = new PHPMailer(); 
		$mail->CharSet =$this->CharSet; //为了避免出现乱码，最好使用utf-8
   	 	$mail->IsSMTP(); 
   	 	$mail->Host =$this->Host;
   	 	$mail->SMTPAuth = true;
   	 	$mail->Username =$this->UserName;
   	 	$mail->Password =$this->UserPwd;
   	 	$mail->Port=25;
   	 	$mail->From =$this->UserName;
   	 	$mail->FromName = $this->UserName;
   	 	$mail->AddAddress($this->EmailAddress);
   	 	$mail->Subject =$this->EmailTitle;
   	 	$mail->Body =$this->SendMsg;
		$mail->ContentType=$this->ContentType;
   	 	if(!$mail->Send())
         {
          return $mail->ErrorInfo;
         }
        return "OK"; 
   	 }
   }
?>