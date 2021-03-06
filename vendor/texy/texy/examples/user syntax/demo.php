<?php

/**
 * TEXY! USER SYNTAX DEMO
 */


// include Texy!
require_once __DIR__ . '/../../src/texy.php';


$texy = new Texy();

// disable *** and ** and * phrases
$texy->allowed['phrase/strong+em'] = FALSE;
$texy->allowed['phrase/strong'] = FALSE;
$texy->allowed['phrase/em-alt'] = FALSE;
$texy->allowed['phrase/em-alt2'] = FALSE;


// register my syntaxes:


// add new syntax: *bold*
$texy->registerLinePattern(
	'userInlineHandler',  // callback function or method
	'#(?<!\*)\*(?!\ |\*)(.+)'.Texy\Patterns::MODIFIER.'?(?<!\ |\*)\*(?!\*)()#U', // regular expression
	'myInlineSyntax1' // any syntax name
);

// add new syntax: _italic_
$texy->registerLinePattern(
	'userInlineHandler',
	'#(?<!_)_(?!\ |_)(.+)'.Texy\Patterns::MODIFIER.'?(?<!\ |_)_(?!_)()#U',
	'myInlineSyntax2'
);


// add new syntax: .h1 ...
$texy->registerBlockPattern(
	'userBlockHandler',
	'#^\.([a-z0-9]+)\n(.+)$#m', // block patterns must be multiline and line-anchored
	'myBlockSyntax1'
);


/**
 * Pattern handler for inline syntaxes
 *
 * @param Texy\LineParser
 * @param array   reg-exp matches
 * @param string  pattern name (myInlineSyntax1 or myInlineSyntax2)
 * @return Texy\HtmlElement|string
 */
function userInlineHandler(Texy\LineParser $parser, array $matches, $name)
{
	list(, $mContent, $mMod) = $matches;

	$texy = $parser->getTexy();

	// create element
	$tag = $name === 'myInlineSyntax1' ? 'b' : 'i';
	$el = new Texy\HtmlElement($tag);

	// apply modifier
	$mod = new Texy\Modifier($mMod);
	$mod->decorate($texy, $el);

	$el->attrs['class'] = 'myclass';
	$el->setText($mContent);

	// parse inner content of this element
	$parser->again = TRUE;

	return $el;
}


/**
 * Pattern handler for block syntaxes
 *
 * @param Texy\BlockParser
 * @param array      regexp matches
 * @param string     pattern name (myBlockSyntax1)
 * @return Texy\HtmlElement|string|FALSE
 */
function userBlockHandler(Texy\BlockParser $parser, array $matches, $name)
{
	list(, $mTag, $mText) = $matches;

	$texy = $parser->getTexy();

	// create element
	if ($mTag === 'perex') {
		$el = new Texy\HtmlElement('div');
		$el->attrs['class'][] = 'perex';

	} else {
		$el = new Texy\HtmlElement($mTag);
	}

	// create content
	$el->parseLine($texy, $mText);

	return $el;
}


// processing
$text = file_get_contents('syntax.texy');
$html = $texy->process($text);  // that's all folks!

// echo formated output
header('Content-type: text/html; charset=utf-8');
echo $html;

// and echo generated HTML code
echo '<hr />';
echo '<pre>';
echo htmlSpecialChars($html);
echo '</pre>';
