<?php

/**
 *
 * Counting Sundays
 *
 * Problem 19
 *
 * You are given the following information, but you may prefer to do some research for yourself.
 *
 * 1 Jan 1900 was a Monday.
 *
 * Thirty days has September,
 * April, June and November.
 * All the rest have thirty-one,
 * Saving February alone,
 * Which has twenty-eight, rain or shine.
 * And on leap years, twenty-nine.
 *
 * A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
 *
 * How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
 *
 */
class CountingSundays
{

    /** @type array $months_with_30_days Months that have 30 days */ 
    private $months_with_30_days = [4, 6, 9, 10];
 
    /**
     * Count number of Sundays that fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)
     *
     * @return int number of Sundays
     */
    public function countSundays()
    {
        //days left till first Sunday from 1st of Jan on 1901
        $day_till_sunday = 7 - (4 * 30 + 7 * 31 + 29) % 7; // == 2 which is tuesday
        
        //Initialise Sundays count to 0
        $sundays = 0;
        
        //loop though every year from 1901 to 2000
        for ($i = 1901; $i <= 2000; $i++) {
            
            //check if leap year
            $leap = 0;
            if ($i % 4 == 0 && $i % 400 !== 0) {
                $leap = 1;
            }
            
            //loop through every month in current year
            for ($month = 1; $month <= 12; $month++) {
                $days_in_the_month = 0;
                
                if ($month == 2) {
                    //if Feb add any extra leap days
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
