<?php

class API {
	
	public const BASE = "https://artii.herokuapp.com/";
	
	public function getFonts() {
		return explode("\n", file_get_contents(self::BASE . "fonts_list"));
	}
	
	public function create(String $text, String $font = "") {
		$fontParam = "";
		if ($font != "") $fontParam = "&font=" . $font;
		return file_get_contents(self::BASE . "make?text=" . $text . $fontParam);
	}
	
}
