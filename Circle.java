package First_Class_Object_Circle;

public class Circle {
    double radius;

    public Circle() {
        this.setRadius(1);
    }
    public  Circle(double radius) {
        this.setRadius(radius);
    }
    public  void setRadius(double radius) {
        this.radius = radius;
    }
    public  double getRadius() {
        return radius;
    }
    public  double getPerimeter() {
        return 2 * Math.PI * this.getRadius();
    }
    public  double getArea() {
        return  Math.PI * this.getRadius() * this.getRadius();
    }
}
