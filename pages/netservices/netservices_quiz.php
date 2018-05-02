<?php
	$title='PALTS : Command Line Quiz';
	$path='../../';
	$nav='netservices_quiz';
	include($path.'assets/inc/head.php');
?>
  <h2 class="quizHeader">Take a Quiz!</h2>


		<div class="quizQuestion">
			<p class="question">1. This command will let you copy files over the network.</p>

		<input type="radio" name="q1" value="1">
		<label class="" id="correctString1" for="q1a1">scp</label>
		<br>
		<input type="radio" name="q1" value="0">
		<label for="q1a2">net_transfer</label>
		<br>
		<input type="radio" name="q1" value="0">
		<label for="q1a3">netGo</label>
		<br>
		<input type="radio" name="q1" value="0">
		<label for="q1a4">net_cp</label>
		</div>

		<div class="quizQuestion">
			<p class="question">This is how you use ssh.</p>

		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a1">ssh hostname@user</label>
		<br>
		<input class="answer" type="radio" name="q2" value="1">
		<label id="correctString2" for="q2a2">ssh user@hostname</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a3">ssh --login user server</label>
		<br>
		<input class="answer" type="radio" name="q2" value="0">
		<label for="q2a4">type "Hack the Planet"</label>
		</div>

		<div class="quizQuestion">
			<p class="question">3. This command will download files from the internet.</p>

		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a1">getmefiles</label>
		<br>
		<input class="answer" type="radio" name="q3" value="1">
		<label id="correctString3" for="q3a2">wget</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a3">GoGetter</label>
		<br>
		<input class="answer" type="radio" name="q3" value="0">
		<label for="q3a4">file-grabber</label>
		</div>

		<div class="quizQuestion">
			<p class="question">This is the protocol FileZilla uses</p>

		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a1">fcp</label>
		<br>
		<input class="answer" type="radio" name="q4" value="1">
		<label id="correctString4" for="q4a2">ftp</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a3">frp</label>
		<br>
		<input class="answer" type="radio" name="q4" value="0">
		<label for="q4a4">fxp</label>
		</div>

		<div class="quizQuestion">
			<p class="question">5. This command will show you show the currently used ports.</p>

		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a1">netstatus</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a2">netfilter</label>
		<br>
		<input class="answer" type="radio" name="q5" value="1">
		<label id="correctString5" for="q5a3">netstat</label>
		<br>
		<input class="answer" type="radio" name="q5" value="0">
		<label for="q5a4">netports</label>
		</div>

		<div class="quizQuestion">
			<p class="question">6. This command is part of how Linux filters network traffic.</p>

		<input class="answer" type="radio" name="q6" value="1">
		<label id="correctString6" for="q6a1">iptables</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a2">ipfilter</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a3">ipblocker</label>
		<br>
		<input class="answer" type="radio" name="q6" value="0">
		<label for="q6a4">noHaxPls</label>
		</div>

		<div class="quizQuestion">
			<p class="question">7. This this is the name of the application on linux provides the common internet file system</p>

		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a1">ifs</label>
		<br>
		<input class="answer" type="radio" name="q7" value="1">
		<label id="correctString7" for="q7a2">samba</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a3">smb</label>
		<br>
		<input class="answer" type="radio" name="q7" value="0">
		<label for="q7a4">pdir</label>
		</div>



<br/>
  <div class="submitter">
  <input class="quizSubmit" id="submitButton" onClick="submitQuiz_TCL_QUIZ()"
	  type="submit" value="Submit" />
  </div>


<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
    <div class="qAnswr" id="answer1"><p><a href="scp.php">Check out the scp command</a></p></div>
    <div class="quizAnswers" id="correctAnswer2"></div>
    <div class="qAnswr" id="answer2"><p><a href="ssh.php">Check out the ssh command </a></p></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="qAnswr" id="answer3"><p><a href="wget.php">Check out the wget command </a></p></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="qAnswr" id="answer4"><p><a href="ftp.php">Check out the ftp command </a></p></div>
    <div class="quizAnswers" id="correctAnswer5"><p></div>
    <div class="qAnswr" id="answer5"><p><a href="netstat.php">Check out the netstat command </a></p></div>
    <div class="quizAnswers" id="correctAnswer6"></div>
    <div class="qAnswr" id="answer6"><p><a href="iptables.php">Check out the iptables command </a></p></div>
    <div class="quizAnswers" id="correctAnswer7"></div>
    <div class="qAnswr" id="answer7"><p><a href="samba.php">Check out the samba command </a></p></div>

<!--show score upon submit-->
    <div>
		<h2 class="quizScore" id="userScore">Your score will appear here.</h2>
    </div>
<?php
include($path.'assets/inc/footer.php');
?>
