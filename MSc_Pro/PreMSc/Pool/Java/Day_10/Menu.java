public abstract class Menu<T extends Food, U extends Food> {
    protected T drink;
    protected U meal;

    public Menu(T drink, U meal) {
        this.drink = drink;
        this.meal = meal;
    }

    public T getDrink() {
        return drink;
    }

    public U getMeal() {
        return meal;
    }

    public float getPrice() {
        float total = drink.getPrice() + meal.getPrice();
        return total - total * 0.1f;
    }
}
