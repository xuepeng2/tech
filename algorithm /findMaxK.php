<?php
/**
 * 与对应负数同时存在的最大正整数
 * class Solution {
public int findMaxK(int[] nums) {
Arrays.sort(nums);
for (int i = 0, j = nums.length - 1; i < j; j--) {
while (i < j && nums[i] < -nums[j]) {
i++;
}
if (nums[i] == -nums[j]) {
return nums[j];
}
}
return -1;
}
}

作者：LeetCode-Solution
链接：https://leetcode.cn/problems/largest-positive-integer-that-exists-with-its-negative/solution/yu-dui-ying-fu-shu-tong-shi-cun-zai-de-z-kg8f/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
 */