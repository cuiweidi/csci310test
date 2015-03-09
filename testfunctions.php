<?php 
class testfunctions extends PHPUnit_Framework_TestCase
{
	public function test_filter_stopwords()
	{
		$words= array("a", "bannana", "man", "the", "it", "went", "to", "the", "market");
		$stopwords= array("the", "it", "to", "a", "you");

		$fitered_words=array();
		$newClass= new functions();
		$filtered_words= $newClass->filter_stopwords($words, $stopwords);
		$result=array("bannana", "man", "went", "market");
		$this->assertEquals($result, $filtered_words);
	}
}	