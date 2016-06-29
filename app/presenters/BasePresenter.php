<?php


namespace App\Presenters;

use Nette;
use Texy;
use Tracy;


class BasePresenter extends Nette\Application\UI\Presenter
{

	protected function notFoundException ( $message = NULL )
	{
		$this -> error ( $message );
	}

	protected function forbiddenException ( $message = NULL )
	{
		throw new Nette\Application\ForbiddenRequestException;
	}

	public function beforeRender() {
		$this->template->productionMode = Tracy\Debugger::$productionMode;
	}

	protected function createTemplate($class = NULL)
	{
	    $template = parent::createTemplate($class);

	    $template->addFilter('metres', function ($s) {
	        
	        if ( $s < 1000 )
	        	return round ( $s, 1 ) . " m";
	        else
	        	return round ( $s / 1000, 1 ) . " km";
	    });

	    $template->addFilter('degree', function ($s) use ($template) {
	        return $s . html_entity_decode('&deg;', ENT_NOQUOTES,'UTF-8');
	    });

	    $template->addFilter('timeleft', function ($s, $round = 1) use ($template) {
	    	if( ! $s instanceof \DateTime )
	    		return $s;
	    	$diff = $s->diff(new Nette\Utils\DateTime());
	    	$r = "";
	    	foreach ( [ 'r' => (object) [ 'part' => 'y', 'next' => 'm', 'ratio' => 12 ], 
	    				'měs.' => (object) [ 'part' => 'm', 'next' => 'd', 'ratio' => 30 ], 
	    				'd' => (object) [ 'part' => 'd', 'next' => 'h', 'ratio' => 24 ], 
	    				'h' => (object) [ 'part' => 'h', 'next' => 'i', 'ratio' => 60 ], 
	    				'min.' => (object) [ 'part' => 'i', 'next' => 's', 'ratio' => 60 ], 
	    				'sec.' => (object) [ 'part' => 's', 'next' => NULL, 'ratio' => 100 ] ] as $val => $type )
	    		if ($diff->{$type->part}) {
	    			$r = ceil($diff->{$type->part} + ($type->next ? $diff->{$type->next} / $type->ratio : 0)) . ' ' . $val;
	    			break;
	    		}
	    	// TODO: Handle correctly when diff is negative (invert === false)
	        return $diff -> invert ? ( $r === "" ? "0 s" : $r ) : "0 s";
	    });

	    $template->addFilter('activate', function($s) use ($template) {
			return preg_replace_callback ( "|\{since:\s*(\d+)\}|" , function($matches) {
				$diff = date('Y') - $matches[1] > 0 ? date('Y') - $matches[1] : 0;
				switch($diff) {
					case 0: return "několik měsíců";
					case 1: return "1 rok";
					case 2:
					case 3:
					case 4: return $diff . " roky";
					default: return $diff . " let";
				}
			}, $s );
	    });

	    $template->addFilter('weekday', function($s) use ($template) {
	    	// TODO: Implement proper weekday handling
	    	$weekday = $s->format("w");
	    	$weekdays = [
	    		"cs" => [
	    			"long" => [ "Neděle", "Pondělí", "Úterý", "Středa", "Čtvrtek", "Pátek", "Sobota" ],
	    			"short" => [ "Ne", "Po", "Út", "St", "Čt", "Pá", "So" ],
	    		]
	    	];
	    	return $weekdays [ "cs" ] [ "long" ] [ $weekday ];
	    });

	    $template->addFilter('join', function($s) use ($template) {
	    	return implode ( ",", $s );
	    });


		$texy = new Texy\Texy();
		// ...a jeho konfigurace

		//$template->registerFilter(new Nette\Templates\LatteFilter);
		$template->registerHelper('texy', array($texy, 'process'));


	    return $template;
	}
}