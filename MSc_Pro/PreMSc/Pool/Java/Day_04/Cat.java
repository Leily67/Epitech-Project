public class Cat extends Animal{
    private String color;

    public Cat(String name,String color) {
        super(name,4,Type.MAMMAL);
        this.color = color;
        System.out.println(name+": MEEEOOWWWW");
    }

    public Cat(String name) {
        super(name,4,Type.MAMMAL);
        this.color = "grey";
        System.out.println(name+": MEEEOOWWWW");
    }

    public String getColor() {
        return color;
    }

    public void meow(){
        System.out.println(super.getName() + " the "+this.color+" kitty is meowing.");
    }
}
