/**
    Problem 191 LeetCode
    191. Number of 1 Bits
    https://leetcode.com/problems/number-of-1-bits/
*/

class Solution {
public:
    int hammingWeight(uint32_t n) {
        int counter = 0;
        
        for (int i = 0; i < 32; i++)
    {
        if (n % 2 == 1) counter++;

        n = n>>1;
    }
        
        return counter;
    }
};