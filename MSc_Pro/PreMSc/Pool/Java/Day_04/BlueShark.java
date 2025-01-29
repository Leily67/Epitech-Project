public class BlueShark extends Shark {

    public BlueShark(String name) {
        super(name);
        System.out.println("A KILLER IS BORN!");
    }
    
    public boolean canEat(Animal animal) {
        if (animal.getType().equals("FISH") && !animal.getName().equals(getName())) {
            return true;
        } else {
            return false;
        }
    }
}