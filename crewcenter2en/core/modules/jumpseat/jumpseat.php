<?php

	class Jumpseat extends CodonModule
	{


		public function index()
		{	

			$aps = OperationsData::getAllAirports();
			$this->set('airports',$aps);

			
			$dep = (Auth::$userinfo->position == NULL) ? Auth::$userinfo->hub : Auth::$userinfo->position;

			if (!defined('JUMPSEAT_MODIFIER') || JUMPSEAT_MODIFIER == '') 
			{ 
				$this->set('modifier',0.5);
			}else{
				$this->set('modifier',JUMPSEAT_MODIFIER);
			}

			$this->set('jumpseatdep',$dep);
			$this->render('jumpseat.php');
		}

		public function fly()
		{
			if (isset($this->post->action)) {
            			switch ($this->post->action) {
               				case 'fly':

                			$balance_new = ($this->post->balance - $this->post->price);

					    $this->processJump($this->post->pilot,$this->post->dest,$balance_new);
						
					    $this->set('dest',$this->post->dest);
					    $this->set('from',$this->post->departfrom);
					    $this->set('price',$this->post->price);
					    $this->set('pilot',$this->post->pilot);
					    $this->render('jumpseat_post.php');
					    break;
            			}
        		}
			
		}

		protected function processJump($pilot,$icao,$balance)
		{
			$sql = "UPDATE ".TABLE_PREFIX."pilots SET `position` = '".DB::escape($icao)."', `totalpay` = '".DB::escape($balance)."' WHERE `pilotid` = '".DB::escape($pilot)."'";
			DB::query($sql);
		}

	}

?>
