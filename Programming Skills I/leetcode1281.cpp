/**
    Problem 1281 LeetCode
    1281. Subtract the Product and Sum of Digits of an Integer
    https://leetcode.com/problems/subtract-the-product-and-sum-of-digits-of-an-integer/
*/

class Solution {
public:
    int subtractProductAndSum(int n) {
        
        int sum = 0, product = 1, result;
        
        while (n)
    {
        result = n % 10;
        sum += result;
        product *= result;
        n /= 10;
    }
        
        return product - sum;
    }
};