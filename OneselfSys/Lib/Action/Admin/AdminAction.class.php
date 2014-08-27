<?php
	class AdminAction extends CommonAction{
		public function index(){
			$this->display('Index');
		}

		public function blog(){

			$this->display('blog');
		}

		public function photo(){
			$this->display('photo');
		}

		public function leave_word(){
			$this->display('leave_word');
		}

		public function about(){
			$this->assign('about',"关于");
			$this->display('about');
		}

		public function add_blog(){
			$this->display('add_blog');
		}

		public function add_blog_data(){
			
		}
	}
?>