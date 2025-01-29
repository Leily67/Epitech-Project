public class GreatWhite extends Shark {

    public GreatWhite(String name) {
        super(name);
        System.out.println("A KILLER IS BORN!");
    }

    @Override
    public boolean canEat(Animal animal) {
        if (animal instanceof Canary) {
            System.out.println(getName() + ": Next time you try to give me that to eat, I'll eat you instead.");
            return false;
        } else if (animal instanceof Shark) {
            System.out.println(getName() + ": The best meal one could wish for..");
            return true;
        } else {
            return super.canEat(animal);
        }
    }
}