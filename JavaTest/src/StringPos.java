
public class StringPos {
	private int startIndx, endIndx;
	private char element;
	public StringPos(int startIndx, int endIndx, char element)
	{
		this.startIndx = startIndx;
		this.endIndx=endIndx;
		this.element=element;	
	}
	
	public int getStartIndx()
	{
		return this.startIndx;
	}
	public void setStartIndx(int startIndx )
	{
		this.startIndx = startIndx;
	}
	public int getEndIndx()
	{
		return this.endIndx;
	}
	public void setEndIndx(int endIndx )
	{
		this.endIndx = endIndx;
	}
	public char getElement()
	{
		return this.element;
	}
	public void setElementIndx(char element)
	{
		this.element = element;
	}

}
