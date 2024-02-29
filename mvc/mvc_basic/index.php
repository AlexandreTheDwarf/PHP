<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Article.php';
require 'Model/Author.php'; // Include your Author model
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/ArticleController.php';
require 'Controller/AuthorController.php'; // Include your AuthorController

// Get the current page to load
// If nothing is specified, it will remain empty (home should be loaded)
$page = $_GET['page'] ?? null;

// Load the controller
// It will *control* the rest of the work to load the page
switch ($page) {
    case 'articles':
    case 'articles-index':
        (new ArticleController())->index();
        break;
    case 'articles-show':
        $id = $_GET['id'] ?? null;
        if ($id) {
            (new ArticleController())->show($id);
        } else {
            // Handle the case where no ID is provided
        }
        break;
    case 'authors': // Add a case for the authors index page
        (new AuthorController())->index();
        break;
    case 'authors-show': // Add a case for the authors show page
        $id = $_GET['id'] ?? null;
        if ($id) {
            (new AuthorController())->show($id);
        } else {
            // Handle the case where no ID is provided
        }
        break;
    default:
        // Handle the case where no valid page is provided
        (new HomepageController())->index();
        break;
}