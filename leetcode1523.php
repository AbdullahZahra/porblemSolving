<?php

/**
    Problem 1523 LeetCode
    1523. Count Odd Numbers in an Interval Range
    https://leetcode.com/problems/count-odd-numbers-in-an-interval-range/
*/

class Solution {

/**
 * @param Integer $low
 * @param Integer $high
 * @return Integer
 */
function countOdds($low, $high) {
    $counter = 0;
    $counter = ($high - $low)/2;
    if ($low % 2 == 1 || $high % 2 == 1) $counter++;

    return floor($counter);
}
}