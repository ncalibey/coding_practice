// A short package demonstration
package bookpack;

public class Book {
  protected String title;
  protected String author;
  protected int pubDate;

  // Now public
  public Book(String t, String a, int d) {
    title = t;
    author = a;
    pubDate = d;
  }

  // Now public
  public void show() {
    System.out.println(title);
    System.out.println(author);
    System.out.println(pubDate);
    System.out.println();
  }
}
