<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
				/**
				 * @var string the default layout for the controller view.
				 */
				public $layout='main';

				/**
				 * @var this variable contains common Main Menu 
				 */
				public $mainMenu=array(
								array('label'=>'Home', 'url'=>array('site/page','view'=>'index')),
								array('label'=>'Page One', 'url'=>array('site/page','view'=>'page1')),
								array('label'=>'Page Two', 'url'=>array('site/page','view'=>'page2')),
								array('label'=>'Page Three', 'url'=>array('site/page','view'=>'page3')),
								array('label'=>'About', 'url'=>array('site/page','view'=>'about')),
				);
}

?>
