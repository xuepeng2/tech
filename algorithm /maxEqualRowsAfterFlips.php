<?php
/**
 * 给定 m x n 矩阵 matrix 。

你可以从中选出任意数量的列并翻转其上的 每个 单元格。（即翻转后，单元格的值从 0 变成 1，或者从 1 变为 0 。）

返回 经过一些翻转后，行与行之间所有值都相等的最大行数 。

 

示例 1：

输入：matrix = [[0,1],[1,1]]
输出：1
解释：不进行翻转，有 1 行所有值都相等。
示例 2：

输入：matrix = [[0,1],[1,0]]
输出：2
解释：翻转第一列的值之后，这两行都由相等的值组成。
示例 3：

输入：matrix = [[0,0,0],[0,0,1],[1,1,0]]
输出：2
解释：翻转前两列的值之后，后两行由相等的值组成。
 

来源：力扣（LeetCode）
链接：https://leetcode.cn/problems/flip-columns-for-maximum-number-of-equal-rows
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 *
 * 方法一：哈希
思路与算法

题目给定
�
×
�
m×n 的矩阵，要求从中选取任意数量的列并翻转其上的每个单元格。单元格仅包含
0
0 或者
1
1。问最多可以得到多少个由相同元素组成的行。如果某一行全部是
1
1 或者全部是
0
0，则表示该行由相同元素组成。

如果翻转固定的某些列，可以使得两个不同的行都变成由相同元素组成的行，那么我们称这两行为本质相同的行。例如
001
001 和
110
110 就是本质相同的行。

本质相同的行有什么特点呢？可以发现，本质相同的行只存在两种情况，一种是由
0
0 开头的行，另一种是由
1
1 开头的行。在开头的元素确定以后，由于翻转的列已经固定，所以可以推断出后续所有元素是
0
0 还是
1
1。

为了方便统计本质相同的行的数量，我们让由
1
1 开头的行全部翻转，翻转后行内元素相同的行即为本质相同的行。之后我们将每一行转成字符串形式存储到哈希表中，遍历哈希表得到最多的本质相同的行的数量即为答案。

作者：LeetCode-Solution
链接：https://leetcode.cn/problems/flip-columns-for-maximum-number-of-equal-rows/solution/an-lie-fan-zhuan-de-dao-zui-da-zhi-deng-teeig/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
 *
 * class Solution {
public int maxEqualRowsAfterFlips(int[][] matrix) {
int m = matrix.length, n = matrix[0].length;
Map<String, Integer> map = new HashMap<String, Integer>();
for (int i = 0; i < m; i++) {
char[] arr = new char[n];
Arrays.fill(arr, '0');
for (int j = 0; j < n; j++) {
// 如果 matrix[i][0] 为 1，则对该行元素进行翻转
arr[j] = (char) ('0' + (matrix[i][j] ^ matrix[i][0]));
}
String s = new String(arr);
map.put(s, map.getOrDefault(s, 0) + 1);
}
int res = 0;
for (Map.Entry<String, Integer> entry : map.entrySet()) {
res = Math.max(res, entry.getValue());
}
return res;
}
}

作者：LeetCode-Solution
链接：https://leetcode.cn/problems/flip-columns-for-maximum-number-of-equal-rows/solution/an-lie-fan-zhuan-de-dao-zui-da-zhi-deng-teeig/
来源：力扣（LeetCode）
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。
 */