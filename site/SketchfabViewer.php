<?php
    /*
    *   
    * @package Joomla.Administrator
    * @subpackage com_sketchfabviewer
    * 
    * @copyright 
    * @license 
    */

    //no direct access to this file
    defined('_JEXEC') or die('Restricted Access');

    /*
    *   JControllerLegacy is a base class for a Joomla! Controller. In order for our website to use controllers, 
    *   we must extend this class in our component. The getInstance static method of the JControllerLegacy class will create a controller.
    *   In the code above, it will instantiate a controller object of a class named HelloWorldController. Joomla will look for the declaration of that class
    */

    //get an instance of the controller prefix by sketchfabviewer
     $controller = JControllerLegacy::getInstance('SketchfabViewer');

    //preform requset task
    $input = JFactory::getApplication()->input;
    $controller->execute($input->getCmd('task'));

    //redirect if set by the controller
    $controller->redirect();
?>