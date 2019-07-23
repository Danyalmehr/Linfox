<?php
//must appear BEFORE the <html> tag
session_start();
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/test.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      <link type="text/css" href="css/theme.css" rel="stylesheet">
    <script src="js/nav.js"></script>
    <script src="js/read_more.js"></script>

        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="imoption2s/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>



    <link type="text/css" href="css/theme.css" rel="stylesheet">

    <title> Take test </title>

	<style>

  ul.unstyled, ol.unstyled {
     margin-left: 0;
     list-style: none;
}
		.span3 {

			margin-right: 4em;
		}
    .widget-menu {
    background: #fff;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
     border-radius: 3px;
    overflow: hidden;
}

	</style>
</head>
<body onLoad="run_first()">
	<?php include("include/banner.inc") ?>
    <?php include("include/nav.inc") ?>


	<div class="col-md-3">
	 <div class="span3">
                        <div class="sidebar" style="display: inline">
                            <ul class="widget widget-menu unstyled">
                                <li class="left_icon"><a href="dashboard1.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>


                                <li class="active left_icon"><a href="Stest.php"><i class="menu-icon icon-inbox"></i>Test</a></li>



                                <li class="left_icon"><a href="previousresults.php"><i class="menu-icon icon-file"></i>Results </a></li>
								                        <li class="left_icon"><a href="certificates.php"><i class="menu-icon icon-certificate"></i>Certificates </a></li>
								                                <li class="left_icon"><a href="index.php"><i class="menu-icon icon-signou"></i>Logout </a></li>

							</ul>

                        </div>

                    </div>
	</div>

  <style>

              .container{overflow: hidden}
              .tab{float: left;}
              .tab-2{margin-left: 50px}
              .tab-2 input{display: block;margin-bottom: 10px}
              tr{transition:all .25s ease-in-out}
              tr:hover{background-color:#EEE;cursor: pointer}

          </style>



          <div class="container">
              <div class="tab tab-1">
                  <table id="table" border="1">
                    <form class="" action="insertquestion.php" method="post">

                      <tr>
                          <th>Question</th>
                          <th>option1</th>
                          <th>option2</th>
                          <th>option3</th>
                          <th>option4</th>
                          <th>Answer</th>
                      </tr>
                      <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                      <button class="button" name="submit">SUBMIT</button>
                    </form>
                  </table>
              </div>
              <div class="tab tab-2">

                  question :<input required type="text" name="question" id="question">
                  option1 :<input required type="text" name="option1" id="option1">
                  option2 :<input required type="text" name="option2" id="option2">
                  option3 :<input required type="text" name="option3" id="option3">
                  option4 :<input required type="text" name="option4" id="option4">
                  Answer :<input required type="text" name="answer" id="answer">



                  <button onclick="addHtmlTableRow();">Add</button>
                  <button onclick="editHtmlTbleSelectedRow();">Edit</button>
                  <button onclick="removeSelectedRow();">Remove</button>


              </div>
          </div>

          <script>

          var rIndex,
              table = document.getElementById("table");

          // check the empty input
          function checkEmptyInput()
          {
              var isEmpty = false,
                  question = document.getElementById("question").value,
                  option1 = document.getElementById("option1").value,
                  option2 = document.getElementById("option2").value;
                  option3 = document.getElementById("option3").value;
                  option4 = document.getElementById("option4").value;
                  answer = document.getElementById("answer").value;


              if(question === ""){
                  alert("Question Connot Be Empty");
                  isEmpty = true;
              }
              else if(option1 === ""){
                  alert("option 1 Connot Be Empty");
                  isEmpty = true;
              }
              else if(option2 === ""){
                  alert("option 2 Connot Be Empty");
                  isEmpty = true;
              }
              else if(option3 === ""){
                  alert("option 3 Connot Be Empty");
                  isEmpty = true;
              }
              else if(option4 === ""){
                  alert("option 4 Connot Be Empty");
                  isEmpty = true;
              }
              else if(answer === ""){
                  alert("answer Connot Be Empty");
                  isEmpty = true;
              }
              return isEmpty;
          }

          // add Row
          function addHtmlTableRow()
          {
              // get the table by id
              // create a new row and cells
              // get value from input text
              // set the values into row cell's
              if(!checkEmptyInput()){
              var newRow = table.insertRow(table.length),
                  cell1 = newRow.insertCell(0),
                  cell2 = newRow.insertCell(1),
                  cell3 = newRow.insertCell(2),
                  cell4 = newRow.insertCell(3),
                  cell5 = newRow.insertCell(4),
                  cell6 = newRow.insertCell(5),

                  question = document.getElementById("question").value,
                  option1 = document.getElementById("option1").value,
                  option2 = document.getElementById("option2").value;
                  option3 = document.getElementById("option3").value;
                  option4 = document.getElementById("option4").value;
                  answer = document.getElementById("answer").value;


              cell1.innerHTML = question;
              cell2.innerHTML = option1;
              cell3.innerHTML = option2;
              cell4.innerHTML = option3;
              cell5.innerHTML = option4;
              cell6.innerHTML = answer;

              // call the function to set the event to the new row
              selectedRowToInput();
          }
          }

          // display selected row data into input text
          function selectedRowToInput()
          {

              for(var i = 1; i < table.rows.length; i++)
              {
                  table.rows[i].onclick = function()
                  {
                    // get the seected row index
                    rIndex = this.rowIndex;
                    document.getElementById("question").value = this.cells[0].innerHTML;
                    document.getElementById("option1").value = this.cells[1].innerHTML;
                    document.getElementById("option2").value = this.cells[2].innerHTML;
                    document.getElementById("option3").value = this.cells[3].innerHTML;
                    document.getElementById("option4").value = this.cells[4].innerHTML;
                    document.getElementById("answer").value = this.cells[5].innerHTML;

                  };
              }
          }
          selectedRowToInput();

          function editHtmlTbleSelectedRow()
          {
              var question = document.getElementById("question").value,
                  option1 = document.getElementById("option1").value,
                  option2 = document.getElementById("option2").value;
                  option3 = document.getElementById("option3").value;
                  option4 = document.getElementById("option4").value;
                  answer = document.getElementById("answer").value;

             if(!checkEmptyInput()){
              table.rows[rIndex].cells[0].innerHTML = question;
              table.rows[rIndex].cells[1].innerHTML = option1;
              table.rows[rIndex].cells[2].innerHTML = option2;
              table.rows[rIndex].cells[3].innerHTML = option3;
              table.rows[rIndex].cells[4].innerHTML = option4;
              table.rows[rIndex].cells[5].innerHTML = answer;

            }
          }

          function removeSelectedRow()
          {
              table.deleteRow(rIndex);
              // clear input text
              document.getElementById("question").value = "";
              document.getElementById("option1").value = "";
              document.getElementById("option2").value = "";
              document.getElementById("option3").value = "";
              document.getElementById("option4").value = "";
              document.getElementById("answer").value = "";

          }
      </script>


	<?php include("include/footer.inc") ?>


  </body>
</html>
