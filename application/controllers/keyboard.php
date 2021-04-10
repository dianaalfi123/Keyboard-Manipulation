<?php

class Keyboard extends CI_Controller {
	function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
	}
	public function index(){
		$a = array("1","2","3","4","5","6","7","8","9","0");
		$b = array("q","w","e","r","t","y","u","i","o","p");
		$c = array("a","s","d","f","g","h","j","k","l",";");
		$d = array("z","x","c","v","b","n","m",",",".","/");



		$e = array("0","9","8","7","6","5","4","3","2","1");
		$f = array("p","o","i","u","y","t","r","e","w","q");
		$g = array(";","l","k","j","h","g","f","d","s","a");
		$h = array("/",".",",","m","n","b","v","c","x","z");

		$i = array("z","x","c","v","b","n","m",",",".","/");
		$j = array("a","s","d","f","g","h","j","k","l",";");
		$k = array("q","w","e","r","t","y","u","i","o","p");
		$l = array("1","2","3","4","5","6","7","8","9","0");

		$data = array(
			"a"=>$a,
			"b"=>$b,
			"c"=>$c,
			"d"=>$d
		);

		if(isset($_GET['submit'])){

			$hasil = $_GET['code']; 
			if($hasil == 'H' || $hasil == 'h'){
				$data = array(
					"a"=>$e,
					"b"=>$f,
					"c"=>$g,
					"d"=>$h
				);
			}else if ($hasil == 'V' || $hasil == 'v') {
				$data = array(
					"a"=>$i,
					"b"=>$j,
					"c"=>$k,
					"d"=>$l
				);
			}else if($hasil == 'N' || $hasil == 'n'){
				$data = array(
					"a"=>$a,
					"b"=>$b,
					"c"=>$c,
					"d"=>$d
				);
			}else{
				if($hasil == '5'){
					$cari_huruf = array_slice($a, 0, 5, true);
					$huruf_baru = array_slice($d, 5, 5, true);
					$a_shift = str_replace($cari_huruf, $huruf_baru, $a);
					$cari_huruf1 = array_slice($d, 5, 5, true);
					$huruf_baru1 = array_slice($a, 0, 5, true);
					$d_shift = str_replace($cari_huruf1, $huruf_baru1, $d);
					$data = array(
					"a"=>$a_shift,
					"b"=>$b,
					"c"=>$c,
					"d"=>$d_shift
				);
				}
				
			
				
			}

		}
		
		$this->load->view('keyboard_view',$data);
	}




}

?>