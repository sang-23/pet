
<?php
use Carbon\Carbon;
if (!function_exists('myHelperFunction')) {
    function myHelperFunction()
    {
        // Your helper function code here
    }
    function calculateWeeks($start)
    {
        $startDate = Carbon::parse($start);
        $currentDate = Carbon::now();
        $Week = $startDate->diffInWeeks($currentDate);
        // return $week;
       

if (($Week >= 6 && $Week < 8) || ($Week >= 10 && $Week < 12) || ($Week >= 14 && $Week < 16) || ($Week >= 52 && $Week < 156)) {
    $status = "ongoing";
} elseif ($Week > 156) {
    $status = "lapse";
} else {
    $status = "upcoming";
}

echo $status;

    }
}
