<?php

class CountingSundays
{

    private $months_with_30_days = [4, 6, 9, 10];
 
    public function countSundays()
    {
        //day that falls on the 1st of Jan on 1901
        $day_till_sunday = 7 - (4 * 30 + 7 * 31 + 29) % 7; // == 2 which is tuesday
        
        $sundays = 0;
        for ($i = 1901; $i <= 2000; $i++) {
            $leap = 0;
            if ($i % 4 == 0 && $i % 400 !== 0) {
                $leap = 1;
            }
            
            for ($month = 1; $month <= 12; $month++) {
                $days_in_the_month = 0;
                
                if ($month == 2) {
                    $days_in_the_month = 28 + $leap;
                } elseif (in_array($month, $this->months_with_30_days)) {
                    $days_in_the_month = 30;
                } else {
                    $days_in_the_month = 31;
                }
                
                if ($day_till_sunday == 1) {
                    $sundays++;
                }
                
                $days_in_the_month -= $day_till_sunday;                
                $day_till_sunday = 7 - ($days_in_the_month % 7);
            }
        }
        
        return $sundays;
    }
}
