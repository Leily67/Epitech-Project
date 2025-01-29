import java.util.ArrayList;
import java.util.List;

public class Battalion {
    private List<Character> characters = new ArrayList<>();

    public void add(List<? extends Character> newCharacters) {
        characters.addAll(newCharacters);
    }

    public void display() {
        for (Character character : characters) {
            System.out.println(character.getName());
        }
    }

    public boolean fight() {
        if (characters.size() < 2) {
            return false;
        }

        Character first = characters.get(0);
        Character second = characters.get(1);

        int result = first.compareTo(second);
        if(result == 0) {
            characters.remove(first);
            characters.remove(second);
        } else if (result < 0) {
            characters.remove(first);
        } else {
            characters.remove(second);
        } return true;
    }
}
