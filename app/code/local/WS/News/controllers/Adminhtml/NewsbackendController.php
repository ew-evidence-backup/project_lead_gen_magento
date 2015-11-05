<?php
class WS_News_Adminhtml_NewsbackendController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("News"));
	   $this->renderLayout();
    }
}