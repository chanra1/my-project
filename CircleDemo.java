package First_Class_Object_Circle;

public class CircleDemo {
    public static void main(String[] args) {

        Circle circle3 = new Circle(3);
        Circle circle5 = new Circle(5);

        System.out.println("Circle radius 3.0 has:");
        System.out.println("--> Parimeter "+ circle3.getPerimeter());
        System.out.println("--> Area "+ circle3.getArea());

        System.out.println("Circle radius 5.0 has:");
        System.out.println("--> Parimeter "+ circle5.getPerimeter());
        System.out.println("--> Area "+ circle5.getArea());
    }
}
