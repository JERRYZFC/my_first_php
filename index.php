<?php
# With composer we can autoload the Handlebars package
require_once ("./vendor/autoload.php");

# If not using composer, you can still load it manually.
# require 'src/Handlebars/Autoloader.php';
# Handlebars\Autoloader::register();

use Handlebars\Handlebars;
use Handlebars\Loader\FilesystemLoader;

# Set the partials files
$partialsDir = __DIR__."/templates";
$partialsLoader = new FilesystemLoader($partialsDir,
    [
        "extension" => "hbs"
    ]
);

# We'll use $handlebars throughout this the examples, assuming the will be all set this way
$handlebars = new Handlebars([
    "loader" => $partialsLoader,
    "partials_loader" => $partialsLoader
]);

# Will render the model to the templates/main.tpl template
$model = [
    "name" => "Yolo Baggins",
    "title" => "I'm Title",
    "permalink" => "blog/",
    "foo" => "bar",
    "isActive" => false,
    "article" => [
        "title" => "My Article Title"
    ],
    "posts" => [
        [
            "title" => "Post aaa",
            "id" => 1,
            "content" => "Content"
        ],
        [
            "title" => "Post dda",
            "id" => 2,
            "content" => "Content"
        ]
    ],"genres" => [
        "Hip-Hop",
        "Rap",
        "Techno",
        "Country"
    ],
    "cars" => [
        "category" => "Foreign",
        "count" => 4,
        "list" => [
            "Toyota",
            "Kia",
            "Honda",
            "Mazda"
        ],
        "category" => "WTF",
        "count" => 1,
        "list" => [
            "Fiat"
        ],
        "category" => "Luxury",
        "count" => 2,
        "list" => [
            "Mercedes Benz",
            "BMW"
        ]
    ],
];

$res= $handlebars->render("main", $model);

$myfile = fopen("res.html", "w") or die("Unable to open file!");

fwrite($myfile, $res);
fclose($myfile); 

echo $res;