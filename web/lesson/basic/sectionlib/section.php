<?php

class Section {
	private $section_name;

	private static function getSectionQuest($chapter) {
		$chapter = "@quest('$chapter')";
		$endChap = '@endquest';
		$f 		 = fopen('../task.list', 'r');
		$quest 	 = '';
		$found   = false;

		while(!feof($f)) {
			$line = trim(fgets($f));
			if(strtolower($line) == $chapter) {
				$found = true;
			}
			else if ($found && strtolower($line) != $endChap) {
				$quest .= $line.PHP_EOL;
			}
			else if ($found && strtolower($line) == $endChap) {
				break;
			}
		}
		return $quest;
	}

	private static function random_color_part() {
	    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
	}

	private static function random_color() {
	    return '#'.self::random_color_part() . self::random_color_part() . self::random_color_part();
	}


	public static function printQuest($dir) {
		$chapter = explode(DIRECTORY_SEPARATOR, $dir);
		$chapter = end($chapter);
		$color   = self::random_color();
		$color2  = self::random_color();

		echo
			'
			<style>
				summary:hover {
					font-weight: 800;
					color: '.$color2.' !important;
				}
			</style>
			<h3 align="right" style="color:'.$color.';">'.$chapter.'</h3>
				<details style="cursor:pointer;">
					<summary style="color:'.$color.';">Toggle Quest</summary>
					<pre>'.self::getSectionQuest($chapter).'</pre>
				</details>
			<hr>';
	}
}