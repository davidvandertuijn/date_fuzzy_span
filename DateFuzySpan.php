<?php

namespace Davidvandertuijn;

class DateFuzySpan
{
    const YEAR = 31556926;
    const MONTH = 2629744;
    const WEEK = 604800;
    const DAY = 86400;
    const HOUR = 3600;
    const MINUTE = 60;

    /**
     * Output
     *
     * @param int $iTimestamp
     *
     * @return string
     */
    public static function output($iTimestamp)
    {
        $iOffset = abs(time() - $iTimestamp);

        if ($iOffset <= self::MINUTE) {
            $sSpan = 'moments';
        } elseif ($iOffset < (self::MINUTE * 20)) {
            $sSpan = 'a few minutes';
        } elseif ($iOffset < self::HOUR) {
            $sSpan = 'less than an hour';
        } elseif ($iOffset < (self::HOUR * 4)) {
            $sSpan = 'a couple of hours';
        } elseif ($iOffset < self::DAY) {
            $sSpan = 'less than a day';
        } elseif ($iOffset < (self::DAY * 2)) {
            $sSpan = 'about a day';
        } elseif ($iOffset < (self::DAY * 4)) {
            $sSpan = 'a couple of days';
        } elseif ($iOffset < self::WEEK) {
            $sSpan = 'less than a week';
        } elseif ($iOffset < (self::WEEK * 2)) {
            $sSpan = 'about a week';
        } elseif ($iOffset < self::MONTH) {
            $sSpan = 'less than a month';
        } elseif ($iOffset < (self::MONTH * 2)) {
            $sSpan = 'about a month';
        } elseif ($iOffset < (self::MONTH * 4)) {
            $sSpan = 'a couple of months';
        } elseif ($iOffset < self::YEAR) {
            $sSpan = 'less than a year';
        } elseif ($iOffset < (self::YEAR * 2)) {
            $sSpan = 'about a year';
        } elseif ($iOffset < (self::YEAR * 4)) {
            $sSpan = 'a couple of years';
        } elseif ($iOffset < (self::YEAR * 8)) {
            $sSpan = 'a few years';
        } elseif ($iOffset < (self::YEAR * 12)) {
            $sSpan = 'about a decade';
        } elseif ($iOffset < (self::YEAR * 24)) {
            $sSpan = 'a couple of decades';
        } elseif ($iOffset < (self::YEAR * 64)) {
            $sSpan = 'several decades';
        } else {
            $sSpan = 'a long time';
        }

        if ($iTimestamp <= time()) {
            return $sSpan.' ago';
        } else {
            return 'in '.$sSpan;
        }
    }
}
