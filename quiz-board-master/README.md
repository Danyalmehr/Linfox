# QUIZ-BOARD

### Author
Marvin Chomba

### Description
Quiz-Board is a web app that allows anyone to attempt a few questions to test their JavaScript knowledge.
The questions are well-prepared and can be answered by both beginner developers and advanced developers.
Each question has 10 marks allocated to it.
No marks are deducted for wrong answers.

### Technologies used
1. HTML
2. CSS
3. Bootstrap
4. JavaScript and jQuery

### Program Behaviour
| Behaviour   |      Input     |  Output |
|----------|:-------------:|------:|
| User does not enter name |  "" | Please ENTER name.Form does not appear |
| User enters name |    "Example"   |   The form will appear |
| User answers all questions wrong | 0,0,0,0,0,0 |    Nice try{name},your score is 0 |
| User answers 1 question correct | 10,0,0,0,0,0 |    Nice try{name},your score is 10 |
| User answers 2 questions correct | 10,10,0,0,0,0 |    Nice try{name},your score is 20 |
| User answers 3 questions correct | 10,10,10,0,0,0 |    Nice try{name},your score is 30 |
| User answers 4 questions correct | 10,10,10,10,0,0 |    Congratulations {name},your score is 40 |
| User answers 5 questions correct | 0,10,10,10,10,10 |    Congratulations {name},your score is 50 |
| User answers all questions correct | 10,10,10,10,10,10 |    Congratulations {name},your score is 60 |
| If the user does not answer a question, it is marked as wrong | 10,10,10,10,10,"" |    Congratulations{name},your score is 50 |



    

### Prerequisites
To clone this project to your local folder, you will first need to install git.
Use this command in your terminal
`$ sudo apt install git-all`

### Setup
1. To access this project, you will need to clone it.
2. Use this command in your terminal.
`git clone https://github.com/marvinChomba/quiz-board`
3. __Enjoy__

### Live site
You can view the live site [here](https://marvinchomba.github.io/quiz-board/)

### Licence
This project is under the [MIT](https://github.com/marvinChomba/quiz-board/blob/master/LICENSE) licence
Copyright (c) 2018 marvinchomba
