<?php
/**
 * 假设你正在爬楼梯。需要 n 阶你才能到达楼顶。

每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？

 

示例 1：

输入：n = 2
输出：2
解释：有两种方法可以爬到楼顶。
1. 1 阶 + 1 阶
2. 2 阶
示例 2：

输入：n = 3
输出：3
解释：有三种方法可以爬到楼顶。
1. 1 阶 + 1 阶 + 1 阶
2. 1 阶 + 2 阶
3. 2 阶 + 1 阶


来源：力扣（LeetCode）
链接：https://leetcode.cn/problems/climbing-stairs
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 *
 * class Solution {
public int climbStairs(int n) {
int p = 0, q = 0, r = 1;
for (int i = 1; i <= n; ++i) {
p = q;
q = r;
r = p + q;
}
return r;
}
}

作者：LeetCode-Solution
链接：https://leetcode.cn/problems/climbing-stairs/solution/pa-lou-ti-by-leetcode-solution/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
 */