import java.util.ArrayList;
import java.util.List;

public class CustomerOrder {
    private List<Food> items;
    private List<Menu<?, ?>> menus;
    private Stock stock;

    public CustomerOrder(Stock stock) {
        this.items = new ArrayList<>();
        this.menus = new ArrayList<>();
        this.stock = stock;
    }

    public boolean addItem(Food food) {
        Class<? extends Food> foodClass = food.getClass();
        try {
            if (stock.remove(foodClass)) {
                items.add(food);
                return true;
            }
        } catch (NoSuchFoodException e) {
            System.out.println(e.getMessage());
        }
        return false;
    }

    public boolean removeItem(Food food) {
        if (items.remove(food)) {
            try {
                stock.add(food.getClass());
                return true;
            } catch (NoSuchFoodException e) {
                System.out.println(e.getMessage());
            }
        }
        return false;
    }

    public float getPrice() {
        float total = 0.0f;
        for (Food item : items) {
            total += item.getPrice();
        }
        for (Menu<?, ?> menu : menus) {
            total += menu.getPrice();
        }
        return total;
    }

    public boolean addMenu(Menu<?, ?> menu) {
        try {
            if (stock.getNumberOf(menu.getDrink().getClass()) > 0 && stock.getNumberOf(menu.getMeal().getClass()) > 0) {
                stock.remove(menu.getDrink().getClass());
                stock.remove(menu.getMeal().getClass());
                menus.add(menu);
                return true;
            }
        } catch (NoSuchFoodException e) {
            System.out.println(e.getMessage());
        }
        return false;
    }

    public boolean removeMenu(Menu<?, ?> menu) {
        if (menus.remove(menu)) {
            try {
                stock.add(menu.getDrink().getClass());
                stock.add(menu.getMeal().getClass());
                return true;
            } catch (NoSuchFoodException e) {
                System.out.println(e.getMessage());
            }
        }
        return false;
    }

    public void printOrder() {
        System.out.println("Your order is composed of:");
        for (Menu<?, ?> menu : menus) {
            System.out.println("- " + menu.getClass().getSimpleName() + " menu (" + menu.getPrice() + " euros)");
            System.out.println("-> drink: " + menu.getDrink().getClass().getSimpleName());
            System.out.println("-> meal: " + menu.getMeal().getClass().getSimpleName());
        }
        for (Food item : items) {
            System.out.println("- " + item.getClass().getSimpleName() + " (" + item.getPrice() + " euros)");
        }
        System.out.println("For a total of " + getPrice() + " euros.");
    }
}
