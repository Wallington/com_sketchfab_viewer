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
    *   HTML Viwer class for the SketchfabViewer Conponent
    *   
    *  @since 0.0.1
    */

    class SketchfabViewerViewSketchfabViewer extends JViewLegacy
    {
        /*
        *   Display the SketchfabViewer view
        *
        *   @param string  $tpl the name of the template file to parse; auto search through the template paths
        *
        *   @return void
        */
        function display($tpl = null)
        {
            //Assign the data to the view
            $this->msg = $this->get('Msg');

            //display the view
            parent::display($tpl);
        }
    }
?>