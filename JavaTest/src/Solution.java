public class Solution {

	Node InsertNth(Node head, int data, int position) {
        // This is a "method-only" submission. 
        // You only need to complete this method. 
        int count=0;
        Node start = head;
        Node nHead = new Node();
        if(position==0) {
            if(head==null)
            nHead.next = null;
            start=nHead;
        }
        else {
            while(count!=position-1) {
            	if(head.next!=null)
                head=head.next;
                count++;
            }
            if(head==null)
            	nHead.next=null;
            else {
            	nHead.next = head.next;
            	head.next=nHead; 
            }
        }      
        
        nHead.data=data;
        return start;

    }
	public static void main(String[] args) {
		Node node = new Node();
		Solution sol = new Solution();
		node = sol.InsertNth(node,3,0);
		node = sol.InsertNth(node,5,1);
		node = sol.InsertNth(node,4,2);
		node = sol.InsertNth(node,2,4);
		node = sol.InsertNth(node,10,1);
		while(node!=null) {
			System.out.println(node.data);
			node=node.next;
		}
	}
}
class Node{
	int data;
	Node next;
}