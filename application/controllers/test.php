<?php

class Test_Controller extends Base_Controller {
	
	public function action_index() {

		$data = $this->_getData();
		$a = array("name"=>"Nicholas", "twitter"=>"@niczak");
		$b = array("database"=>$data);
		$bookmarks = $this->_getBookmarks();
		return View::make('test.index')->with('data', $a)->with('database', $b)->with('bookmarks', $bookmarks);
	}


	private function _getData() {
		$test = Test::all();
		return $test;
	}

	private function _getBookmarks() {
		 Bundle::start('delicious');
		 $bookmarks = Delicious\Delicious::init('niczak')->take(3)->get();
		 return $bookmarks;
	}


}