public abstract class Unit implements Fighter {
    protected String name;
    protected int hp;
    protected int ap;

    protected boolean isAlive;
    protected boolean hasMoved;

    protected Unit(String name, int hp, int ap) {
        this.name = name;
        this.hp = hp;
        this.ap = ap;
        this.isAlive = true;
    }

    public String getName() {
        return name;
    }

    public int getHp() {
        return hp;
    }

    public int getAp() {
        return ap;
    }

    public void receiveDamage(int damage) {
        if (!isAlive) return;

        hp -= damage;
        if (hp <= 0) {
            hp = 0;
            isAlive = false;
        }
    }

    public boolean moveCloseTo(Fighter target) {
        if (ap < 1 || this == target || this.hasMoved) {
            return false;
        }
        System.out.println(name + " is moving closer to " + target.getName() + ".");
        this.hasMoved = true;
        ap--;
        return true;
    }

    public void recoverAP() {
        if (!isAlive) return;
        ap += 7;
        if (ap > 50) {
            ap = 50;
        }
    }
}