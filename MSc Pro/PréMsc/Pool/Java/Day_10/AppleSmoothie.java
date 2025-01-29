public class AppleSmoothie extends Drink {
    private float price;
    private int calories;

    public AppleSmoothie() {
        this.price = 1.50f;
        this.calories = 431;
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
