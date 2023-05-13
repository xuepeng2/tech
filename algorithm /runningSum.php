<?php

/**
 * 给你一个数组 nums 。数组「动态和」的计算公式为：runningSum[i] = sum(nums[0]…nums[i]) 。

请返回 nums 的动态和。

示例 1：

输入：nums = [1,2,3,4]
输出：[1,3,6,10]
解释：动态和计算过程为 [1, 1+2, 1+2+3, 1+2+3+4] 。
示例 2：

输入：nums = [1,1,1,1,1]
输出：[1,2,3,4,5]
解释：动态和计算过程为 [1, 1+1, 1+1+1, 1+1+1+1, 1+1+1+1+1] 。
示例 3：

输入：nums = [3,1,2,10,1]
输出：[3,4,6,16,17]

来源：力扣（LeetCode）1480. 一维数组的动态和
链接：https://leetcode.cn/problems/running-sum-of-1d-array
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        if(count($nums) <= 1) {
            return $nums;
        }
        foreach($nums as $i => $num) {
            if($i == 0) {
                continue;
            }
            $nums[$i] = $nums[$i-1] + $num;
        }

        return $nums;
    }
}