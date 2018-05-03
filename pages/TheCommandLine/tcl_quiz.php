<?php
	$title='PALTS : Command Line Quiz';
	$path='../../';
	$nav='tcl_quiz';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1.How do you list files in human readable form?</p>

		<input type="radio" name="q1" value="1" id="q1a1">
		<label class="" id="correctString1" for="q1a1">ls -hl</label>
		<br>
		<input type="radio" name="q1" value="0" id="q1a2">
		<label for="q1a2">ls -lt</label>
		<br>
		<input type="radio" name="q1" value="0" id="q1a3">
		<label for="q1a3">ls</label>
		<br>
		<input type="radio" name="q1" value="0" id="q1a4">
		<label for="q1a4">ls -l</label>
		</div>

		<div class="quizQuestion">
			<p class="question">2.How do you create a directory?</p>

		<input class="answer" type="radio" name="q2" value="0" id="q2a1">
		<label for="q2a1">mdir</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1" id="q2a2">
		<label id="correctString2" for="q2a2">mkdir</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0" id="q2a3">
		<label for="q2a3">mkfile</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0" id="q2a4">
		<label for="q2a4">mkd</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3.How do you go to root directory?</p>

		<input class="answer" type="radio" name="q3" value="0" id="q3a1">
		<label for="q3a1">cd ..</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1" id="q3a2">
		<label id="correctString3" for="q3a2">cd /</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0" id="q3a3">
		<label for="q3a3">cd /..</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0" id="q3a4">
		<label for="q3a4">cd -</label>
		</div>

		<div class="quizQuestion">
			<p class="question">4.How to display manual page for ls command?</p>

		<input class="answer" type="radio" name="q4" value="0" id="q4a1">
		<label for="q4a1">ls man</label>
		<br>
		<input class="answer" type="radio" name="q4" value="1" id="q4a2">
		<label id="correctString4" for="q4a2">man ls</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0" id="q4a3">
		<label for="q4a3">man</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0" id="q4a4">
		<label for="q4a4">manual ls</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5.What command do you use to remove directory?</p>

		<input class="answer" type="radio" name="q5" value="0" id="q5a1">
		<label for="q5a1">rdir</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0" id="q5a2">
		<label for="q5a2">rd</label>
		<br>
		<input class="answer" type="radio" name="q5" value="1" id="q5a3">
		<label id="correctString5" for="q5a3">rmdir</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0" id="q5a4">
		<label for="q5a4">removedir</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6.What does rm -r command do? </p>

		<input class="answer" type="radio" name="q6" value="1" id="q6a1">
		<label id="correctString6" for="q6a1">It recursively removes directories if they are empty.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a2">
		<label for="q6a2">It just removes the directory.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a3">
		<label for="q6a3">It renames the directory</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0" id="q6a4">
		<label for="q6a4">"rm" command does not exist.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7.What command prints the current working directory? </p>

		<input class="answer" type="radio" name="q7" value="0" id="q7a1">
		<label for="q7a1">pdf</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1" id="q7a2">
		<label id="correctString7" for="q7a2">pwd</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0" id="q7a3">
		<label for="q7a3">printDir</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0" id="q7a4">
		<label for="q7a4">pdir</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>


<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
    <div class="qAnswr" id="answer1"><p><a href="ls.php">Check out the ls command</a></p></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
	<div class="qAnswr" id="answer2"><p><a href="mkdir.php">Check out the mkdir command </a></p></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="qAnswr" id="answer3"><p><a href="cd.php">Check out the cd command </a></p></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="qAnswr" id="answer4"><p><a href="man.php">Check out the man command </a></p></div>
	<div class="quizAnswers" id="correctAnswer5"><p></div>
	<div class="qAnswr" id="answer5"><p><a href="rmdir.php">Check out the rmdir command </a></p></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="qAnswr" id="answer6"><p><a href="rm.php">Check out the rm command </a></p></div>
	<div class="quizAnswers" id="correctAnswer7"></div>
	<div class="qAnswr" id="answer7"><p><a href="pwd.php">Check out the pwd command </a></p></div>

<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
include($path.'assets/inc/footer.php');
?>
