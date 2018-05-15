// Add range to Vehicle
class Vehicle {
  int passengers;
  int fuelcap;
  int mpg;

  // Display the range
  void range() {
    System.out.println("Range is " + fuelcap * mpg);
  }
}

class AddMeth {
  public static void main(String args[]) {
    Vehicle minivan = new Vehicle();
    Vehicle sportscar = new Vehicle();

    int range1, range2;

    // assign values to fields in minivan
    minivan.passengers = 7;
    minivan.fuelcap = 16;
    minivan.mpg = 21;

    // assign values to fields in sportscar
    sportscar.passengers = 2;
    sportscar.fuelcap = 14;
    sportscar.mpg = 12;

    System.out.print("Minivan can carry " + minivan.passengers + ". ");

    minivan.range();

    System.out.print("Sportscar can carry " + sportscar.passengers + ". ");

    sportscar.range();
  }
}
