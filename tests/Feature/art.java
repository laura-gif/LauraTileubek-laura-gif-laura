import java.util.Scanner;

public class art{
	public static void main(String [] args){
		Scanner in = new Scanner(System.in);
		int r=in.nextInt();

	    System.out.println(art(r));	
	}
	public static int art(int r){
		if(r>0){
		System.out.println(r%10);

        art(r/10 );
	}
}