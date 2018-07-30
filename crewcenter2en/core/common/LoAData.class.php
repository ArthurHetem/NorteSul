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

class LoAData extends CodonData {

	public static function CheckPilotID ($pilotid) {
		$pilotid = DB::escape($pilotid);
		$query = "SELECT * FROM loa WHERE pilotid ='$pilotid'";
		$count = DB::num_rows(DB::get_results($query)); 
		return $count;
	}

	public static function AddLoa ($data) {
		$pilotid = DB::escape($data['pilotid']);
 		$start   = DB::escape($data['start']);
 		$end     = DB::escape($data['end']);
 		$reason  = DB::escape($data['reason']);
 		$sql = "INSERT INTO loa (pilotid,start, end, reason) VALUES ('$pilotid', '$start', '$end', '$reason')";
 		$insert = DB::query($sql);
	}

	public static function GetAllRequests () {
		$sql = "SELECT loa.pilotid,
						 loa.start,
						 loa.end,
						 loa.reason,
						 ".TABLE_PREFIX."pilots.pilotid,
						  ".TABLE_PREFIX."pilots.firstname,
						 ".TABLE_PREFIX."pilots.lastname
						 FROM loa 
						 JOIN ".TABLE_PREFIX."pilots ON loa.pilotid =  ".TABLE_PREFIX."pilots.pilotid";
		$ret = DB::get_results($sql);
		return $ret;
	}
	
	public static function GetInfoByID($id) {
		$id = DB::escape($id);
		$sql = "SELECT * FROM loa WHERE pilotid='$id'";
		$query = DB::get_results($sql);
		return $query;
	}

	public  static function DeleteLoA ($id) {
		$id=DB::escape($id);
		$sql   = "DELETE FROM loa WHERE pilotid='$id'";
		$query = DB::query($sql);
	}

}








