class MinMax3 {
  public static void main(String args[]) {
    int nums[] = { 99, -10, 100123, 18, -978,
                   5623, 463, -9, 287, 49 };
    int min, max;

    min = max = nums[0];

    for (int n : nums) {
      if (n < min) min = n;
      if (n > max) max = n;
    }
    System.out.println("Min and max: " + min + " " + max);
  }
}
