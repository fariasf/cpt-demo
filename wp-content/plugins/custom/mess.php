<?php
/**
 * Plugin Name: A mess
 * Description: This plugin is a mess and we want PHPMD to tell us about that
 * Version:     1.0.0
 * Author:      Facundo Farias
 * Author URI:  https://facundofarias.com
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
class foo {
	public function foo() {
		bar::sayhi();
	}
	public function bar() {
		if ( true ) {
			for( $i = 0; $i < 1000; $i++ ) {
				if ( false ) {
					if ( true ) {
						$i--;
					} else {
						// Nothing
					}
				} else {
					if ( $a = $b ) {
						if ( $c ) {
							continue;
						}
					}
				}
			}
		} else {
			if ( !!true ) {
				// More stuff
			}
		}
	}
}
static class bar {
	public function sayhi() {
		echo 'Hi';
	}
}