import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

public class SPELLIT {

	List<Integer> list = new ArrayList<Integer>();
	
	public void readFile()
	{
		File file = new File("wordlist.txt");
		BufferedReader reader = null;

		try {
		    reader = new BufferedReader(new FileReader(file));
		    String text = null;

		    while ((text = reader.readLine()) != null) {
		        list.add(Integer.parseInt(text));
		    }
		} catch (FileNotFoundException e) {
		    e.printStackTrace();
		} catch (IOException e) {
		    e.printStackTrace();
		} finally {
		    try {
		        if (reader != null) {
		            reader.close();
		        }
		    } catch (IOException e) {
		    }
		}
	}
	
	public static void main(String args[]) {
		HashMap<String, ArrayList<StringPos>> map = new HashMap<String, ArrayList<StringPos>>();
		ArrayList<StringPos> stringPos, stringPosRev;
		ArrayList<String> row = new ArrayList<String>();
		ArrayList<String> col = new ArrayList<String>();
		ArrayList<String> top = new ArrayList<String>();
		ArrayList<String> bot = new ArrayList<String>();
		int dim=3;
		char[][] arr = {{'a','b','c'},{'d','e','f'},{'g','h','i'}};
		String str1="", str2="", strRev="";

		for(int i=0;i<dim;i++) {
			for(int j=0;j<dim;j++)	{
				stringPos = new ArrayList<StringPos>();
				for(int k=0;k<dim;k++) {
					if(j==0) {
						str1+=String.valueOf(arr[i][k]);
						stringPos.add(new StringPos(i,k,arr[i][k]));
					}
					if(i==0) {
						str2+=String.valueOf(arr[k][j]);
						stringPos.add(new StringPos(k,j,arr[k][j]));
					}
				}
				if(str1.length()>0||str2.length()>0) {
					if(j==0) {
						row.add(str1);
						strRev=new StringBuilder(str1).reverse().toString();
						row.add(strRev);
						map.put(str1,stringPos);
						stringPosRev = new ArrayList<StringPos>();
						for(int u=stringPos.size()-1;u>=0;u--)
							stringPosRev.add(stringPos.get(u));
						map.put(strRev, stringPosRev);
					}
					if(i==0) {
						col.add(str2);
						strRev = new StringBuilder(str2).reverse().toString();
						col.add(strRev);
						map.put(str2,stringPos);
						stringPosRev = new ArrayList<StringPos>();
						for(int u=stringPos.size()-1;u>=0;u--)
							stringPosRev.add(stringPos.get(u));
						map.put(strRev, stringPosRev);
					}
				}
				str1="";
				str2="";
			}
		}
		for(int i=0;i<dim;i++) {
			for(int j=0;j<dim;j++)	{
				stringPos = new ArrayList<StringPos>();
				if(i==0 || j==dim-1) {
					for(int k=i,l=j;k<dim&&l>=0;k++,l--) {
						str1+=String.valueOf(arr[k][l]);
						stringPos.add(new StringPos(k,l,arr[k][l]));
					}
;				}
				if(str1.length()>0) {
					top.add(str1);
					map.put(str1,stringPos);
				}
				if(str1.length()>1) {
					stringPosRev = new ArrayList<StringPos>();
					for(int u = stringPos.size()-1;u>=0;u--)
						stringPosRev.add(stringPos.get(u));
					strRev = new StringBuilder(str1).reverse().toString();
					map.put(strRev, stringPosRev);
					top.add(strRev);
				}
				str1="";

				if(i==0 || j==0) {
					for(int k=i,l=j;k<dim&&l<dim;k++,l++) {
						str1+=String.valueOf(arr[k][l]);
						stringPos.add(new StringPos(k,l,arr[k][l]));
					}
				}
				if(str1.length()>0) {
					bot.add(str1);
					map.put(str1,stringPos);
				}
				if(str1.length()>1) {
					stringPosRev = new ArrayList<StringPos>();
					for(int u = stringPos.size()-1;u>=0;u--)
						stringPosRev.add(stringPos.get(u));
					strRev = new StringBuilder(str1).reverse().toString();
					map.put(strRev, stringPosRev);
					bot.add(strRev);
				}
				str1="";
			}
		}
		System.out.println("Row:");
		for(int i=0;i<row.size();i++ )
			System.out.print(row.get(i)+" ");
		System.out.println();
		System.out.println("Column:");
		for(int i=0;i<col.size();i++ )
			System.out.print(col.get(i)+" ");
		System.out.println();
		System.out.println("Top:");
		for(int i=0;i<top.size();i++ )
			System.out.print(top.get(i)+" ");
		System.out.println();
		System.out.println("Bottom:");
		for(int i=0;i<bot.size();i++ )
			System.out.print(bot.get(i)+" ");

	}
}
