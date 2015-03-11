<?php

	/**
	* 
	*/
	class songListTest extends PHPUnit_Framework_TestCase
	{
		
		function test_constructor()
		{
			$songList=new Songlist("AWord");
			$this->assertEquals("AWord",$songList->getWord());
			return $songList;
		}
		/**
		*@depends test_constructor
		**/
		function test_lists()
		{

		}
		function StringGenerator(){
			$characters="0123456789abcdefghijklmnopqrstuvwxyz";
			$cl=strlen($characters);
			$length=rand(5,10);
			$randomString='';
			for($i=0;$i<$length;$i++){
				$length
			}
		}
	}
?>