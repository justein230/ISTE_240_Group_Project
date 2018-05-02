<?php
	$title='PALTS : File Permission Quiz';
	$path='../../';
	$nav='file_permission';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1.What does the command 'head -n 2' do?</p>

		<input class="answer" type="radio" name="q1" value="1">
		<label id="correctString1" for="q1a1">Prints the first two lines of the file.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a2">Deletes the first two lines of the file.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a3">Inserts two lines into the head of the file.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a4">Deletes the file.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">2. What does the 'locate c-' command do?</p>

		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a1">Locates all the files in the system.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a2">Locates the specified file in the system.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1">
		<label id="correctString2" for="q2a3">Prints the number of files returned instead of the name.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a4">It doesn't do anything.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3.Why use the 'find' command?</p>

		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a1">To find the files you are looking for.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1">
		<label id="correctString3" for="q3a2">To find out about the file hierarchy.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a3">To get more info about each file.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a4">To find a good place to eat for lunch.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">4.What does the tar command stand for?</p>

		<input class="answer" type="radio" name="q4" value="1">
		<label id="correctString4" for="q4a1">Tape archive.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a2">Tape archive resources.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a3">Technical archives.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a4">Tapes and records.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5.The zip command zips the file name specified together.</p>

		<input class="answer" type="radio" name="q5" value="1">
		<label id="correctString5" for="q5a1">True.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a2">False.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6.What is the difference between the head and tail command?</p>

		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a1">Nothing they do the same thing.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a2">The head shows the bottom of the page and the tail shows the top of the page.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="1">
		<label id="correctString6" for="q6a3">The head commands displays the number of lines specified at the top of the page; the tail command displays the number of lines specified at the bottom of the page.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a4">The head command adds to the file and the tail command deletes from the file.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7.How do file commands make life easier?</p>

		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a1">It doesn't the command line is too hard!</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1">
		<label id="correctString7" for="q7a2">Because you can take a glimpse of a file without opening it.</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a3">File commands don't do anything.</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a4">Because you can add and delete as many files as you want.</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>

<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
    <div class="qAnswr" id="answer1"><p><a href="head.php">Check out the head command</a></p></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
	<div class="qAnswr" id="answer2"><p><a href="locate.php">Check out the locate command </a></p></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="qAnswr" id="answer3"><p><a href="find.php">Check out the find command </a></p></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="qAnswr" id="answer4"><p><a href="tar.php">Check out the tar command </a></p></div>
	<div class="quizAnswers" id="correctAnswer5"><p></div>
	<div class="qAnswr" id="answer5"><p><a href="zip.php">Check out the zip command </a></p></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="qAnswr" id="answer6"><p><a href="tail.php">Check out the tail command </a></p></div>
	<div class="quizAnswers" id="correctAnswer7"></div>
	<div class="qAnswr" id="answer7"><p><a href="files_introduction.php">Check out the introduction </a></p></div>


<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
	include($path.'assets/inc/footer.php');
?>
