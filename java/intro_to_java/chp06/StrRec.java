class StrRec {
  static String recReversePrint(String string) {
    int lastCharIdx = string.length() - 1;
    char lastChar = string.charAt(lastCharIdx);

    if (string.length() == 1) return string;
    else return lastChar + recReversePrint(string.substring(0, lastCharIdx));
  }

  public static void main(String[] args) {
    System.out.println(recReversePrint("hello world"));
  }
}
