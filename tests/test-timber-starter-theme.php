<?php

	class TestTimberStarterTheme extends WP_UnitTestCase {

		function setUp() {
			self::_setupStarterTheme();
			switch_theme('starter-theme');
			require_once(__DIR__.'/../functions.php');
		}

		function tearDown() {
			switch_theme('twentythirteen');
		}

		function testTimberExists() {
			$context = Timber::context();
			$this->assertTrue(is_array($context));
		}

		function testFunctionsPHP() {
			$context = Timber::context();
			$this->assertEquals('StarterSite', get_class($context['site']));
			$this->assertTrue(current_theme_supports('post-thumbnails'));
			$this->assertEquals('bar', $context['foo']);
		}

		function testLoading() {
			$str = Timber::compile('tease.twig');
			$this->assertStringStartsWith('<article class="tease tease-" id="tease-">', $str);
			$this->assertStringEndsWith('</article>', $str);
		}

		static function _setupStarterTheme(){
			$dest = WP_CONTENT_DIR.'/themes/starter-theme';
			$src = realpath(__DIR__.'/../../starter-theme/');
			if ( is_dir($src) && !file_exists($dest) ) {
				symlink($src, $dest);
			}
		}


	}