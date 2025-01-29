public class CheeseCake extends Dessert {
    private float price;
    private int calories;

    public CheeseCake() {
        this.price = 2.10f;
        this.calories = 321;
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
