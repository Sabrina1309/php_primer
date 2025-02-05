<?php
echo "<h1>Here you can find information about me</h1>";

$topics = [
    
    [
        "name" => "Favorite-animal", "image" => "https://www.bing.com/images/search?view=detailV2&ccid=YwA6xGkF&id=3BCA20E6DD5BF6B81B5D4C85827EB7337F06C8E3&thid=OIP.YwA6xGkFItqFcdN8eHm-aAHaHZ&mediaurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F3%2F3a%2FCat03.jpg%2F1200px-Cat03.jpg&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.63003ac4690522da8571d37c7879be68%3Frik%3D48gGfzO3foKFTA%26pid%3DImgRaw%26r%3D0&exph=1199&expw=1200&q=cat+jpg+images&simid=608056229240977527&ck=B7FEFF211D6BEE29359CB87FB7883CDB&selectedIndex=2&itb=0&qpvt=cat+jpg+images&mode=overlay&shtc=0&shth=OIP.YwA6xGkFItqFcdN8eHm-aAHaHZ&shsc=idp&form=EX0050&shid=0766d3e4-2602-4952-b290-dd6f2b35b6a5&shtp=GetUrl&shtk=Y2F0IC0gV2lrdGlvbmFyeQ%3D%3D&shdk=Rm91bmQgb24gQmluZyBmcm9tIGVuLndpa3Rpb25hcnkub3Jn&shhk=LR8N3DfdlisUMTBtBibwrCD7Owggcd1rQ5wuEtkk%2FUQ%3D",
        "desc" => "I like cat"
    ],
     
    [

    "name" => "Favorite-sweet", "image" => "https://th.bing.com/th/id/R.e7def3edb7a7aa431bcc2ccea949b4df?rik=IoPdp7t7mGWsMg&pid=ImgRaw&r=0",
    "desc" =>  "I really like chocolates in my life. I cannot control myself when I see chocolate. Because it is sooooo sweeetttt=chakkiiii."
    
    ],

];
foreach ($topics as $topic) {
    echo "<h2>{$topic['name']}</h2>";
    echo "<h2>{$topic['name']}</h2>";
    if (isset($topic["desc"])) {
        echo "<p>{$topic["desc"]}</p>";
    }



if (isset($topics["image"])&& is_array(value: $topics["image"])) {
    foreach ($topis["image"] as $img) {

        echo "<img src='https://www.bing.com/images/search?view=detailV2&ccid=YwA6xGkF&id=3BCA20E6DD5BF6B81B5D4C85827EB7337F06C8E3&thid=OIP.YwA6xGkFItqFcdN8eHm-aAHaHZ&mediaurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F3%2F3a%2FCat03.jpg%2F1200px-Cat03.jpg&cdnurl=https%3A%2F%2Fth.bing.com%2Fth%2Fid%2FR.63003ac4690522da8571d37c7879be68%3Frik%3D48gGfzO3foKFTA%26pid%3DImgRaw%26r%3D0&exph=1199&expw=1200&q=cat+jpg+images&simid=608056229240977527&ck=B7FEFF211D6BEE29359CB87FB7883CDB&selectedIndex=2&itb=0&qpvt=cat+jpg+images&mode=overlay&shtc=0&shth=OIP.YwA6xGkFItqFcdN8eHm-aAHaHZ&shsc=idp&form=EX0050&shid=0766d3e4-2602-4952-b290-dd6f2b35b6a5&shtp=GetUrl&shtk=Y2F0IC0gV2lrdGlvbmFyeQ%3D%3D&shdk=Rm91bmQgb24gQmluZyBmcm9tIGVuLndpa3Rpb25hcnkub3Jn&shhk=LR8N3DfdlisUMTBtBibwrCD7Owggcd1rQ5wuEtkk%2FUQ%3D' alt='{$topic["name"]}' style='width:200px; height:auto; margin:5px;'><br>";
        echo "<img src='https://th.bing.com/th/id/R.9be14dc9db81910529fcbb12d0be6712?rik=Nu4JG8zB28F7ng&pid=ImgRaw&r=0' alt='{$topic["name"]}' style='width:200px; height:auto; margin:5px;'><br>";
    }
} else {
    echo "<p>No images available</p>";
}
}




    
?>

