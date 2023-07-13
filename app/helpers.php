
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
=======
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


    function calculateWeek($start)
    {
        $startDate = Carbon::parse($start);
        $currentDate = Carbon::now();
        $months = $startDate->diffInMonths($currentDate);
       
        if ($months <= 6 ){
            $age =  $startDate->diffInWeeks($currentDate);;
            echo $age , "weeks";
        } elseif (($months > 6) && ($months <= 12)){
            $age =  $startDate->diffInMonths($currentDate);;
            echo $age , "months";
        } else {
            $age = $startDate->diffInYears($currentDate);
            echo $age , "years";
        }
        // return $week;
       





    }



=======

}
