public abstract class Bread implements Food {
    protected float price;
    protected int calories;
    protected int bakingTime;

    public Bread(float price, int calories) {
        this.price = price;
        this.calories = calories;
        this.bakingTime = 0;
    }

    public float getPrice() {
        return this.price;
    }

    public int getCalories() {
        return this.calories;
    }

    public int getBakingTime() {
        return this.bakingTime;
    }
    
}
