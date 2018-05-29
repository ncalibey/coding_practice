class VarArgsSumDemo {
  static int sum (int ... args) {
    int sum = 0;

    for (int i = 0; i < args.length; i++)
      sum += args[i];

    return sum;
  }

  public static void main(String[] args) {
    System.out.println(sum(1, 2, 3, 4, 5));
  }
}
