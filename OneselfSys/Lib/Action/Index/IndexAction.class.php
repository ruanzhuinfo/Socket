<?php
class IndexAction extends CommonAction {
    public function index(){
		$this->display('index');
    }

    //验证码
    Public function verify(){    
    	import('ORG.Util.Image');    
    	Image::buildImageVerify(4,1,'png',"60","25","verify");
    }

    public function shuo(){
		$this->display('shuo');
	}

	public function sub_shuo(){
		
	}

	public function leave_word(){
		$this->display('leave_word');
	}

	public function about(){
		$this->display('about');
	}

	public function blog(){
		$this->display('blog');
	}

	public function AddBlog(){
		$this->display('add_blog');
	}
}