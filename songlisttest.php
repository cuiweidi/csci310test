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
		}
	}
?>