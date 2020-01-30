<?php
date_default_timezone_set("Asia/Calcutta");
$CurrntTime=time();
$DateTime=strftime("%m-%a-%Y %H:%M:%S",$CurrntTime);
echo $DateTime;



?>