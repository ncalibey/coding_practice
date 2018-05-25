class Test {
  int a;
  Test(int i) { a = i; }

  void swap(Test b) {
    int temp = a;
    a = b.a;
    b.a = temp;
  }
}

class Swap {
  public static void main(String[] args) {
    Test t1 = new Test(3);
    Test t2 = new Test(5);

    System.out.println("Before the swap: ");
    System.out.println("t1: " + t1.a);
    System.out.println("t2: " + t2.a);

    t1.swap(t2);

    System.out.println("After the swap: ");
    System.out.println("t1: " + t1.a);
    System.out.println("t2: " + t2.a);
  }
}
