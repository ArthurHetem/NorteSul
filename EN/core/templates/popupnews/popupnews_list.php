<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2012, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>

<table>
<?php
    foreach($news as $item) {
		echo '<li class="mb-3">';
        echo '<a href="'.SITE_URL.'/index.php/PopUpNews/popupnewsitem/'.$item->id.'" class="d-flex">';
        echo '<div class="text">';
        echo '<span class="small text-uppercase date">'.date(DATE_FORMAT, $item->postdate).'</span>';
        echo '<h4 style="color:#fff;">'.$item->subject.'</h4>';
        echo '</div>';
        echo '</a>';
		echo '</li>';
    }
?>
</table>