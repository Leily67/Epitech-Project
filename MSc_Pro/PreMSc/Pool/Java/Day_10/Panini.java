import java.util.Arrays;
import java.util.List;

public class Panini extends Sandwich {
    private float price;
    private int calories;

    public Panini() {
        this.vegetarian = true;
        this.price = 3.50f;
        this.calories = 120;
        this.ingredients = Arrays.asList("tomato", "salad", "cucumber", "avocado", "cheese");
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
