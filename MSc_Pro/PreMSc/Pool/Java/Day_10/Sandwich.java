import java.util.List;

public abstract class Sandwich implements Food {
    protected boolean vegetarian = false;
    protected List<String> ingredients;

    public boolean isVegetarian() {
        return this.vegetarian;
    }

    public List<String> getIngredients() {
        return this.ingredients;
    }
}
