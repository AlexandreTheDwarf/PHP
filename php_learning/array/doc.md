## Exercises

Let's play a bit with what you've learned so far...

Here is an array of countries :

```
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
What will this line return ?

 echo $countries[2];
```

answer: germany

## 1.0. Exercices :

- Create an array representing your family members
- Display its content using the print_r function
- Then, create an array describing your favourite recipes
- Display its content using the print_r
- Then, create an array listing your favourite films
- Then, using that array, display only the one film you like best using its index

## 1.1. Coding an Associative Array :

Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.

## 1.2.  Multidimensional arrays:

- Add your hobbies using an array to your $me array

$me['hobbies'] = ...

- Then, after the $me array, create a second array with the same keys as yours, to describe your mother : the $mother array (make it someone else if you prefer).
- Make sure to also describe her hobbies
- Then, below that, assign the $mother array to a new key in your $mearray : let's call that key 'mother'.
- Now, below that, check the content of $me using print_r(). (wrap it inside a <pre> html tag to make it more legible ). It should show a multi-dimensional array, where the mother array are values of your mother key.
- Read multiple times your code to make sure you understand what happens.

## 1.3. Manipulating arrays exercises: