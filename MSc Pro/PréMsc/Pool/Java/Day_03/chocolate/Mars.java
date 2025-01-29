package chocolate;

public class Mars {
    private static int count = 0;
    private final int id;

    public Mars() {
        this.id = count ++;
    }

    public int getId() {
        return id;
    }
}
