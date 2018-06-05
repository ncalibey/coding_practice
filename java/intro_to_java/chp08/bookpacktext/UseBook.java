// Demonstrate import
package bookpacktext;
import bookpack.*;

// Use the Book class from bookpack
class UseBook {
  public static void main(String[] args) {
    Book[] books = new Book[5];

    books[0] = new Book("Java: A beginner's Guide", "Schildt", 2018);
    books[1] = new Book("Java: The Complete Reference", "Schildt", 2018);
    books[2] = new Book("Introducing JavaFX 8 Programming", "Schildt", 2015);
    books[3] = new Book("Red Strom Rising", "Clancy", 1986);
    books[4] = new Book("On the Road", "Kerouac", 1955);

    for (int i = 0; i < books.length; i++) books[i].show();
  }
}
