public class Cookie extends Dessert {
    private float price;
    private int calories;

    public Cookie() {
        this.price = 0.90f;
        this.calories = 502;
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
