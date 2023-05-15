<?php
/**
 * 给你单链表的头结点 head ，请你找出并返回链表的中间结点。

如果有两个中间结点，则返回第二个中间结点。
 *
 * 思路：快指针q每次走2步，慢指针p每次走1步，当q走到末尾时p正好走到中间。

class Solution {
public ListNode middleNode(ListNode head) {
ListNode p = head, q = head;
while (q != null && q.next != null) {
q = q.next.next;
p = p.next;
}
return p;
}
}
 */