
public class FibonacciRecursive {

	public int getfib(int n) {
		 if(n>1)
			 return n+getfib(n-1);
		 else
			 return 1;
	}
	public static void acting_main(String args[]) {
		FibonacciRecursive fib = new FibonacciRecursive();
		System.out.println(fib.getfib(8));
	}
}
