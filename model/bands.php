<?php

class band {
	public $title;
	public $band_members;
	public $genre;
	
	public function __construct($title, $band_members, $genre)
    {  
        $this->title = $title;
	    $this->band_members = $band_members;
	    $this->genre = $genre;
    } 
}

?>