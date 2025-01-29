import java.util.HashMap;
import java.util.Map;

public class Stock {
    private Map<Class<? extends Food>, Integer> stockItems;

    public Stock() {
        stockItems = new HashMap<>();
        stockItems.put(AppleSmoothie.class, 100);
        stockItems.put(Coke.class, 100);
        stockItems.put(FrenchBaguette.class, 100);
        stockItems.put(SoftBread.class, 100);
        stockItems.put(HamSandwich.class, 100);
        stockItems.put(Panini.class, 100);
        stockItems.put(Cookie.class, 100);
        stockItems.put(CheeseCake.class, 100);
    }

    public int getNumberOf(Class<? extends Food> foodClass) throws NoSuchFoodException {
        if (stockItems.containsKey(foodClass)) {
            return stockItems.get(foodClass);
        } else {
            throw new NoSuchFoodException("No such food type: " + foodClass.getSimpleName());
        }
    }

    public boolean add(Class<? extends Food> foodClass) throws NoSuchFoodException {
        if (stockItems.containsKey(foodClass)) {
            stockItems.put(foodClass, stockItems.get(foodClass) + 1);
            return true;
        } else {
            throw new NoSuchFoodException("No such food type: " + foodClass.getSimpleName());
        }
    }

    public boolean remove(Class<? extends Food> foodClass) throws NoSuchFoodException {
        if (stockItems.containsKey(foodClass)) {
            int currentCount = stockItems.get(foodClass);
            if (currentCount > 0) {
                stockItems.put(foodClass, currentCount - 1);
                return true;
            } else {
                return false;
            }
        } else {
            throw new NoSuchFoodException("No such food type: " + foodClass.getSimpleName());
        }
    }
}
