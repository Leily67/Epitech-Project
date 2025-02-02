<?php

    /// CAESAR

    function caesar($value, $key) {
        for($i = 0; $i < strlen($value); $i++){
            if(ctype_alpha($value[$i])){
                if(ctype_lower($value[$i])){
                    //on est en minuscule
                    $code = ord($value[$i]);
                    $new_code = $code + $key;
                    $new_code = ($new_code - 97) % 26 + 97;
                    $value[$i] = chr($new_code);
                }else{
                    //on est en majuscule
                    $code = ord($value[$i]);
                    $new_code = $code + $key;
                    $new_code = ($new_code - 65) % 26 + 65;
                    $value[$i] = chr($new_code);
                }
            }
        }
        return $value;
    }

    $caesar_dechiffrement_text = "";
    $caesar_chiffrement_text = "";
    $caesar_key = 3;

    if(isset($_POST['caesar_dechiffrement_submit'])){
        $caesar_dechiffrement_text = $_POST['caesar_dechiffrement_area'];
        $caesar_key = $_POST['caesar_dechiffrement_decalage'];
        $caesar_chiffrement_text = caesar($caesar_dechiffrement_text, 26 - $caesar_key);
    }
    if(isset($_POST['caesar_chiffrement_submit'])){
        $caesar_chiffrement_text = $_POST['caesar_chiffrement_area'];
        $key = $_POST['caesar_chiffrement_decalage'];
        $caesar_dechiffrement_text = caesar($caesar_chiffrement_text, $caesar_key);
    }

    /// VIGENERE

    function vigenere_chiffre($value, $key) {
        $key = strtolower($key);
        $keylen = strlen($key);
        for($i=0; $i < strlen($value); $i++){
            $keyletter = $key[$i % $keylen];
            $keycode = ord($keyletter) - 97;
            if(ctype_alpha($value[$i])){
                $code = ord($value[$i]);
                if(ctype_lower($value[$i])){
                    $new_code = $code + $keycode;
                    $new_code = ($new_code - 97) % 26 + 97;
                    $value[$i] = chr($new_code);
                }else{
                    $new_code = $code + $keycode;
                    $new_code = ($new_code - 65) % 26 + 65;
                    $value[$i] = chr($new_code);
                }
            }
        }
        return $value;
    }    

    function vigenere_dechiffre($value, $key) {
        $key = strtolower($key);
        $keylen = strlen($key);
        for($i=0; $i < strlen($value); $i++){
            $keyletter = $key[$i % $keylen];
            $keycode = ord($keyletter) - 97;
            if(ctype_alpha($value[$i])){
                $code = ord($value[$i]);
                if(ctype_lower($value[$i])){
                    $code = $code - 97;
                    $new_code = $code - $keycode;
                    $new_code = $new_code + 26;
                    $new_code = $new_code % 26 + 97;
                    $value[$i] = chr($new_code);

                }else{
                    $code = $code - 65;
                    $new_code = $code - $keycode;
                    $new_code = $new_code + 26;
                    $new_code = $new_code % 26 + 65;
                    $value[$i] = chr($new_code);
                }
            }
        }
        return $value;
    }    

    $vigenere_dechiffrement_text = "";
    $vigenere_chiffrement_text = "";
    $vigenere_key = "prout";
    $vigenere_error = "";

    if(isset($_POST['vigenere_dechiffrement_submit'])){
        $vigenere_dechiffrement_text = $_POST['vigenere_dechiffrement_area'];
        $vigenere_key = $_POST['vigenere_dechiffrement_cle'];
        if(ctype_alpha($vigenere_key)){
            $vigenere_chiffrement_text = vigenere_dechiffre($vigenere_dechiffrement_text, $vigenere_key); 
        }else{
            $vigenere_error = "La clé est mauvaise";
        }
    }
    if(isset($_POST['vigenere_chiffrement_submit'])){
        $vigenere_chiffrement_text = $_POST['vigenere_chiffrement_area'];
        $vigenere_key = $_POST['vigenere_chiffrement_cle'];
        if(ctype_alpha($vigenere_key)){        
            $vigenere_dechiffrement_text = vigenere_chiffre($vigenere_chiffrement_text, $vigenere_key);
        }else{
            $vigenere_error = "La clé est mauvaise";
        }
    }


        /// MASQUE JETABLE

        function vernam_chiffre($value, $key) {
            $key = strtolower($key);
            $keylen = strlen($key);
            for($i=0; $i < strlen($value); $i++){
                $keyletter = $key[$i % $keylen];
                $keycode = ord($keyletter) - 97;
                if(ctype_alpha($value[$i])){
                    $code = ord($value[$i]);
                    if(ctype_lower($value[$i])){
                        $new_code = $code + $keycode;
                        $new_code = ($new_code - 97) % 26 + 97;
                        $value[$i] = chr($new_code);
                    }else{
                        $new_code = $code + $keycode;
                        $new_code = ($new_code - 65) % 26 + 65;
                        $value[$i] = chr($new_code);
                    }
                }
            }
            return $value;
        }    
    
        function vernam_dechiffre($value, $key) {
            $key = strtolower($key);
            $keylen = strlen($key);
            for($i=0; $i < strlen($value); $i++){
                $keyletter = $key[$i % $keylen];
                $keycode = ord($keyletter) - 97;
                if(ctype_alpha($value[$i])){
                    $code = ord($value[$i]);
                    if(ctype_lower($value[$i])){
                        $code = $code - 97;
                        $new_code = $code - $keycode;
                        $new_code = $new_code + 26;
                        $new_code = $new_code % 26 + 97;
                        $value[$i] = chr($new_code);
    
                    }else{
                        $code = $code - 65;
                        $new_code = $code - $keycode;
                        $new_code = $new_code + 26;
                        $new_code = $new_code % 26 + 65;
                        $value[$i] = chr($new_code);
                    }
                }
            }
            return $value;
        }
        
        function load_keys(){
            if(file_exists("keys") == FALSE){
                return array();
            } 
            $file = file_get_contents("keys");
            $keys = explode("\n", $file);
            return $keys;
        }

        function write_keys($keys){
            file_put_contents("keys", implode("\n", $keys));
        }
    
        $vernam_dechiffrement_text = "";
        $vernam_chiffrement_text = "";
        $vernam_key = "chiffrement";
        $vernam_error = "";
        $keys = load_keys();
        

    
        if(isset($_POST['vernam_dechiffrement_submit'])){
            $vernam_dechiffrement_text = $_POST['vernam_dechiffrement_area'];
            $vernam_key = $_POST['vernam_dechiffrement_cle'];
            if((strlen($vernam_key)) >= strlen($vernam_dechiffrement_text) && ctype_alpha($vernam_key)){
                $vernam_chiffrement_text = vernam_dechiffre($vernam_dechiffrement_text, $vernam_key);
            }else{
                $vernam_error = "la clé est mauvaise";
            }
            
        }
        if(isset($_POST['vernam_chiffrement_submit'])){
            $vernam_chiffrement_text = $_POST['vernam_chiffrement_area'];
            $vernam_key = $_POST['vernam_chiffrement_cle'];
            if((strlen($vernam_key)) >= strlen($vernam_chiffrement_text) && ctype_alpha($vernam_key) && in_array($vernam_key, $keys) == FALSE){
                $vernam_dechiffrement_text = vernam_chiffre($vernam_chiffrement_text, $vernam_key);
                array_push($keys, $vernam_key);
                write_keys($keys);
            }else{
                $vernam_error = "la clé est mauvaise";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="title">
    <h1>~ ENIGMA ~</h1><br><br>
</div>
<div class="row">
    <div class="col">
    <h2>CESAR</h2><br><br>
        <form action="" method="post">
            <label for="caesar_dechiffrement_area">DECHIFFREMENT DU CODE</label><br />
            <textarea name="caesar_dechiffrement_area"><?php echo $caesar_dechiffrement_text; ?></textarea><br />
            <label for="caesar_dechiffrement_decalage">DECALAGE/CLE</label>
            <input type="number" name="caesar_dechiffrement_decalage" min="1" max="26" value="<?php echo $caesar_key; ?>"><br />
            <input type="submit" name="caesar_dechiffrement_submit" value="DECHIFFRER">
        </form><br><br>
        <form action="" method="post">
            <label for="caesar_chiffrement_area">CHIFFREMENT DU CODE</label><br />
            <textarea name="caesar_chiffrement_area"><?php echo $caesar_chiffrement_text; ?></textarea><br />
            <label for="caesar_chiffrement_decalage">DECALAGE/CLE</label>
            <input type="number" name="caesar_chiffrement_decalage" min="1" max="26" value="<?php echo $caesar_key; ?>"><br />
            <input type="submit" name="caesar_chiffrement_submit" value="CHIFFRER">
        </form><br><br>  
    </div>
    <div class="col">
    <h2>VIGENERE</h2><br><br>
        <form action="" method="post">
            <label for="vigenere_dechiffrement_area">DECHIFFREMENT DU CODE</label><br />
            <textarea name="vigenere_dechiffrement_area"><?php echo $vigenere_dechiffrement_text; ?></textarea><br />
            <label for="vigenere_dechiffrement_cle">CLE</label>
            <input type="text" name="vigenere_dechiffrement_cle" value="<?php echo $vigenere_key; ?>"><br />
            <input type="submit" name="vigenere_dechiffrement_submit" value="DECHIFFRER">
        </form><br><br>
        <form action="" method="post">
            <label for="vigenere_chiffrement_area">CHIFFREMENT DU CODE</label><br />
            <textarea name="vigenere_chiffrement_area"><?php echo $vigenere_chiffrement_text; ?></textarea><br />
            <label for="vigenere_chiffrement_cle">CLE</label>
            <input type="text" name="vigenere_chiffrement_cle" value="<?php echo $vigenere_key; ?>"><br />
            <input type="submit" name="vigenere_chiffrement_submit" value="CHIFFRER">
        </form>
        <div class="error"><?php echo $vigenere_error; ?></div>
        <br><br>  
    </div>
    <div class="col">
    <h2>MASQUE JETABLE</h2><br><br>
        <form action="" method="post">
            <label for="vernam_dechiffrement_area">DECHIFFREMENT DU CODE</label><br />
            <textarea name="vernam_dechiffrement_area"><?php echo $vernam_dechiffrement_text; ?></textarea><br />
            <label for="vernam_dechiffrement_cle">CLE</label>
            <input type="text" name="vernam_dechiffrement_cle" value="<?php echo $vernam_key; ?>"><br />
            <input type="submit" name="vernam_dechiffrement_submit" value="DECHIFFRER">
        </form><br><br>
        <form action="" method="post">
            <label for="vernam_chiffrement_area">CHIFFREMENT DU CODE</label><br />
            <textarea name="vernam_chiffrement_area"><?php echo $vernam_chiffrement_text; ?></textarea><br />
            <label for="vernam_chiffrement_cle">CLE</label>
            <input type="text" name="vernam_chiffrement_cle" value="<?php echo $vernam_key; ?>"><br />
            <input type="submit" name="vernam_chiffrement_submit" value="CHIFFRER">
        </form>
        <div class="error"><?php echo $vernam_error; ?></div>
    </div>
</div>
</body>
</html>