<?php

    function PocetDnu ($mesic, $rok)
    {
        return cal_days_in_month(CAL_GREGORIAN, $mesic, $rok);
    }

    // alternative to PocetDnu
    function PocetDnu2($mesic, $rok)
    {
        return date("t", mktime(0, 0, 0, $mesic, 1, $rok));
    }

    function JePrechodnyRok($rok)
    {
        return (boolean) date("L", mktime(0,0,0,1,1,$rok));
    }

    function PrvniDen($mesic, $rok)
    {
        return date("N", mktime(0, 0, 0, $mesic, 1, $rok));
    }

    $months = array(1 => "Jan", "Feb", "Mar", "Apr", "May");
    $days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
    $month = 2;
    $year = 2016;
    $number = PocetDnu2($month, $year);
    echo "There were {$number} days in {$months[$month]}-{$year}\n";
    echo "First day of {$months[$month]}-$year is ", $days[PrvniDen($month, $year)], "\n";
?>