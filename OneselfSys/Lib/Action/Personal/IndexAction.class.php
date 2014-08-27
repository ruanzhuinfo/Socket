<?php
	class IndexAction extends CommonAction {
		public function Index(){
			$this->display('index');
		}

		public function data(){
			$this->display('data');
		}

		public function photo(){
			$this->display('photo');
		}

		public function UploadPto(){
			$this->display('UploadPto');
		}

		public function tie(){
			$this->display('tie');
		}

		public function blog(){
			$this->display('blog');
		}

		public function UpdPto(){
			$this->display('UpdPto');
		}
	}

?>