public class Gecko {

    private String name;
    private int age;
    private int energy;

    public Gecko() {
        this.name = "Unknown";
        this.age = 0;
        this.energy = 100;
        System.out.println("Hello!");
    }

    public Gecko(String name) {
        this.name = name;
        this.age = 0;
        this.energy = 100;
        System.out.println("Hello " + name + "!");
    }

    public Gecko(String name, int age) {
        this.name = name;
        this.age = age;
        this.energy = 100;
        System.out.println("Hello " + name + "!");
    }

    public String getName() {
        return this.name;
    }

    public int getAge() {
        return this.age;
    }

    public int getEnergy() {
        return this.energy;
    }

    public void setAge(int age) {
        if (age < 0) {
            System.out.println("Age cannot be negative.");
            return;
        }
        this.age = age;
    }

    public void status() {
        switch (this.age) {
            case 0:
                System.out.println("Unborn Gecko");
                break;
            case 1:
            case 2:
                System.out.println("Baby Gecko");
                break;
            case 3:
            case 4:
            case 5:
            case 6:
            case 7:
            case 8:
            case 9:
            case 10:
                System.out.println("Adult Gecko");
                break;
            case 11:
            case 12:
            case 13:
                System.out.println("Old Gecko");
                break;
            default:
                System.out.println("Impossible Gecko");
                break;
        }
    }

    public void hello(String someone) {
        System.out.println("Hello " + someone + ", I'm " + this.name + "!");
    }

    public void hello(int times) {
        for (int i = 0; i < times; i++) {
            System.out.println("Hello, I'm " + this.name + "!");
        }
    }

    public void hello(Object param) {
        if (param instanceof String) {
            hello((String) param);
        } else if (param instanceof Integer) {
            hello((Integer) param);
        }
    }

    public void eat(String food) {
        food = food.toLowerCase();

        switch (food) {
            case "meat":
                System.out.println("Yummy!");
                this.setEnergy(this.energy + 10);
                break;
            case "vegetable":
                System.out.println("Erk!");
                this.setEnergy(this.energy - 10);
                break;
            default:
                System.out.println("I can't eat this!");
                break;
        }
    }

    public void setEnergy(int energy) {
        if(energy < 0) {
            this.energy = 0;
        } else if (energy > 100) {
            this.energy = 100;
        } else {
            this.energy = energy;
        }
    }
}