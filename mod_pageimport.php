<?php
/*
 * @package         mod_pageimport
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;

// Include helper.php once
require_once dirname(__FILE__).'/simple_html_dom.php';
require_once dirname(__FILE__).'/helper.php';

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', NULL));

//$html = file_get_html( $params->get('url') );
//$html = file_get_html( 'http://localhost/bancada25' );
//print_r($html->find('footer'));

// Create DOM from URL or file
// Create a DOM object from a URL
$html = file_get_html('http://www.google.com/');


print_r($html);
// Find all images
//print_r( $html->find('.conteudo') );
        
        
$pageimported = 'teste';

require JModuleHelper::getLayoutPath('mod_pageimport', 'default');


