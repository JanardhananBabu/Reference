public class RotatingArray {
	private static String half = "first";
	public int[] rotate(int[] input_arr, int rot)
	{

		int startIndex=0,endIndex=input_arr.length;
		int pointer = endIndex-rot;
		int [] rotated_arr=new int[input_arr.length];
		while(rot>0) {
			rotated_arr[startIndex]=input_arr[pointer];
			startIndex++;
			pointer++;
			rot--;
		}
		for(int i=0,j=startIndex;j<endIndex;i++,j++) {
			rotated_arr[j]=input_arr[i];
		}
		for(int i=0;i<rotated_arr.length;i++)
			System.out.print(rotated_arr[i]+" ");
		return rotated_arr;
	}

	public void nlognSearch(int[] input_arr, int rot, int number) {
		int startIndex=0,endIndex=input_arr.length;
		RotatingArray rot_arr = new RotatingArray();
		int[] rotated_arr = rot_arr.rotate(input_arr,rot);
		if(number<rotated_arr[0])
			half="second";
		for(int i=startIndex,j=rotated_arr.length-1;i<rotated_arr.length-1 && j>1;i++,j--) {
			if(rotated_arr[i+1]-rotated_arr[i] < 1) {
				if(half.equals("first")) 
					endIndex = i;
				else
					startIndex = i+1;
			}
			else if(rotated_arr[j]-rotated_arr[j-1] < 1) {
				if(half.equals("first")) 
					endIndex = j-1;
				else
					startIndex = j;
			}
		}
		//binarysearch(startIndex,endIndex) with o(logn);
	}

	public int lognSearch(int[] input_arr,int startIndex, int endIndex, int number)
	{
		if(input_arr[startIndex]==number)
			return startIndex;
		else if(input_arr[endIndex]==number)
			return endIndex;
		else if(input_arr[(endIndex/2)-1]==number)
			return (endIndex/2)-1;
		else if(number <= input_arr[(endIndex/2)-1])
			return lognSearch(input_arr, startIndex, (endIndex/2)-1, number);
		else if(number > input_arr[(endIndex/2)-1])
			return lognSearch(input_arr, endIndex/2, endIndex, number);
		return 0;
	}

	public static void acting_main(String args[]) {
		//Input array
		int [] input_arr = {1,2,3,4,5,6,7,8,9,10};
		//Rotation to make
		int rot=1;
		RotatingArray rot_arr = new RotatingArray();
		int[] rotated_arr = rot_arr.rotate(input_arr,rot);
		System.out.println(rot_arr.lognSearch(rotated_arr,0,rotated_arr.length-1,3));
	}
}

