<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<title><?php echo $this->title; ?> <?php echo $this->error->getMessage();?></title>
    <meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	 <link rel="icon" type="image/png" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/favicon_32x32.ico">
	 
     <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.min.css" type="text/css" />
     <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css" />

	
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
                        <a href="https://www.facebook.com/pages/Costa-Rica-Green-Life-Tours/164672413564461?ref=hl" class="icon-facebook" title="Facebook" target="_blank"></a> 
                        <a href="http://www.tripadvisor.com.mx/Attraction_Review-g309240-d5978695-Reviews-Costa_Rica_Green_Life_Private_Tours-Liberia_Province_of_Guanacaste.html" class="icon-trip" title="Trp Advisor" target="_blank"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/Trip-Advisor-Logo.jpg" alt="Trip Advisor" /></a>
                        

                        
                    </div>
                    <jdoc:include type="modules" name="btn-reserve" style="none" />
                    
                    <div id="btn_nav"><span class="icon-menu"></span>Menu</div>
                    <nav id="menu">
                        <?php if (JModuleHelper::getModule('menu')) : ?>
                        <?php
                                        $module = JModuleHelper::getModule('menu');
                                        echo JModuleHelper::renderModule($module);
                                    ?>
                        <?php endif; ?>
                    </nav>
                </div>
                
            </div>
        </header>
        <div id="main">
                     
            <div class="text404">
                <h1 class="page-header"><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h1>
                    <div class="well">
                    <div class="row-fluid">
                        <div class="span6">
                            <p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
                            <p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
                            <ul>
                                <li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
                                <li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
                            </ul>
                        </div>
                        <div class="span6">
                            <?php if (JModuleHelper::getModule('search')) : ?>
                                <p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
                                <p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
                                <?php
                                    $module = JModuleHelper::getModule('search');
                                    echo JModuleHelper::renderModule($module);
                                ?>
                            <?php endif; ?>
                            <p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
                            <p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><i class="icon-home"></i> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
                        </div>
                    </div>
                    <hr />
                    <p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
                    <blockquote>
                        <span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo $this->error->getMessage();?>
                    </blockquote>
                </div>

           </div>
            

        </div>
        <footer id="main-footer">
            <div id="copyright">
                <a href="http://www.avotz.com" target="_blank">Copyright &copy; 2013 | Avotz</a >
            </div>
        </footer>

        <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/chosen.jquery.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.validate.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-ui.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.hoverIntent.minified.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/lightbox/js/lightbox-2.6.min.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/utils.js"></script>
        <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>-->
    
       
        

    <jdoc:include type="modules" name="debug" style="none" />
</body>

</html>
