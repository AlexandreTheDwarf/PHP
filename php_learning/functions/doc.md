## Exercises :

### 1.0. Exercices :

Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"

### 1.1. Exercices : 

- Use the native function allowing you to display the current year.

- Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.

### 1.2. Exercices : 

- Crée a "Sum" function that takes 2 numbers and returns their sum.

- Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."

### 1.3. Exercices :

- Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
Example: "In code we trust!" should return: ICWT).

### 1.4. Exercices :
#### 1.4.1 :

Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".

#### 1.4.2. :

- Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca

### 1.5. Exercices :

- Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :

```
echo feedback("Incorrect email address", "error");
```

which will produce this html :

```
<div class="error">Error: Incorrect email address.</div>
```

- Improve that function by giving the default class the value of "info". Look into the documentation documentation php.

### 1.6. Exercices :

Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate".

### 1.7. Exercices :

De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"

### 1.8. Exercices :

In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :

```
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; 
``` 

Here is a schematic, just to make sure you think this is more difficult than it really is...

![Cone](https://camo.githubusercontent.com/a612a247df6805641ca2cf109d476054916b2276505825ab0cbda9882dfacd27/68747470733a2f2f757365722e6f632d7374617469632e636f6d2f66696c65732f353030315f363030302f353735382e676966)