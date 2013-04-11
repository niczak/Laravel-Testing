<?php

class Test_Controller extends Base_Controller {
	
	public function action_index() {

		$data = $this->_getData();
		$a = array("name"=>"Nicholas", "twitter"=>"@niczak");
		$b = array("database"=>$data);
		return View::make('test.index')->with('data', $a)->with('database', $b);
	}


	private function _getData() {
		$test = Test::all();
		return $test;
	}


}