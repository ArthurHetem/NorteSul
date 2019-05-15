<?php
class TopPilot extends CodonModule
{
	public function index() 
	   {	
			$revision = trim(file_get_contents(CORE_PATH.'/version'));
			if($revision != 'simpilot 5.5.2')
				{
					echo '<center>phpVMS Version Installed Is Not Compatible With This Module!</center><br />';
					echo '<center>phpVMS Version Installed: '.$revision.'</center>';
				}
			else
			{
            $bestflighttimedays = TopPilots::BestFlightTime_day();
			$bestflighttimeweeks = TopPilots::BestFlightTime_Week();
			$bestflighttimemonths = TopPilots::BestFlightTime_Month();
			$bestflighttimeyears = TopPilots::BestFlightTime_Year();
			$bestflighttimealltimes = TopPilots::BestFlightTime_Alltime();
                                    			
			$bestdistancedays = TopPilots::BestDistance_day();
            $bestdistanceweeks = TopPilots::BestDistance_week();
            $bestdistancemonths = TopPilots::BestDistance_month();
            $bestdistanceyears = TopPilots::BestDistance_year();
            $bestdistancealltimes = TopPilots::BestDistance_Alltime();
			
            $bestrevenuedays = TopPilots::BestRevenue_day();
            $bestrevenueweeks = TopPilots::BestRevenue_week();
            $bestrevenuemonths = TopPilots::BestRevenue_month();
            $bestrevenueyears = TopPilots::BestRevenue_year();
            $bestrevenuealltimes = TopPilots::BestRevenue_Alltime();
			
			$bestlandingdays = TopPilots::Bestlanding_day();
            $bestlandingweeks = TopPilots::Bestlanding_week();
            $bestlandingmonths = TopPilots::Bestlanding_month();
            $bestlandingyears = TopPilots::Bestlanding_year();
            $bestlandingalltimes = TopPilots::Bestlanding_Alltime();
			
			$this->set('bestflighttimedays', $bestflighttimedays);
			$this->set('bestflighttimeweeks', $bestflighttimeweeks);
			$this->set('bestflighttimemonths', $bestflighttimemonths);
			$this->set('bestflighttimeyears', $bestflighttimeyears);
			$this->set('bestflighttimealltimes', $bestflighttimealltimes);
			
			$this->set('bestdistancedays', $bestdistancedays);
			$this->set('bestdistanceweeks', $bestdistanceweeks);
			$this->set('bestdistancemonths', $bestdistancemonths);
			$this->set('bestdistanceyears', $bestdistanceyears);
			$this->set('bestdistancealltimes', $bestdistancealltimes);
			
			$this->set('bestrevenuedays', $bestrevenuedays);
			$this->set('bestrevenueweeks', $bestrevenueweeks);
			$this->set('bestrevenuemonths', $bestrevenuemonths);
			$this->set('bestrevenueyears', $bestrevenueyears);
			$this->set('bestrevenuealltimes', $bestrevenuealltimes);
			
			$this->set('bestlandingdays', $bestlandingdays);
			$this->set('bestlandingweeks', $bestlandingweeks);
			$this->set('bestlandingmonths', $bestlandingmonths);
			$this->set('bestlandingyears', $bestlandingyears);
			$this->set('bestlandingalltimes', $bestlandingalltimes);
			
            $this->show('/toppilot/toppilot.php');
			
            }
        }
}
?>