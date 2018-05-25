// Add more constructors to TwoDShape
class TwoDShape {
  private double width;
  private double height;

  // a default constructor
  TwoDShape() {
    width = height = 0.0;
  }

  // Parameterized constructor
  TwoDShape(double w, double h) {
    width = w;
    height = h;
  }

  // Construct object with equal width and height
  TwoDShape(double x) {
    width = height = x;
  }

  double getWidth() { return width; }
  double getHeight() { return height; }
  void setWidth(double w) { width = w; }
  void setHeight(double h) { height = h; }

  void showDim() {
    System.out.println("Width and height are " + width + " " + height);
  }
}

class Triangle extends TwoDShape {
  String style;

  // A default constructor
  Triangle() {
    super();
    style = "none";
  }

  // Constructor
  Triangle(String s, double w, double h) {
    super(w, h);
    style = s;
  }

  // One argument
  Triangle(double x) {
    super(x);
    style = "filled";
  }

  double area() {
    return getWidth() * getHeight();
  }

  void showStyle() {
    System.out.println("Triangle is " + style);
  }
}

class Shapes5 {
  public static void main(String[] args) {
    Triangle t1 = new Triangle();
    Triangle t2 = new Triangle("outlined", 8.0, 12.0);
    Triangle t3 = new Triangle(4.0);

    t1 = t2;

    System.out.println("Info for t1: ");
    t1.showStyle();
    t1.showDim();
    System.out.println("Area is " + t1.area());

    System.out.println();

    System.out.println("Info for t2: ");
    t2.showStyle();
    t2.showDim();
    System.out.println("Area is " + t2.area());

    System.out.println();
    
    System.out.println("Info for t3: ");
    t3.showStyle();
    t3.showDim();
    System.out.println("Area is " + t3.area());

    System.out.println();
  }
}
