function ask() {
//var q = document.getElementById("q").value;
//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to DELETE this?');
}

function ask2() {
//var q = document.getElementById("q").value;
//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to UPDATE this?');
}

function ask3() {
var q = document.getElementById("q").value;
var correct_answer = document.getElementById("correct_answer").value;
var wrong_answer1 = document.getElementById("wrong_answer1").value;
var wrong_answer2 = document.getElementById("wrong_answer2").value;
var wrong_answer3 = document.getElementById("wrong_answer3").value;

//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to CREATE: \nQuestion: ' + q + '\nCorrect answer: ' + correct_answer + '\nWrong answer 1: ' + wrong_answer1 + '\nWrong answer 2: ' + wrong_answer2 + '\nWrong answer 3: ' + wrong_answer3);
}

function ask4() {
var test_name = document.getElementById("test_name").value;


//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to CREATE: \nTest name: ' + test_name);
}

function ask5() {
var course_name = document.getElementById("course_name").value;
var course_desc = document.getElementById("course_desc").value;
var course_video = document.getElementById("course_video").value;



//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to CREATE: \nCourse name: ' + course_name + '\nCourse description: ' + course_desc + '\nCourse video: ' + course_video);
}

function ask6() {
var test_name = document.getElementById("test_name").value;
//var amount = document.getElementById("amount").value;
return confirm('Are you sure you want to take this TEST?');
}
