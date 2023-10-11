<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple PHP Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $array = [
            [
              "_id" => "6511cdb855984992bfad5908", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1964, 
              "name" => "Jasmine", 
              "last_name" => "Fleming", 
              "tags" => [
                "id", 
                "amet", 
                "culpa" 
              ], 
              "biography" => "Jasmine is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb83b4f17828dd5cd01", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1960, 
              "name" => "Marla", 
              "last_name" => "Landry", 
              "tags" => [
                "commodo", 
                "ut", 
                "officia" 
              ], 
              "biography" => "Marla is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb801f4d9e33da53e4c", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1991, 
              "name" => "Hughes", 
              "last_name" => "Allen", 
              "tags" => [
                "laboris", 
                "officia", 
                "pariatur" 
              ], 
              "biography" => "Hughes is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8663866ec49ec1960", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1974, 
              "name" => "Flossie", 
              "last_name" => "Valentine", 
              "tags" => [
                "sint", 
                "quis", 
                "esse" 
              ], 
              "biography" => "Flossie is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8d524a426e76f84b8", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1977, 
              "name" => "Mcfarland", 
              "last_name" => "Hicks", 
              "tags" => [
                "eiusmod", 
                "officia", 
                "est" 
              ], 
              "biography" => "Mcfarland is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8cc4bcf3bf143d88d", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1990, 
              "name" => "Madden", 
              "last_name" => "Galloway", 
              "tags" => [
                "magna", 
                "cupidatat", 
                "velit" 
              ], 
              "biography" => "Madden is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb83b7edbf741b26cfc", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1980, 
              "name" => "Sandoval", 
              "last_name" => "Barker", 
              "tags" => [
                "voluptate", 
                "qui", 
                "magna" 
              ], 
              "biography" => "Sandoval is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8f829e676a583fa9e", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1967, 
              "name" => "Dejesus", 
              "last_name" => "Crawford", 
              "tags" => [
                "irure", 
                "ut", 
                "sunt" 
              ], 
              "biography" => "Dejesus is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8177fc4bf99088949", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 2000, 
              "name" => "Maldonado", 
              "last_name" => "Dickson", 
              "tags" => [
                "laboris", 
                "sit", 
                "consectetur" 
              ], 
              "biography" => "Maldonado is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8792f43364fc4d721", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1958, 
              "name" => "Mcguire", 
              "last_name" => "Moses", 
              "tags" => [
                "reprehenderit", 
                "excepteur", 
                "ad" 
              ], 
              "biography" => "Mcguire is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb806ff557beb08b5fb", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1953, 
              "name" => "Leah", 
              "last_name" => "Hughes", 
              "tags" => [
                "excepteur", 
                "est", 
                "culpa" 
              ], 
              "biography" => "Leah is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb840c3072ec8a450d4", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1965, 
              "name" => "Carole", 
              "last_name" => "Nieves", 
              "tags" => [
                "ad", 
                "et", 
                "sit" 
              ], 
              "biography" => "Carole is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb89dfe78761f81a37e", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1978, 
              "name" => "Gross", 
              "last_name" => "Mejia", 
              "tags" => [
                "pariatur", 
                "laborum", 
                "culpa" 
              ], 
              "biography" => "Gross is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8a1d5f0e2043676ab", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1954, 
              "name" => "Deidre", 
              "last_name" => "Spears", 
              "tags" => [
                "laboris", 
                "excepteur", 
                "ut" 
              ], 
              "biography" => "Deidre is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8ad21448fa1bb5e05", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1975, 
              "name" => "Amalia", 
              "last_name" => "Rivera", 
              "tags" => [
                "do", 
                "culpa", 
                "magna" 
              ], 
              "biography" => "Amalia is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb82e5cf6917cce534e", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1960, 
              "name" => "Valerie", 
              "last_name" => "Anderson", 
              "tags" => [
                "enim", 
                "officia", 
                "cupidatat" 
              ], 
              "biography" => "Valerie is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8ee8f28ce06e03a59", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1967, 
              "name" => "Sheri", 
              "last_name" => "Dunlap", 
              "tags" => [
                "dolore", 
                "exercitation", 
                "minim" 
              ], 
              "biography" => "Sheri is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8401697371b472e0c", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1995, 
              "name" => "Chris", 
              "last_name" => "Rowe", 
              "tags" => [
                "esse", 
                "proident", 
                "consequat" 
              ], 
              "biography" => "Chris is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb85b18d382d9bcb809", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1959, 
              "name" => "Alison", 
              "last_name" => "Mccall", 
              "tags" => [
                "reprehenderit", 
                "fugiat", 
                "dolor" 
              ], 
              "biography" => "Alison is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb864dbf41128436cf8", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1957, 
              "name" => "Alvarez", 
              "last_name" => "Vang", 
              "tags" => [
                "aliquip", 
                "ex", 
                "incididunt" 
              ], 
              "biography" => "Alvarez is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb87aaf6f63c2a0f16e", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1999, 
              "name" => "Angel", 
              "last_name" => "Guzman", 
              "tags" => [
                "irure", 
                "sit", 
                "aute" 
              ], 
              "biography" => "Angel is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb82193c1e8b3180326", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1999, 
              "name" => "Washington", 
              "last_name" => "Carney", 
              "tags" => [
                "exercitation", 
                "magna", 
                "laboris" 
              ], 
              "biography" => "Washington is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8f31d313d384dfd6f", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 2000, 
              "name" => "Mejia", 
              "last_name" => "Morton", 
              "tags" => [
                "sit", 
                "eiusmod", 
                "sunt" 
              ], 
              "biography" => "Mejia is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb802c182459cb07799", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1981, 
              "name" => "Latisha", 
              "last_name" => "Horn", 
              "tags" => [
                "officia", 
                "consectetur", 
                "commodo" 
              ], 
              "biography" => "Latisha is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8cd6aff80f8769111", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1961, 
              "name" => "Allen", 
              "last_name" => "Durham", 
              "tags" => [
                "mollit", 
                "mollit", 
                "ea" 
              ], 
              "biography" => "Allen is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb85eb5d10f86743425", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 2000, 
              "name" => "Christy", 
              "last_name" => "Blankenship", 
              "tags" => [
                "tempor", 
                "Lorem", 
                "id" 
              ], 
              "biography" => "Christy is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb887706d3ead9723d1", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1989, 
              "name" => "Marquita", 
              "last_name" => "Dunn", 
              "tags" => [
                "reprehenderit", 
                "et", 
                "pariatur" 
              ], 
              "biography" => "Marquita is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8bdc40e3978619606", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1999, 
              "name" => "Edwina", 
              "last_name" => "Herring", 
              "tags" => [
                "do", 
                "deserunt", 
                "nulla" 
              ], 
              "biography" => "Edwina is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb88e5bd13a5a169ac0", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1959, 
              "name" => "Kerri", 
              "last_name" => "Deleon", 
              "tags" => [
                "elit", 
                "duis", 
                "consequat" 
              ], 
              "biography" => "Kerri is a random person with a random biography." 
            ], 
            [
              "_id" => "6511cdb8082c1c3413885295", 
              "picture" => "https://source.unsplash.com/random", 
              "year" => 1963, 
              "name" => "Casey", 
              "last_name" => "Jenkins", 
              "tags" => [
                "velit", 
                "ea", 
                "irure" 
              ], 
              "biography" => "Casey is a random person with a random biography." 
            ] 
          ]; 
        
    ?>
    <div class="card-list">
        <?php
            function calculate($birthday) {
                return 2023 - $birthday;
            }
            foreach ($array as $element){
              $age = calculate($element['year']);
              $tag = $element['tags'];
            
              ?>
              <div class="card">
                <h2 class="name"><?php echo $element['name']; ?></h2>
                <h3 class="age">Age: <?php echo $age; ?></h3>
                <img 
                  src="<?php echo $element['picture']; ?>" 
                  style='width: 164px; height: 164px'>
                <p class="bio"><?php echo $element['biography']; ?></p>
                <ul class="tag-pills">
                  <li class="pill"><?php echo $tag[0] ?></li>
                  <li class="pill"><?php echo $tag[1] ?></li>
                  <li class="pill"><?php echo $tag[2] ?></li>
                </ul>
              </div>
              <?php
            }
        ?>
      </div>
</body>
</html>
