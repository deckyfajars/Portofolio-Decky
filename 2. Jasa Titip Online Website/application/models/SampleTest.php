<?php
	class SampleTest extends \PHPUnit_Framwork_TestCase
	{
		public function testThatCanGetNamaBarang()
		{
			$user=new M_pelanggan;
			
			$this->assertEquals($user->getAllBarang());
		}
	}
?>