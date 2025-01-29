public abstract class Monster extends Unit {
    protected int damage;
    protected int apcost;

    protected Monster(String name, int hp, int ap, int damage) {
        super(name, hp, ap);
        this.damage = damage;
        this.apcost = 3;
    }

    public int getDamage() {
        return damage;
    }

    public int getApcost() {
        return apcost;
    }

    public boolean isAlive() {
        return getHp() > 0;
    }

    public boolean equip(Weapon weapon) {
        System.out.println("Monsters are proud and fight with their own bodies.");
        return false;
    }

    public boolean attack(Fighter target) {
        if (!isAlive()){
            return false;
        }

        if (ap < apcost) {
            System.out.println(name + ": I don't have enough action points!");
            return false;
        }
        if (!moveCloseTo(target)) {
            System.out.println(name + ": I'm too far away from " + target.getName() + ".");
            return false;
        }
        
        System.out.println(name + " attacks " + target.getName() + ".");
        target.receiveDamage(damage);
        ap -= apcost;

        return true;
    }
}
