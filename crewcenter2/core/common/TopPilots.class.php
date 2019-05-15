<?php
class TopPilots extends CodonData
{
	#Best Flight Time For Today.
	public static function BestFlightTime_Day()
		{
			$sql="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND DAY(submitdate) = DAY(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Flight Time For This Week.	
	public static function BestFlightTime_Week()
		{
			$sql="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND WEEK(submitdate, 1) = WEEK(now(), 1) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Flight Time For This Month.
	public static function BestFlightTime_Month()
		{
			$sql="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Flight Time For This Year.
	public static function BestFlightTime_Year()
		{
			$sql="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($sql);
		}
	
	#Best Flight Time All Time.
	public static function BestFlightTime_Alltime()
		{
			$sql="SELECT t1.pilotid,t1.flighttime,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(flighttime) as flighttime 
							FROM ".TABLE_PREFIX."pireps 
								WHERE accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY flighttime DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Distance Today
	public static function BestDistance_day()
		{
			$sql="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM phpvms_pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND DAY(submitdate) = DAY(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN phpvms_pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Distance This Week
	public static function BestDistance_week()
		{
			$sql="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND WEEK(submitdate, 1) = WEEK(now(), 1) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Distance This Month
	public static function BestDistance_month()
		{
			$sql="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Distance This Year
	public static function BestDistance_year()
		{
			$sql="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($sql);
		}
	
	#Best Distance All Time
	public static function BestDistance_Alltime()
		{
			$sql="SELECT t1.pilotid,t1.distance,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(distance) as distance 
							FROM ".TABLE_PREFIX."pireps 
								WHERE accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY distance DESC LIMIT 10";
											return DB::get_results($sql);
		}
		
	#Best Revenue For Today.
	public static function BestRevenue_day()
		{
			$sql="SELECT t1.pilotid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(revenue) as revenue 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND DAY(submitdate) = DAY(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Revenue For This Week	
	public static function BestRevenue_week()
		{
			$sql="SELECT t1.pilotid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(revenue) as revenue 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND WEEK(submitdate, 1) = WEEK(now(), 1) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Revenue For This Month
	public static function BestRevenue_month()
		{
			$sql="SELECT t1.pilotid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(revenue) as revenue 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Revenue For This Year
	public static function BestRevenue_year()
		{
			$sql="SELECT t1.pilotid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(revenue) as revenue 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($sql);
		}
	
	#Best Revenue All Time
	public static function BestRevenue_Alltime()
		{
			$sql="SELECT t1.pilotid,t1.revenue,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, sum(revenue) as revenue 
							FROM ".TABLE_PREFIX."pireps 
								WHERE accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY revenue DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Landing Rate Today
	public static function BestLanding_day()
		{
			$sql="SELECT t1.pilotid,t1.landingrate,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, MAX(landingrate) as landingrate
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND DAY(submitdate) = DAY(now()) AND landingrate < 0 AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY landingrate DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Landing Rate For This Week	
	public static function BestLanding_week()
		{
			$sql="SELECT t1.pilotid,t1.landingrate,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, MAX(landingrate) as landingrate 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND WEEK(submitdate, 1) = WEEK(now(), 1) AND landingrate < 0 AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY landingrate DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Landing Rate For This Month
	public static function BestLanding_month()
		{
			$sql="SELECT t1.pilotid,t1.landingrate,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, MAX(landingrate) as landingrate
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND MONTH(submitdate) = MONTH(now()) AND landingrate < 0 AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY landingrate DESC LIMIT 10";
											return DB::get_results($sql);
		}
	#Best Landing Rate For This Year
	public static function BestLanding_year()
		{
			$sql="SELECT t1.pilotid,t1.landingrate,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, MAX(landingrate) as landingrate 
							FROM ".TABLE_PREFIX."pireps 
								WHERE YEAR(submitdate) = YEAR(now()) AND landingrate < 0 AND accepted = 1
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY landingrate DESC LIMIT 10";
											return DB::get_results($sql);
		}
	
	#Best Landing Rate All Time
	public static function BestLanding_Alltime()
		{
			$sql="SELECT t1.pilotid,t1.landingrate,t2.firstname,t2.lastname,t2.code,t2.rank FROM 
					(SELECT 
						pilotid, MAX(landingrate) as landingrate 
							FROM ".TABLE_PREFIX."pireps 
								WHERE accepted = 1 AND landingrate < 0
									GROUP BY pilotid) t1
										LEFT JOIN ".TABLE_PREFIX."pilots t2 ON t1.pilotid = t2.pilotid 
											ORDER BY landingrate DESC LIMIT 10";
											return DB::get_results($sql);
		}
}
?>
