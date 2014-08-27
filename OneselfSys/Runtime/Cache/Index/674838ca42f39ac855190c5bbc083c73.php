<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="__PUBLIC__/img/title.ico" />
    <meta name="baidu-site-verification" content="SJUcrwgRw0" />
    <meta http-equiv="content-type" content="text/html;charset=utf-8"> 
    <meta http-equiv="X-Frame-Options" content="SAMEORIGIN">  
    <meta http-equiv="content-language" content="zh-CN" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="marchsoft marchsoft.cn">
    <meta name="copyright" content="© www.marchsoft.cn" />
    <meta name="description" content="这是一个专注于科技，专注于创新，专业于网络软件事业的学生团队，大学生个人IT博客园区，大学生个人说吧">
    <meta name="keywords" content="我们一起来说吧、IT博客、IT社区、IT论坛、大学生个人说吧、三月软件工作室、fantengfei、范腾飞、大学生个人网站、fantengfei.cn" />
    <meta name="robots" content="index,follow,archive" />
    <link href="__PUBLIC__/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="__PUBLIC__/bootstrap/css/style.css"  rel="stylesheet">
    <link href="__PUBLIC__/css/comm.css" rel="stylesheet" >
    <link rel="stylesheet" href="__PUBLIC__/css/home.css">
	 <!--[if lt IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie7buttonfix.css"><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="__ROOT__/Public/bootstrap/css/bootstrap-ie8buttonfix.css"><![endif]--> 
    <script type="text/javascript" src="__ROOT__/Public/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="__PUBLIC__/js/head.js"></script>
</head>
<body id="body_bg">
  <div id='div-bg'></div>
	  <div class="navbar-inner head">
	   	<div id="top_nav">
              <span style="float:left;width:450px;">
           			<a class="logo_link" href="__ROOT__/Index.php">
                       <img style="height:35px;" src="__PUBLIC__/img/logo.png">
                </a>
           			<a class="a_nav brand" href="__ROOT__/Index.php">首页</a>
           			<a class="a_nav brand" href="<?php echo U('Index/Index/shuo');?>">说吧</a>
           			<a class="a_nav brand" href="<?php echo U('Index/Index/blog');?>">博客</a>
                <a class="a_nav brand" href="<?php echo U('Index/Index/leave_word');?>">留言</a>
                <a class="a_nav brand" href="<?php echo U('Index/Index/about');?>">关于</a>
               </span>
   			<div class="right">
          <span class="login_span login1 brand">
            <img src="__PUBLIC__/img/logo.png">登陆
          </span>
         <!--  <span class="login_span login2">
            <img class="qq_img" src="__PUBLIC__/img/qq.png">QQ登陆&nbsp;
          </span> -->
   				<font style="display:inline-block;text-align:center">|</font>
   				<a class="register" href="javascript:reg();">注册</a>
               <div style="clear:both;"></div>
   			</div>
        <div style="line-height:40px;width:70px;float:right;color:#fff;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;"><a style="color:#ccc;text-decoration:none;" href="<?php echo U('/Personal/Index/tie');?>">阳光照耀下的范范</a></div>
	   	</div>
	
      <div class="login oneself_login">
          <span onclick="$('.oneself_login').fadeOut();$('.pwd,.verify').val('');" style="display:inline-block;float:right;padding:0 10px 5px 10px;cursor:pointer">x</span>
          <div style="margin:0 auto;padding:30px 10px 0px 20px;">
              <p>&emsp;账号：<input type="text" class="idcard" name="idcard"  placeholder="请输入账号..."></p>
              <p>&emsp;密码：<input type="password" class="pwd" style='font-size:12px;' name="pwd"  placeholder="请输入密码..."></p>
              <p>验证码：<input type="text" class="verify" placeholder="请输入验证码..." style="width:120px;">&nbsp;<img src="__ROOT__/Index/Index/verify" onclick="this.src='__ROOT__/Index/Index/verify?'+Math.random()"></p>
              <input type="button" class="btn btn-primary btn-submit" style="margin-left:52px;" value="登陆">&emsp;
              <input type="button" class="btn cancer" value="取消">
              <input type="hidden" value="__ROOT__/Index/Index/" id="url">
          </div>
      </div>

      <!-- <div class="login qq_login">
         <div style="width:270px;margin:0 auto;margin-top:20px;">
            <p>账号：<input type="text" name="idcard" class="idcard"  placeholder="请输入账号..."></p>
            <p>密码：<input type="password" name="idcard" class="pwd"  placeholder="请输入密码..."></p>
            <span style="display:inline-block;width:30px;"></span>
            <input type="button" class="btn btn-primary" value="登陆">
            <input type="button" class="btn cancer" value="取消">
         </div>
         <div style="float:right;margin-right:20px;height:50px;padding-top:18px;"><font style="font-size:12px;"><a target="_blank" href="http://aq.qq.com/cn2/index">忘记密码？</a>&nbsp;|&nbsp;<a target="_blank" href="http://zc.qq.com/chs/index.html">注册</a></font></div>
      </div> -->
    </div>
    <div><?php $title = "我们一起来说吧"; ?></div>
<div id="content" style="margin-top:70px;">
	<div style="padding-top:1px;">
		<LINK href="__PUBLIC__/filem/css/style.css" type='text/css' rel='stylesheet'>
<SCRIPT src="__PUBLIC__/filem/js/js.js" type='text/javascript'></SCRIPT>
<DIV id='imgPlay'>
	<UL class='imgs' id='actor'>
	  <LI><A href="#"><IMG src="__PUBLIC__/filem/images/01.jpg"></A></LI>
	  <LI><A href="#"><IMG src="__PUBLIC__/filem/images/02.jpg"></A></LI>
	  <LI><A href="#"><IMG src="__PUBLIC__/filem/images/03.jpg"></A></LI>
	  <LI><A href="#"><IMG src="__PUBLIC__/filem/images/04.jpg"></A></LI>
	</UL>
<DIV class='num' id="numInner"></DIV>
</DIV>
	</div>
	<div id="index">
		<div class="span2 l_menu" style="margin:0;padding-top:5px;">
			<div class="div-img">
				<center><a target='_blank' href="__APP__/Personal/Index/tie">
					<img width=85% src="__PUBLIC__/images/default1.png" class="img-polaroid" style="width:85%;"></a>
				</center>
			</div>
			<div style="margin-top:10px;">
			<a class="l_nav" href="__ROOT__/Index.php">&emsp;<i class="icon-home"></i>&nbsp;首页</a>
			<a class="l_nav" href="<?php echo U('Index/Index/shuo');?>">&emsp;<i class="icon-list-alt"></i>&nbsp;说吧</a>
			<a class="l_nav blog_nav" href="<?php echo U('Index/Index/blog');?>">&emsp;<i class="icon-pencil"></i>&nbsp;博客&emsp;
				<font class="sub_nav" style="display:none;color:#0088CC;" onclick="window.open('<?php echo U('Index/index/AddBlog');?>');">写博客</font>
			</a>
			<a class="l_nav" href="<?php echo U('Index/Index/leave_word');?>">&emsp;<i class="icon-envelope"></i>&nbsp;留言</a>
			<a class="l_nav" href="<?php echo U('Index/Index/about');?>">&emsp;<i class=" icon-map-marker"></i>&nbsp;关于</a>
			</div>
			<div style="border-top:1px solid #CFEBF5;width:80%;margin:20px auto;padding-top:10px;">
				<a class="l_nav y_nav" target="_blank" href="http://www.marchsoft.cn/"><i class="icon-share-alt"></i>&nbsp;三月软件</a>
				<a class="l_nav y_nav" target="_blank" href="http://www.cnblogs.com/"><i class="icon-share-alt"></i>&nbsp;博客园</a>
				<a class="l_nav y_nav" target="_blank" href="http://weibo.com/"><i class="icon-share-alt"></i>&nbsp;新浪微博</a>
				<a class="l_nav y_nav" target="_blank" href="http://t.qq.com/"><i class="icon-share-alt"></i>&nbsp;腾讯微博</a>
			</div>
		</div>
		<div id='index-cnt' class="span8" style="width:634px;margin:0;border:1px solid #CFEBF5;margin-top:5px;
	min-height:600px;padding-left:20px;background-color:#fff;margin-bottom:5px;overflow:hidden;">
			<title>说吧-<?php echo $title; ?></title>
<div id="shuo" style="width:96%">
	<div class='top-title'>
		<div class='top-title-sub'>
			<p class='big-title'>站内说吧</p>
			<p>简介：站内尽情的说吧！这里是我们的天地！我们畅所欲言！</p>
			<table class='huo-img'>
				<tr>
					<td width='70px'>活跃分子：</td>
					<td>
						<a target='_blank' href='#' title='阳光照耀下的范范'><img src='__PUBLIC__/images/2.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/3.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/8.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/9.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/4.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/7.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/6.jpg'></img></a>
						<a target='_blank' href='#'><img src='__PUBLIC__/images/1.jpg'></img></a>
					</td>
				</tr>
			</table>
			<div class='search-nav'>
				<span class="selected-nav-tie nav-tie">全部</span>
				<span class='nav-tie'>文字</span>
				<span class='nav-tie'>图片</span>
				<button class='btn btn-info btn-publish' style='*margin-top:1px;font-size:12px;'>我要发帖</button>
		  		<div class="search-title input-append">
				  <input class="span2" id="appendedInput" placeholder='搜索标题' type="text">
				  <span class="add-on ico-search"></span>
				</div>
			</div>
		</div>
	</div>
	
	<span style='display:block;color:#999;line-height:10px;'>共0个博客</span>
	<div class='all-tie-list'>
			<ul>
				<li>
					<table class='tie-hot-list'>
						<td width="40px" valign="top"><div class="td-req" title="回复1">1</div></td>
						<td width="350px" >
							<div class="td-title">
								<a title="#" href="#">我不是明星，星君剧透第一波：真相只有一</a>
							</div>
							<div class="td-summ">我不是明星吧微吧【2013-08-21签到簿】昨天共有11人签到</div>
						</td>
						<td width="80px">
							<div class="td-nick"><a href="#" title="阳光照耀下的范范"><i title="发贴人" class="fa-tie"></i>&nbsp;阳光照耀下的范范</a></div>
							<div class="td-time">今天 08:45</div>
						</td>
					</table>
				</li>
			</ul>
		</div>


</div>
		</div>
		<div style="clear:both;"></div>
	</div>
</div>
	<div style="clear:both;"></div>
	<div id="footer">
		<font class="font_footer">
			<center>
			<font>版权所有：范腾飞&emsp;CopyRight&nbsp;2012&nbsp;<a class="font_footer link" target="_blank" href="http://www.marchsoft.cn">三月软件工作室</a></font>
			</center>
		</font>
	</div>
	<script style="text/javascript">
		$(function(){
			var hei = $('#content').height();
			$(".menu").css('height',(hei-5)+"px");
			$("textarea[maxlength]").keyup(function(){ 
		        var area=$(this); 
		        var max=parseInt(area.attr("maxlength"),10);   //获取maxlength的值 
		        if(max>0){ 
		            if(area.val().length>max){                 //textarea的文本长度大于maxlength 
		                area.val(area.val().substr(0,max));    //截断textarea的文本重新赋值             
		            } 
		        } 
	     	}); 
		});
	</script>
</body>
</html>
<script style="text/javascript" src="__PUBLIC__/js/index.js"></script>