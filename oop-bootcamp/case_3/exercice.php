<?php
class Content {
    // Properties for the base content class
    protected $title;
    protected $text;

    // Constructor to initialize the base content
    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }

    // Method to display content with HTML tags
    public function display() {
        echo "<h1>" . $this->title . "</h1><p>" . $this->text . "</p>";
    }
}

class Article extends Content {
    // Additional property for breaking news
    private $breaking;

    // Constructor for the Article class
    public function __construct($title, $text, $breaking = false) {
        parent::__construct($title, $text);
        $this->breaking = $breaking;
    }

    // Override the display method for articles
    public function display() {
        // Modify the title if it's breaking news
        $title = $this->breaking ? "BREAKING: " . $this->title : $this->title;
        echo "<h1>" . $title . "</h1><p>" . $this->text . "</p>";
    }
}

class Ad extends Content {
    // Override the display method for ads
    public function display() {
        // Display the title in all caps
        echo "<h1>" . strtoupper($this->title) . "</h1><p>" . $this->text . "</p>";
    }
}

class Vacancy extends Content {
    // Override the display method for vacancies
    public function display() {
        // Append " - apply now!" to the title
        echo "<h1>" . $this->title . " - apply now!</h1><p>" . $this->text . "</p>";
    }
}

// Create an array with different types of content
$contents = [
    new Article(
        "Climate Change and Its Impact", 
        "Climate change is a significant and lasting change in the statistical distribution of weather patterns over periods ranging from decades to millions of years. It may be a change in average weather conditions, or in the distribution of weather around the average conditions.",
        true  // Marked as breaking news
    ),
    new Article(
        "The Future of AI", 
        "Artificial Intelligence (AI) is a wide-ranging tool that enables people to rethink how we integrate information, analyze data, and use the resulting insights to improve decision making. AI is already impacting our lives in many ways and its influence will only grow."
    ),
    new Ad(
        "Summer Sale", 
        "Our annual summer sale is here! Enjoy up to 50% off on all items in store and online. Don't miss out on these amazing deals."
    ),
    new Vacancy(
        "Software Developer", 
        "We are looking for a skilled software developer to join our team. The ideal candidate will have experience in web development and a strong understanding of software engineering principles. Apply now to be a part of our dynamic team."
    ),
];

// Display all content in the array
foreach ($contents as $content) {
    $content->display();
}
?>
