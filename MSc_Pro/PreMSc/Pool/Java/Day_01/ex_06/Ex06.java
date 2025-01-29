class Ex06 {
    public static void sequence(int nbr) {
        if(nbr < 0){
            return;
        }
        String current = "1";
        for(int i = 0; i <= nbr; i++){
            System.out.println(current);
            StringBuilder next = new StringBuilder();
            char prev = current.charAt(0);
            int count = 1;
            for(int j = 1; j < current.length(); j++){
                char curr = current.charAt(j);
                if(curr == prev){
                    count ++;
                } else {
                    next.append(count).append(prev);
                    prev = curr;
                    count = 1;
                }
            }
            next.append(count).append(prev);
            current = next.toString();
        }
    }
}
