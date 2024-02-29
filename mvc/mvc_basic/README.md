# MVC Exercise

This repository contains an exercise project from a training program, demonstrating the Model-View-Controller (MVC) design pattern in PHP.

## Project Overview

The project is a simple article management system. It includes the following features:

- **Article Viewing**: Users can view articles. Each article has a title, description, and publish date.
- **Navigation**: Users can navigate between articles using "Previous" and "Next" links.

## Structure

The project follows the MVC design pattern:

- **Models** (`./Model`): Represent the data structures, typically interacting with a database.
- **Views** (`./View`): Present the data from the models in a user-friendly way.
- **Controllers** (`./Controller`): Handle user input and interactions, updating the models and views based on this input.

## Setup and Usage

1. Clone the repository.
2. Set up a local PHP server.
3. Import the database schema (if applicable).
4. Navigate to the project in your web browser.
5. To view an article, navigate to `index.php?page=articles-show&id=<id>`, replacing `<id>` with the ID of the article you want to view.
