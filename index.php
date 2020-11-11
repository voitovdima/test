<?php

function depthDomen($domen){
    $exampledomenarr = array(‘com’, ‘com.ua’, ‘ua’, ‘in.ua’);
    $domen = str_ireplace($exampledomenarr, '', $domen);
    $depthofdomen =  substr_count($domen, '.');
    if ($depthofdomen > 0) return $depthofdomen;
    return 'this is not a domain';

}

// works only for domain zones .com, .com.ua, .ua, .in.ua

echo depthDomen($domen);

