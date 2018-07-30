<?php
/**
* Leave of Absence (LoA) v.1.0 Module
*
* phpVMS Module for pilots to submit a LoA request that is stored in a database
* and an option for staff to view all the LoA requests through the admin panel
* This module is released under the Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License
* You are free to redistribute and alter this work as you wish but you must keep the original 'copyright' information on all the places it comes in the original work.
* You are not allowed to delete the copyright information and/or gain any profit by adopting or using this module.
*
* @author Sava Markovic - savamarkovic.com
* @copyright Copyright (c) 2016, Sava Markovic
* @link http://www.savamarkovic.com
* @license http://creativecommons.org/licenses/by-nc-sa/4.0/
*/

class LoA extends CodonModule {

    public $title = "Leave of Absence Admin";
    
    public function HTMLHead() {
           $this->set('sidebar', 'loa/loa_admin_sidebar.php');
    }

    public function NavBar () {
            echo '<li><a href="'.SITE_URL.'/admin/index.php/LoA">LoA Admin</a></li>';
    }

    public function index () {
        $version = '1.0';
        $leaves = LoAData::GetAllRequests(array());
        $this->set('all_leaves', $leaves);
        $this->render('loa/loa_admin_index');
        $this->check($version);
     }

     public function viewLOA() {  
        $id = $this->get->id;        
        $getinfo = LoAData::GetInfoByID($id);
        $this->set('info', $getinfo);
        $this->render('loa/loa_admin_view_request');
     }

     public function confirmDeleteLOA() {
       $id = $this->get->id;        
        $getinfo = LoAData::GetInfoById($id);
        $this->set('info', $getinfo);
        $this->render('loa/loa_admin_confirm_delete_request');
     }

     public function deleteLOA() {
        $id = $this->get->id;
        $getinfo = LoAData::DeleteLoA($id);
        $this->set('message', 'The LoA Reqest has been successfuly deleted from the database.');
        $this->render('loa/loa_admin_delete_request');
        $this->index();
     }

     protected function check ($version) {
        $version_to_check = $version;
        $url = 'http://www.savamarkovic.com/loa.csv';
        $file = new CodonWebService();
        $read = @$file->get($url);
        $read = explode(",", $read);
        if ($read[0] == $version_to_check) {
            echo '<p id="success">Your version of this module is up to date. Wohooooo! ;))</p>';
        } else {
            echo '<h4>UPDATE FOUND!</h4>';
            echo '<p id="error">There is a newer version of the LoA Module! Here is the information associated with the update. <br/><b>Version:
            '.$read[0].' - '. $read[1].' <br /></b>
            For update instructions - check the docs for updating from <b>'. $version.' </b>to <b>'.$read[0].' 
            </b><br /><br /> Please <a href="https://github.com/savamarkovic/phpvms_loa">click here</a> to receive the updated version.</p>';
        }
    }

}
