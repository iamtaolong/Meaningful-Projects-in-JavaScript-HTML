/**************************************************************************************************************
 * @file HomepageGenerator.java
 * @brief This program implements basic knowledge about Scanner, SOUT, HTML
 * @author Tao Long
 * @data January 1.22
 **************************************************************************************************************/


import java.util.Scanner;

public class HomepageGenerator {
    public static void main(String[]args){
        Scanner tao = new Scanner(System.in);
        String name;
        String aboutthestudent;
        String hobby1;
        String hobby2;
        String hobby3;


        System.out.println("Welcome to Home Page Generator!");
        System.out.println();

        System.out.println("Enter your name: ");
        name = tao.nextLine();
        System.out.println("Enter something about you: ");
        aboutthestudent = tao.nextLine();
        System.out.println("Enter 3 hobbies of yours please:");
        System.out.println("Enter your first hobby:");
        hobby1 = tao.nextLine();
        System.out.println("Enter your second hobby:");
        hobby2 = tao.nextLine();
        System.out.println("Enter your thrid hobby:");
        hobby3 = tao.nextLine();

        System.out.println();
        System.out.println("<!DOCTYPE html>");
        System.out.println("</Homepage>");
        System.out.println("<body>");
        System.out.println("<h1>" + name + "</h1>");
        System.out.println("<h2> About the student: </h2>");
        System.out.println("<h3>" + aboutthestudent + "</h3>");
        System.out.println("<h2> Top three hobbies </h2>");
        System.out.println("<li> First hobby: "+ hobby1 + "</li>");
        System.out.println("<li> Second hobby: "+ hobby2 +"</li>");
        System.out.println("<li> Third hobby: "+ hobby3 +"</li>");
        System.out.println("</ul>");
        System.out.println("</body>");
        System.out.println("</html>");


    }
}
