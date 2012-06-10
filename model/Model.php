<?php

include_once("model/bands.php");

class Model {
	public function getBandList()
	{

		return array(
			"The Kills" => new band("The Kills", "Alison \"VV\" Mosshart,Jamie \"Hotel\" Hince", "Indie rock, lo-fi, post-punk revival"),
            "KMFDM" => new band("KMFDM", "Sascha Konietzko, Lucia Cifarelli, Jules Hodgson, Andy Selway, Steve White", "Industrial rock, industrial metal, electro-industrial"),
			"Metallica" => new band("Metallica", "James Hetfield, Lars Ulrich, Kirk Hammett, Robert Trujillo", "Heavy metal")
		);
	}
	
	public function getBand($title)
	{

		$allBands = $this->getBandList();
		return $allBands[$title];
	}
	
	
}

?>