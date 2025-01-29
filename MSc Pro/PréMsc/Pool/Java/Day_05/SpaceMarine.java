public abstract class SpaceMarine extends Unit {
    protected Weapon weapon;

    protected SpaceMarine(String name, int hp, int ap) {
        super(name, hp, ap);
        this.weapon = null;
    }

    public Weapon getWeapon() {
        return weapon;
    }

    public boolean equip(Weapon weapon) {
        if (this.weapon != null || ap < weapon.getApcost()) {
            return false;
        }
        this.weapon = weapon;
        System.out.println(name + " has been equipped with a " + weapon.getName() + ".");
        return true;
    }

    public boolean attack(Fighter target) {
        if (weapon == null) {
            System.out.println(name + ": Hey, this is crazy. I'm not going to fight this empty-handed.");
            return false;
        }

        if (weapon.isMelee() && !moveCloseTo(target)) {
            System.out.println(name + ": I'm too far away from " + target.getName() + ".");
            return false;
        }

        if (ap < weapon.getApcost()) {
            System.out.println(name + ": I don't have enough action points!");
            return false;
        }

        System.out.println(name + " attacks " + target.getName() + " with a " + weapon.getName() + ".");
        weapon.attack();
        target.receiveDamage(weapon.getDamage());
        ap -= weapon.getApcost();

        return true;
    }
}
