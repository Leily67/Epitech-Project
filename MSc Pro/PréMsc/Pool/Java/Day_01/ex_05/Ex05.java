import java.util.ArrayList;

class Ex05 {
    public static ArrayList<String> myGetArgs(String... var){
        ArrayList<String> args = new ArrayList<String>();
        for (String arg : var) {
            args.add(arg);
        }
        return args;
    }
}
