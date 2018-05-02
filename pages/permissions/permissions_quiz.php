<?php
	$title='PALTS : Permissions Quiz';
	$path='../../';
	$nav='permissions_quiz';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1.What permissions do 754 stand for?</p>

		<input class="answer" type="radio" name="q1" value="1">
		<label for="q1a1">user: rwx, group: rwx, other: r--</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label id="correctString1" for="q1a2">user: rwx, group: r-x, other: r--</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a3">user: -wx, group: --x, other: --x</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a4">user: r-x, group: rwx, other: rwx</label>
		</div>

		<div class="quizQuestion">
			<p class="question">2. What does the command 'chown root:palts file.txt' do?</p>

		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a1">It sets file.txt's group to root and its user to palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1">
		<label for="q2a2">It sets the user of file.txt to both root and palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label id="correctString2" for="q2a3">It sets file.txt's user to root and its group to palts</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a4">It sets the group of file.txt to both root and palts</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3. A file can have more than one user attached as the 'user' of the file.</p>

		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a1">True</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1">
		<label id="correctString3" for="q3a2">False</label>
		</div>

		<div class="quizQuestion">
			<p class="question">4. There is a list somewhere on the system that defines who 'other' is for files and folders.</p>

		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a1">True</label>
		<br>
		<input class="answer" type="radio" name="q4" value="1">
		<label id="correctString4" for="q4a2">False</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5.What does the command 'chown user file.txt' do?</p>

		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a1">Changes the name of the file to file.txt.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label id="correctString5" for="q5a2">Changes the user of file.txt to 'user'.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="1">
		<label id="correctString5" for="q5a3">Creates a new file called 'file.txt' with the owner 'user'.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a4">Creates a new user and a new file.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6.What does the command 'groupadd students' do?</p>

		<input class="answer" type="radio" name="q6" value="1">
		<label for="q6a1">Adds new members to the stuents group.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a2">Displays the members of the student group.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label id="correctString6" for="q6a3">Adds a group called students to the system.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a4">Deltes the group called students.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7.How many permissions are there?</p>

		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a1">5</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1">
		<label id="correctString7" for="q7a2">3</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a3">1</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a4">16</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>

<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
    <div class="qAnswr" id="answer1"><p><a href="file_permissions.php">Check out the file permissions</a></p></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
	<div class="qAnswr" id="answer2"><p><a href="chown.php">Check out the chown command </a></p></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="qAnswr" id="answer3"><p><a href="user_del_add.php">Check out the useradd/userdel command </a></p></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="qAnswr" id="answer4"><p><a href="chmod.php">Check out the chmod command </a></p></div>
	<div class="quizAnswers" id="correctAnswer5"><p></div>
	<div class="qAnswr" id="answer5"><p><a href="chown.php">Check out the chown command </a></p></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="qAnswr" id="answer6"><p><a href="group_del_add.php">Check out the groupadd/groupdel command </a></p></div>
	<div class="quizAnswers" id="correctAnswer7"></div>
	<div class="qAnswr" id="answer7"><p><a href="file_permissions.php">Check out the file permissions </a></p></div>


<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
	include($path.'assets/inc/footer.php');
?>
