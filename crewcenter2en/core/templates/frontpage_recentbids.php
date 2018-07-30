<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php
    if ($bids > 0)
		{
			echo $bids(count);
		}
		else
		{
			echo '0';
		}
?>