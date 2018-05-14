class BreakDemo {
  public static void main(String args[]) {
    int num = 100;

    // loop while i-squred is less than num
    for (int i = 0; i < num; i++) {
      if (i * i >= num) break;
      System.out.print(i + " ");
    }
    System.out.println("Loop complete.");
  }
}
