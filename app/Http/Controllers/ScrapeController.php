<?php namespace App\Http\Controllers;

class ScrapeController extends Controller {
	public function getIndex() {
		echo "Scrape index page.";
	}

	public function getNode($node) {
		$data = array('node' => $node);
		return View::make('node', $data);
	}
}
?>