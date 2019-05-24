<?php
/*
* phpVMS Module: Random Itinerary Builder
* Coding by Jeffrey Kobus
* www.fs-products.net
* Verion 1.3
* Dated: 03/22/2011
*/


class RandomFlights extends CodonModule
{
	public function index()
		{
			Template::Show('randomsearch.php');
		}	
		
	public function getRandomFlights()
		{		
			$dep 		= FltbookData::getLocation(Auth::$userinfo->pilotid)->arricao;
			$equip 		= $this->post->equipment;
			$code	 	= $this->post->airline;
			$count 		= $this->post->count;
			
			for($i = 0; $i < $count; $i++)
			{					
				$params = array(
      				's.depicao' => $dep,      			
      				's.enabled' => 1
      			);
      			
      			if($equip != "") $params['a.icao'] = $equip;
      			if($code != "") $params['code'] = $code;
      		 
				$flights = SchedulesData::findSchedules($params);
				if($flights)
				{			
					foreach ($flights as $row)
					{
						$r = rand(0, count($flights));				
						$airline = OperationsData::getAirlineByCode($flights[$r]->code);				
						if($airline->enabled == 0) continue;
						if ($flights[$r]->aircraftlevel > Auth::$userinfo->ranklevel)
						{
							continue;
						}
						else
						{					
							$schedules[$i] = $flights[$r];
							$dep = $flights[$r]->arricao;					
							break;
						}
					}
				}
				
			}
			
			Template::Set('schedules', $schedules);
			Template::Set('count', $count);
			Template::Show('randomflights.php');					
		}
		
	public function bidAll()
		{			
			$count = $this->post->count;			
				
			for ($i = 0; $i < $count; $i++)
			{
				$ret = SchedulesData::addBid($this->post->pilotid, $this->post->schedules[$i]);
				$flight = SchedulesData::getSchedule($this->post->schedules[$i]);				
				if($ret) echo 'Flight - '.$flight->code.$flight->flightnum.' added <br/>';
			}
			echo 'Finished';		
		}
}
?>