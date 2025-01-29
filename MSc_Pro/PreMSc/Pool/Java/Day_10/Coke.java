public class Coke extends Drink {
    private float price;
    private int calories;

    public Coke() {
        this.aCan = true; 
        this.price = 1.20f;
        this.calories = 105;
    }

    @Override
    public float getPrice() {
        return this.price;
    }

    @Override
    public int getCalories() {
        return this.calories;
    }
}
