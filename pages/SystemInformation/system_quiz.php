<?php
	$title='PALTS : System Information Quiz';
	$path='../../';
	$nav='system_quiz';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1.What does the command 'sudo ifconfig eth3 up' do?</p>

		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a1">It creates an interface called eth3 and brings it up.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a2">It checks to see if eth3 is up.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="1">
		<label id="correctString1" for="q1a3">It brings interface eth3 up if it exists.</label>
		<br>
		<input class="answer" type="radio" name="q1" value="0">
		<label for="q1a4">It creates an interface eth3.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">2. What does the command 'ping -c 4 google.com' do?</p>

		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a1">It tells google.com to send 4 ping packets to the computer executing the command.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a2">It tells the computer to wait 4 seconds before sending ping packets.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1">
		<label id="correctString2" for="q2a3">It tells the computer to send 4 ping packets to google.com.</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a4">The command is mistyped. It should be 'ping -n 4 google.com'.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3.When should one use the df command?</p>

		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a1">When they want to free up disk space on the computer.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a2">When they want to check the disk usage of a specific folder.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1">
		<label id="correctString3" for="q3a3">When they want to check the disk usage of entire filesystems.</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a4">When they want to destroy a filesystem.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">4.What does the w command do?</p>

		<input class="answer" type="radio" name="q4" value="1">
		<label id="correctString4" for="q4a1">List the users logged in to a particular computer.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a2">List the processes each user has.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a3">Checks the history of users logged on.</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a4">Checks what users have permission to log into the computer.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5.What does the command 'free -t' do?</p>

		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a1">Displays the total amount of memory on the system.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a2">It displays the regular 'free' information in addition to the total amount of memory calculated in each column.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="1">
		<label id="correctString5" for="q5a3">It displays the total amount of memory in each column.</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a4">It displays the total amount of memory used on the system.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6.How does the du command differ from the df command?</p>

		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a1">It displays the disk usage information of df in human readable form.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a2">It displays the disk usage information of one disk only.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="1">
		<label id="correctString6" for="q6a3">It displays the disk usage information of specific files and folders.</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a4">It displays the disk information of the currently active disk.</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7.The top command is used to display what statistic on the computer?</p>

		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a1">CPU Usage</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1">
		<label id="correctString7" for="q7a2">Processes</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a3">Memory Usage</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a4">Battery usage for laptops</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>

<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
    <div class="qAnswr" id="answer1"><p><a href="ifconfig.php">Check out the ifconfig command</a></p></div>
	<div class="quizAnswers" id="correctAnswer2"></div>
	<div class="qAnswr" id="answer2"><p><a href="ping.php">Check out the ping command </a></p></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="qAnswr" id="answer3"><p><a href="df.php">Check out the df command </a></p></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="qAnswr" id="answer4"><p><a href="w.php">Check out the w command </a></p></div>
	<div class="quizAnswers" id="correctAnswer5"><p></div>
	<div class="qAnswr" id="answer5"><p><a href="free.php">Check out the free command </a></p></div>
	<div class="quizAnswers" id="correctAnswer6"></div>
	<div class="qAnswr" id="answer6"><p><a href="du.php">Check out the du command </a></p></div>
	<div class="quizAnswers" id="correctAnswer7"></div>
	<div class="qAnswr" id="answer7"><p><a href="top.php">Check out the top command </a></p></div>


<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
	include($path.'assets/inc/footer.php');
?>
