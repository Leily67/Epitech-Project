<?php

function options($argv)
{
    
}

function my_merge($array)
{
    $total_width = 0;
    $height_array = [];
    $destination_x = 0;
    $cssarray = [];

    foreach($array as $image)
    {
        list($width, $height) = getimagesize($image);
        $height_array[] = $height;
        $total_width += $width;
    }

    $max_height = max($height_array);
    $background = imagecreatetruecolor($total_width, $max_height);
    imagesavealpha($background, TRUE);
    $color = imagecolorallocatealpha($background, 0, 0, 0, 127);
    imagefill($background, 0, 0, $color);

    foreach($array as $image)
    {
        list($width, $height) = getimagesize($image);
        $image_png = imagecreatefrompng($image);
        imagecolortransparent($image_png, $color);
        imagecopymerge($background, $image_png, $destination_x, 0, 0, 0, $width, $height, 100);
        $destination_x += $width;

        $cssarray[] = array(
            $width,
            $height,
            $image,
            $destination_x
        );
    }
    imagepng($background, "sprite.png");
    my_generate_css($cssarray);

}

function my_generate_css($machin)
{
    $png_name = "sprite.png";
    $content = ".sprite {
        background-image: url($png_name);
        background-repeat: no-repeat;
        display: block;
}";

    foreach($machin as $file)
    {
        list($width, $height,$image, $destination_x) = $file;
        $trimmed_name = basename($image, ".png");
        $content .= "\n.sprite-$trimmed_name {
    width: ". $width ."px;
    height: ". $height ."px;
    background-position: ". $destination_x."px 0px;
}";
    }

    file_put_contents("style.css", $content);

}

function my_scandir($directory, $recur)
{
    $images_array = [];

    $handle = opendir($directory);
    while (($images = readdir($handle)) !== false) {
        if ($images != "." && $images != ".." && $recur && is_dir($directory . "/" . $images)) {
            $temp_array = my_scandir($directory . "/" . $images, $recur);
            $images_array = array_merge($images_array, $temp_array);
        }
        if (strpos($images, ".png") !== false) {
            $images_array[] = $directory . "/" . $images;
        }
    }
    closedir($handle);
    return $images_array;
}

function list_size_img($images_path)
{
    $images_size = array();
    foreach ($images_path as $path)
    {
        list($width, $height) = getimagesize($path);
        $images_size[$path] = [$width, $height];
    }
    var_dump($images_size);
    return $images_size;
}

$images_path = ["img/agre1.png", "img/agre2.png", "img/agre3.png"];
$images_size = list_size_img($images_path);
my_merge($images_path);