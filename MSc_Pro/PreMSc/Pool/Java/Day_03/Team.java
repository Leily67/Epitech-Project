import java.util.ArrayList;
import java.util.List;

public class Team {
    private final String name;
    private final List<Astronaut> members;

    public Team(String name) {
        this.name = name;
        this.members = new ArrayList<>();
    }

    public String getName() {
        return this.name;
    }

    public void add(Astronaut astronaut) {
        if (astronaut != null) {
            this.members.add(astronaut);
        }
    }

    public void remove(Astronaut astronaut) {
        this.members.remove(astronaut);
    }

    public int countMembers() {
        return this.members.size();
    }

    public void showMembers() {
        if (this.members.isEmpty()) {
            return;
        }

        StringBuilder teamStatus = new StringBuilder(this.name + ": ");
        for (Astronaut astronaut : this.members) {
            teamStatus.append(astronaut.getName());

            if (astronaut.getDestination() != null) {
                teamStatus.append(" on mission, ");
            } else {
                teamStatus.append(" on standby, ");
            }
        }

        if (teamStatus.length() > 0) {
            teamStatus.setLength(teamStatus.length() - 2);
            teamStatus.append(".");
        }

        System.out.println(teamStatus);
    }
}
