class StringSort {
  public static void main(String args[]) {
    String[] strings = { "alpha", "beta", "gamma", "delta", "epsilon",
                         "lambda", "psi", "zeta", "chi", "xeta" };
    int a, b;
    String t;

    // display original array
    System.out.print("Original array is: ");
    for (int i = 0; i < strings.length; i++)
      System.out.print(" " + strings[i]);
    System.out.println();

    // This is the Bubble sort
    for (a = 1; a < strings.length; a++) {
      for (b = strings.length - 1; b >= a; b--) {
        int result = strings[b - 1].compareTo(strings[b]);

        if (result > 0) {  // if out of order
          // exchange elements
          t = strings[b - 1];
          strings[b - 1] = strings[b];
          strings[b] = t;
        }
      }
    }

    // display sorted array
    System.out.print("Sorted array is: ");
    for(int i = 0; i < strings.length; i++)
      System.out.print(" " + strings[i]);
    System.out.println();
  }
}
