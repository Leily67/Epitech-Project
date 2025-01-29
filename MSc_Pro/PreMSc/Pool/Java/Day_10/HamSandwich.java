import java.util.Arrays;
import java.util.List;

public class HamSandwich extends Sandwich {
    private float price;
    private int calories;

    public HamSandwich() {
        this.price = 4.00f;
        this.calories = 230;
        this.ingredients = Arrays.asList("tomato", "salad", "cheese", "ham", "butter");
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
