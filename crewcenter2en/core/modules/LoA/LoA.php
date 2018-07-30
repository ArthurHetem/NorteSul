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

    public $title   = "Leave of Absence Request";

    private static $maxDuration  = 61; // Edit this value to set the max LOA Duration
    
    public function index ()
    {
      if (!Auth::LoggedIn())
      {
        $this->set('message', 'You are not logged in.');
        $this->render('core_error');
      }
      else
      {
        $this->render('loa/loa_index');
      }

    }

    

    public function submit() {
      date_default_timezone_set('UTC');
      $date_now = time();
      $date_ref = strtotime($this->post->day.'-'.$this->post->month.'-'.$this->post->year);
      $days = ($date_ref - $date_now)/(60*60*24);
      
      if ($days > self::$maxDuration || $days < 0)  {
        $this->set('error', 'The requested leave duration exceeds our policy.');
        $this->render('loa/loa_error');
        $this->render('loa/loa_index');
      }
      else 
        if ($this->post->reason == '') { 
            $this->set('error', 'You haven\'t specified a reason for your leaeve of absence.');
            $this->render('loa/loa_error');
            $this->render('loa/loa_index');
          }
        else {
          $data = array('pilotid' => Auth::$userinfo->pilotid,
                        'start' => $date_now,
                        'end' => $date_ref,
                        'reason' => $this->post->reason);

          $pilotid_check = LoAData::CheckPilotID($data['pilotid']);
                
          if ($pilotid_check > 0) {
            $this->set('error', 'There is already a LoA request with your Pilot ID.');
            $this->render('loa/loa_error');
            $this->render('loa/loa_index');
          }
          else {
              LoAData::AddLoA($data);
              $this->sendmail($data);
              $this->render('loa/loa_submitted');
          }
        }
    }
     
    protected function sendmail($data)
    {
          //send mail to admin
          $email_admin = ADMIN_EMAIL;
          $subject_admin = SITE_NAME . ' LoA Request Submitted';
          $message_admin = "Dear admin, a user has sent a LoA Requst. Check the details below. To edit the LoA request, go to your admin panel. <br>
          Here are the details of your request: <br>
          Pilot ID: {$data['pilotid']} <br>
          Start Date: ".date( DATE_FORMAT, $data['start'])."<br />
          End Date: ".date(DATE_FORMAT,$data['end'])." <br />
          Reason: {$data['reason']}<br>
          Thank you for submitting the request.";
          Util::SendEmail($email_admin, $subject_admin, $message_admin);

          //send mail to pilot
          $subject = SITE_NAME . ' Leave of Absence Confirmation';
          $email = Auth::$userinfo->email;
          $message = "Your leave of absence request has been submitted and processed by our system. <br>
          Here are the details of your request: <br>
          Pilot ID: {$data['pilotid']} <br>
          Start Date: ".date( DATE_FORMAT, $data['start'])."<br />
          End Date: ".date(DATE_FORMAT,$data['end'])." <br />
          Reason: {$data['reason']}<br>
          Thank you for submitting the request.";
          Util::SendEmail($email, $subject, $message);
     }
   

}
