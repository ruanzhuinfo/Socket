<?php
	class read
	{
		
		private $objPHPExcel;
		private $highestRow;
		private $highestColumn;
		private $sheet;
		private $objReader;
		public function read($uploadfile)
		{
			include("PHPExcel.php");
			include("PHPExcel/IOFactory.php");
			include("PHPExcel/Reader/Excel5.php");
			$this->objReader = PHPExcel_IOFactory::createReader('Excel5');//use excel2007 for 2007 format
			$this->objPHPExcel = $this->objReader->load($uploadfile);	
			$this->sheet = $this->objPHPExcel->getSheet(0);
			$this->highestRow = $this->sheet->getHighestRow(); // 取得总行数
			$this->highestColumn = $this->sheet->getHighestColumn(); // 取得总列数
		}
		public function uploadFile($j)
		{
		
				for($k='A';$k<=$this->highestColumn;$k++)
				{
				 $kj=trim(iconv('utf-8','gbk',$this->objPHPExcel->getActiveSheet()->getCell("$k$j")->getValue()));
				 if($kj=="")
				 {
					break ;
				 }
				 else
				 {
					$str .= $kj.'\\';//读取单元格
				 }
				}
				//explode:函数把字符串分割为数组。
				$str=substr($str,0,strlen($str)-1);
				$strs = explode("\\",$str);
				$r = eval('return '.iconv('gbk','utf-8',var_export($strs,true)).';');
				return $r;
			
		}
		public function getRow()
		{
			return $this->highestRow;
		}
	}
?>