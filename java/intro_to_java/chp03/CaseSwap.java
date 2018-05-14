class CaseSwap {
  public static void main(String args[])
    throws java.io.IOException {

    int changes = 0;
    char ch;

    System.out.println("Enter a line of text ending with '.' and press ENTER");

    do {
      ch = (char) System.in.read();

      if (ch >= 'a' & ch <= 'z') {
        ch -= 32;
        System.out.print(ch + " ");
        changes++;
      }
      else if (ch >= 'A' & ch <= 'Z') {
        ch += 32;
        System.out.print(ch + " ");
        changes++;
      }
    } while (ch != '.');

    System.out.println("\nCases Swapped: " + changes);
  }
}
