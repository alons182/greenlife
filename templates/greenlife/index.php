<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.3monkiescr
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets
$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');



?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<jdoc:include type="head" />
     <!--<link rel="icon" type="image/png" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/favicon_32x32.ico">-->
    
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/ui-lightness/jquery-ui-1.10.3.custom.min.css">
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/lightbox/css/lightbox.css" rel="stylesheet">
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
     
     
</head>

<body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>">
	
	   <header id="main-header">
            <div class="inner">
                <div id="logo">
                    <a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Green Life Tour" /></a>
                </div>
                
                <div class="right-info">
                    <div class="idiomas">
                        <a href="/es" title="Español">Español</a>
                        <a href="/en" title="Ingles">Ingles</a>
                    </div>  
                    <div id="redes">
                        <a href="#" class="icon-facebook"></a> 
                        <a href="#" class="icon-twitter"></a>
                        
                    </div>
                    <jdoc:include type="modules" name="btn-reserve" style="none" />
                    
                    <div id="btn_nav"><span class="icon-menu"></span>Menu</div>
                    <nav id="menu">
                        <jdoc:include type="modules" name="menu" style="none" />
                    </nav>
                </div>
                
            </div>
        </header>
        <div id="main">
                     
            <jdoc:include type="component" />
            

        </div>
        <footer id="main-footer">
            <div id="copyright">
                <a href="http://www.avotz.com" target="_blank">Copyright &copy; 2013 | Avotz</a >
            </div>
        </footer>

        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/chosen.jquery.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.validate.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-ui.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.hoverIntent.minified.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/lightbox/js/lightbox-2.6.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/utils.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
    
        <script>
           /* var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));*/
        </script>
        

	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>
