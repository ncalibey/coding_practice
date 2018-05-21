class AvgValues {
  public static void main(String[] args) {
    double[] nums = { 10.35, 86.35, 900.35, 1234.345, 74.2034,
                   0923.2348, 934.34, 77.45, 99.99, 102.3235 };
    double sum = 0;

    for (double n : nums) {
      sum += n;
    }

    System.out.println(sum / nums.length);
  }
}
