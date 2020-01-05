<?php

namespace Automad\Bootstrap;

defined('AUTOMAD') or die('Direct access not permitted!');

class Autocomplete {
	
	
	/**	
	 *  The main autocomplete function.
	 * 
	 * 	@param array $options
	 * 	@param object $Automad
	 * 	@return string The autocomplete markup
	 */
	
	public function Autocomplete($options, $Automad) {
		
		// Define some defaults.
		$defaults = array(
			'inputSelector' => '#search',
			'treshold' => 3,
			'highlightClass' => 'text-primary',
			'maximumItems' => 10
		);
		
		// Merge defaults with options.
		$options = array_merge($defaults, $options);
		
		$data = array();
		
		$Pagelist = $Automad->getPagelist();
		$n = 1;

		foreach ($Pagelist->getPages() as $Page) {
			$data[$Page->get(AM_KEY_TITLE)] = $n++;
		}

		foreach ($Pagelist->getTags() as $tag) {
			$data[$tag] = $n++;
		}

		$options['data'] = $data;

		$str = '<script>var autocomplete = ' . json_encode($options) . '</script>';
		$file = '/packages/automad/bootstrap-autocomplete/bootstrap-4-autocomplete/dist/bootstrap-4-autocomplete.min.js';
		$str .= '<script src="' . $file . '"></script>';
		$str .= '<script src="/packages/automad/bootstrap-autocomplete/js/script.js"></script>';
		
		return $str;
		
	}
	
	
}