class CharReader {
  public static void main(String args[])
    throws java.io.IOException {

    char ch;
    int spaces = 0;

    ch = (char) System.in.read();

    do {
      ch = (char) System.in.read();
      if (ch == ' ') spaces++;
    } while (ch != '.');

    System.out.println("Number of spaces: " + spaces);
  }
}
