import planet.Mars;
import planet.moon.Phobos;
import chocolate.Mars;

public class Astronaut {
    private static int count = 0;
    private final String name;
    private int snacks = 0;
    private String destination = null;
    private int id;

    public Astronaut(String name) {
        this.name = name;
        this.id = count ++;
        System.out.println(name + " ready for launch!");
    }

    public String getName() {
        return name;
    }

    public int getSnacks() {
        return snacks;
    }

    public String getDestination() {
        return destination;
    }

    public int getId() {
        return id;
    }

    public void doActions() {
        doActions(null);
    }

    public void doActions(Object object) {
        if (object == null) {
            System.out.println(name + ": Nothing to do.");
        } else if (object instanceof planet.Mars) {
            planet.Mars mars = (planet.Mars) object;
            this.destination = mars.getLandingSite();
            System.out.println(name + ": Started a mission!");
        } else if (object instanceof chocolate.Mars) {
            chocolate.Mars mars = (chocolate.Mars) object;
            this.snacks++;
            System.out.println(name + ": Thanks for this mars number " + mars.getId());
        } else if (object instanceof Phobos) {
            Phobos phobos = (Phobos) object;
            this.destination = "Phobos";
            System.out.println(name + ": Started a mission to Phobos!");  
        }if (this.destination == null) {
            System.out.println(name + ": I may have done nothing, but I have " + this.snacks + " Mars to eat at least!");
        }
    }



}
