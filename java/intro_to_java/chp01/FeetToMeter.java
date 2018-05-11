class FeetToMeter {
  public static void main(String args[]) {
    double inch, inchToMeters;
    int count;

    inchToMeters = 39.37;
    count = 0;

    for(inch = 1; inch <= 144; inch++) {
      System.out.println(inch + "in. is equal to " + inch / inchToMeters +
                         " meters.");
      count++;

      if(count == 12) {
        System.out.println();
        count = 0;
      }
    }
  }
}
