<?php

/**
 * Date Fuzzy Span.
 *
 * @param int $timestamp
 *
 * @return string
 */
function date_fuzzy_span(int $timestamp): string
{
    $year = 31556926;
    $month = 2629744;
    $week = 604800;
    $day = 86400;
    $hour = 3600;
    $minute = 60;

    $offset = abs(time() - $timestamp);

    if ($offset <= $minute) {
        $span = 'moments';
    } elseif ($offset < ($minute * 20)) {
        $span = 'a few minutes';
    } elseif ($offset < $hour) {
        $span = 'less than an hour';
    } elseif ($offset < ($hour * 4)) {
        $span = 'a couple of hours';
    } elseif ($offset < $day) {
        $span = 'less than a day';
    } elseif ($offset < ($day * 2)) {
        $span = 'about a day';
    } elseif ($offset < ($day * 4)) {
        $span = 'a couple of days';
    } elseif ($offset < $week) {
        $span = 'less than a week';
    } elseif ($offset < ($week * 2)) {
        $span = 'about a week';
    } elseif ($offset < $month) {
        $span = 'less than a month';
    } elseif ($offset < ($month * 2)) {
        $span = 'about a month';
    } elseif ($offset < ($month * 4)) {
        $span = 'a couple of months';
    } elseif ($offset < $year) {
        $span = 'less than a year';
    } elseif ($offset < ($year * 2)) {
        $span = 'about a year';
    } elseif ($offset < ($year * 4)) {
        $span = 'a couple of years';
    } elseif ($offset < ($year * 8)) {
        $span = 'a few years';
    } elseif ($offset < ($year * 12)) {
        $span = 'about a decade';
    } elseif ($offset < ($year * 24)) {
        $span = 'a couple of decades';
    } elseif ($offset < ($year * 64)) {
        $span = 'several decades';
    } else {
        $span = 'a long time';
    }

    if ($timestamp <= time()) {
        return $span.' ago';
    } else {
        return 'in '.$span;
    }
}
