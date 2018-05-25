class Stack {
  private char[] stack;
  private int putloc, getloc;

  Stack(int size) {
    stack = new char[size];
    putloc = getloc = stack.length - 1;
  }

  void push(char ch) {
    if (putloc < 0) {
      System.out.println(" - Stack is full!");
      return;
    }

    stack[putloc] = ch;
    putloc--;
    getloc--;
    if (getloc < 0) getloc = 0;
  }

  char pop() {
    if (getloc == stack.length) {
      System.out.println(" - Stack is empty!");
      return (char) 0;
    }

    return stack[getloc++];
  }
}

class StackDemo {
  public static void main(String[] args) {
    Stack s1 = new Stack(4);

    for (int i = 0; i < 4; i++)
      s1.push('X');

    System.out.print("Contents of s1: ");
    for (int i = 0; i < 4; i++)
      System.out.print(s1.pop() + " ");

    System.out.println();
  }
}
