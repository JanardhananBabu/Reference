
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Scanner;

public class Parking {

	private HashMap<Integer,Boolean> lot;
	private ArrayList<Integer> availList;
	Parking() {
		lot = new HashMap<Integer,Boolean>() ;
		availList = new ArrayList<Integer>();
	}

	public int getAvailableParkingLot() {
		if(availList.size()<1) {
			for(int i=0;i<100;i++) {
				if(!lot.containsKey(i)) {
					return i;
				}
			}
		}

		else{
			int ret = availList.get(availList.size()-1);
			availList.remove(availList.size()-1);
			return ret;
		}
		return -1;
	}
	public void assignLot() {
		int indx =getAvailableParkingLot();
		if(indx>=0) {
			lot.put(indx,true);
			System.out.println("Park @ :"+indx);
		}
		else
			System.out.println("Parking Lot is Full");
	}
	public void freeingLot(int lotNumber) {
		if(lot.get(lotNumber)) {
			availList.add(lotNumber);
			System.out.println("Lot Freed : "+lotNumber);
		}
		lot.put(lotNumber, false);
	}

	public static void acting_main(String args[]) {
		Scanner reader = new Scanner(System.in); 

		Parking park = new Parking();
		System.out.println("Hit 0 to terminate !");
		int input = reader.nextInt();
		System.out.println("Input typed : "+input);
		while(input!=0)
		{
			System.out.println("Enter a number :");
			System.out.println("Arrival : Hit 1");
			System.out.println("Departure : Hit 2");
			input = reader.nextInt();
			System.out.println("Input typed : "+input);
			if(input==1) {
				park.assignLot();
			}
			else {

				System.out.println("Enter the Lot Number :");
				input = reader.nextInt();
				System.out.println("Input typed : "+input);
				park.freeingLot(input);
			}
			System.out.println("Map :"+park.lot.size()+" List :"+park.availList.size());

		}
	}
}
