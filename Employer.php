<?php 
class Employer{
	public $str="15:1:10,16:2:20";
	public $surname;
	public $name;
	public $pathonomic;
	private $age;
	public function set_age($val) {
		$val=(int)$val;
		if($val>=18 && $val<=65){
			$this->age = $val;
			return true;
		}else{
		    return false;
		}
	}
	public function get_age(){
		return $this->age;
	}
	public function get_info(){
		$str=$this->surname ." ".$this->name ." ".$this->pathonomic;
		return $str;
	}
	public function get_full_info(){
		return $this->get_info()."(".$this->get_age().")";
	}
	
	public function getIds(){
	$string=$this->str;
	$arr=explode(',',$string);
 
	
	$ids="";
	foreach ($arr as $key=>$value){
		if($value!=""){
		$arr2=explode(":",$value);
		$ids .= $arr2[1].",";
		}
	}
	return $ids;
		
	}
	public function __construct($surname="abc",$name="asd",$pathonomic="dfsd",$age=29){
		$this->surname=$surname;
		$this->name=$name;
		$this->pathonomic=$pathonomic;
		$this->age=$age;
		
	}
	
	
}

