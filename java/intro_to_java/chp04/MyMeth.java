class Maths {
  double myMeth(int a, int b) {
    System.out.println(a + b);
    return a + b;
  }
}

class MyMeth {
  public static void main(String args[]) {
    Maths a = new Maths();

    a.myMeth(5, 6);
  }
}
