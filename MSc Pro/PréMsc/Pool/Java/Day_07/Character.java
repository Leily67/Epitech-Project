public abstract class Character implements Movable, Comparable<Character> {
    protected String name;
    protected int life = 50;
    protected int agility = 2;
    protected int strength = 2;
    protected int wit = 2;
    protected final String RPGClass;
    protected int capacity = 0;

    public Character(String name, String RPGClass) {
        this.name = name;
        this.RPGClass = RPGClass;
    }

    public Character(String name, String RPGClass, int capacity) {
        this.name = name;
        this.RPGClass = RPGClass;
        this.capacity = capacity;
    }

    public String getName() {
        return name;
    }

    public int getLife() {
        return life;
    }

    public int getAgility() {
        return agility;
    }

    public int getStrength() {
        return strength;
    }

    public int getWit() {
        return wit;
    }

    public String getRPGClass() {
        return RPGClass;
    }

    public void attack(String weapon) {
        System.out.println(name + ": Rrrrrrrrr....");
    }

    @Override
    public void moveRight() {
        System.out.println(name + ": moves right");
    }

    @Override
    public void moveLeft() {
        System.out.println(name + ": moves left");
    }

    @Override
    public void moveForward() {
        System.out.println(name + ": moves forward");
    }

    @Override
    public void moveBack() {
        System.out.println(name + ": moves back");
    }

    public final void unsheathe() {
        System.out.println(name + ": unsheathes his weapon.");
    }

    @Override
    public int compareTo(Character other) {
        if (this.getRPGClass().equals(other.getRPGClass())) {
            return Integer.compare(this.capacity, other.capacity);
        } else if (this instanceof Warrior && other instanceof Mage) {
            return this.capacity % other.capacity == 0 ? 1 : -1;
        } else if (this instanceof Mage && other instanceof Warrior) {
            return other.capacity % this.capacity == 0 ? -1 : 1;
        }
        return 0;
    }
}
