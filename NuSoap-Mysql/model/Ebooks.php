<?php
require_once "../core/AbstractModel.php";
class Libro extends AbstractModel{

	public function showEbooks(){
		$this->setQuery("SELECT * FROM libros");
		$data = $this->getResultsQuery();
		if($this->countRows > 0){
			$ebooks = $this->rows;
		}
		return $ebooks;
	}
}
