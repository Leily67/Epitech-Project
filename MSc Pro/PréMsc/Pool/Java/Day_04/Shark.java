public class Shark extends Animal {
    private boolean frenzy = false;

    public Shark(String name) {
        super(name, 0, Type.FISH);
        System.out.println("A KILLER IS BORN!");
    }

    public boolean canEat(Animal animal) {
        if (!animal.getName().equals(getName())) {
            return true;
        } else {
            return false;
        }
    }

    public void eat(Animal animal) {
        if (canEat(animal)) {
            System.out.println(getName() + " ate a " + animal.getType().toString() + " named " + animal.getName() + ".");
            frenzy = false;
        } else {
            System.out.println(getName() + ": It's not worth my time.");
        }
    }

    public void smellBlood(boolean value) {
        frenzy = value;
    }

    public void status() {
        if (frenzy) {
            System.out.println(getName() + " is smelling blood and wants to kill.");
        } else {
            System.out.println(getName() + " is swimming peacefully.");
        }
    }
}