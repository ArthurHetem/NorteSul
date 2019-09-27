<?php

class Frota extends CodonModule
{
	public function index()
	{
		$this->set('aircrafts', FleetData::GetAllAircrafts());
		$this->set('aircrafts2', FleetData::GetAllAircrafts());
		$this->set('aircrafts3', FleetData::GetAllAircrafts());
		$this->set('aircrafts4', FleetData::GetAllAircrafts());
		$this->set('aircrafts5', FleetData::GetAllAircrafts());
		$this->set('aircrafts6', FleetData::GetAllAircrafts());
      $this->show('frota.php');
	}
}
?>