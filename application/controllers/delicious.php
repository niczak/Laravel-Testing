<?php

class Delicious_Controller extends Base_Controller {
	
	public function action_index() {
		$bookmarks = $this->_getBookmarks();
		return View::make('delicious.index')->with('bookmarks', $bookmarks);
	}


	private function _getData() {
		$test = Test::all();
		return $test;
	}

	private function _getBookmarks() {
		 Bundle::start('delicious');
		 $bookmarks = Delicious\Delicious::init('niczak')->take(5)->get();
		 return $bookmarks;
	}


}