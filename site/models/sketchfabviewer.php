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
    *   Sketchfab Viewer Model 
    *
    *   @since 0.0.1
    */

    class SketchfabViewerModelSketchfabViewer extends JModelItem
    {
        // @var string message 
        protected $message;

        /*
        * Get the message
        *
        * @return string the message to be displayed to the user 
        */
        public function getMsg()
        {
            if(!isset($this->message))
            {
                $this->message = "Sketchfab Viewer: Model public function";
            }

            return $this->message;
        }
    }
?>