<?php

/**
 * Date Fuzzy Span.
 *
 * @param int $iTimestamp
 *
 * @return string
 */
function date_fuzzy_span(int $iTimestamp): string
{
    $iYear = 31556926;
    $iMonth = 2629744;
    $iWeek = 604800;
    $iDay = 86400;
    $iHour = 3600;
    $iMinute = 60;

    $iOffset = abs(time() - $iTimestamp);

    if ($iOffset <= $iMinute) {
        $sSpan = 'moments';
    } elseif ($iOffset < ($iMinute * 20)) {
        $sSpan = 'a few minutes';
    } elseif ($iOffset < $iHour) {
        $sSpan = 'less than an hour';
    } elseif ($iOffset < ($iHour * 4)) {
        $sSpan = 'a couple of hours';
    } elseif ($iOffset < $iDay) {
        $sSpan = 'less than a day';
    } elseif ($iOffset < ($iDay * 2)) {
        $sSpan = 'about a day';
    } elseif ($iOffset < ($iDay * 4)) {
        $sSpan = 'a couple of days';
    } elseif ($iOffset < $iWeek) {
        $sSpan = 'less than a week';
    } elseif ($iOffset < ($iWeek * 2)) {
        $sSpan = 'about a week';
    } elseif ($iOffset < $iMonth) {
        $sSpan = 'less than a month';
    } elseif ($iOffset < ($iMonth * 2)) {
        $sSpan = 'about a month';
    } elseif ($iOffset < ($iMonth * 4)) {
        $sSpan = 'a couple of months';
    } elseif ($iOffset < $iYear) {
        $sSpan = 'less than a year';
    } elseif ($iOffset < ($iYear * 2)) {
        $sSpan = 'about a year';
    } elseif ($iOffset < ($iYear * 4)) {
        $sSpan = 'a couple of years';
    } elseif ($iOffset < ($iYear * 8)) {
        $sSpan = 'a few years';
    } elseif ($iOffset < ($iYear * 12)) {
        $sSpan = 'about a decade';
    } elseif ($iOffset < ($iYear * 24)) {
        $sSpan = 'a couple of decades';
    } elseif ($iOffset < ($iYear * 64)) {
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
