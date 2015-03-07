<?php

class Cd {
	private $title;
	private $artist;
	private $image;
	private $price;

	function __construct($title, $artist, $image, $price){
		$this->title = $title;
		$this->artist = $artist;
		$this->image = $image;
		$this->price = $price;

	function getTitle(){
		return $this->title;
	}

	function setTitle($new_title){
		$this->title = (string) $new_title;
	}

	function getArtist(){
		return $this->artist;
	}
	function setArtist($new_artist){
		$this->artist = (string) $new_artist;
	}

	function getImage(){
		return $this->image;
	}

	function setImage($new_image){
		$this->image = $new_image;
	}

	function getPrice(){
		return $this->price;
	}

	function setPrice($new_price){
		$this->price = $new_price;
	}
}





































