<?php
/**
 * 参考：php优先队列，大小堆 。
 * https://www.jianshu.com/p/9b6202980da2
 * https://www.php.net/manual/zh/class.splpriorityqueue.php
 *
 * java大顶堆
 * https://blog.csdn.net/weixin_45525272/article/details/125833529
 *
 * 堆结构原理图解
 * https://www.jianshu.com/p/996634066eff
 *
 * 视频讲解堆结构
 * https://www.bilibili.com/video/BV1E4411H73v/?p=109&vd_source=5f235066b675159e39774d2f5bad18ef
 *
 * 在一个仓库里，有一排条形码，其中第 i 个条形码为barcodes[i]。

请你重新排列这些条形码，使其中任意两个相邻的条形码不能相等。 你可以返回任何满足该要求的答案，此题保证存在答案。



示例 1：

输入：barcodes = [1,1,1,2,2,2]
输出：[2,1,2,1,2,1]
示例 2：

输入：barcodes = [1,1,1,1,2,2,3,3]
输出：[1,3,1,3,2,1,2,1]


来源：力扣（LeetCode）
链接：https://leetcode.cn/problems/distant-barcodes
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */