/**
    Problem 1491 LeetCode
    1491. Average Salary Excluding the Minimum and Maximum Salary
    https://leetcode.com/problems/average-salary-excluding-the-minimum-and-maximum-salary/
*/

class Solution {

/**
 * @param Integer[] $salary
 * @return Float
 */
function average($salary) {
    sort($salary);
    $avg = 0;
    $counter = 0;
    for ($i = 1; $i < (count($salary) - 1); $i++)
    {
        $avg += $salary[$i];
        $counter++;
    }
    $avg /= $counter;
    return $avg;
}
}