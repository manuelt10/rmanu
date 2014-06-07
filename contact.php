<?php 
session_start();
$session = $_SESSION;
unset($_SESSION["message"]);
session_write_close();
require_once('template/hea.php');
$x = rand(1,15);
$y = rand(1,15);
?>
<div class="container">
	<form class="form-group projectsWrapper col-md-8" method="post" action="func/message.php">
		<legend>Send me a Message</legend>
		<input type="text" name="subject" placeholder="The subject of your message" required class="form-control"> <br>
		<input type="text" name="email" placeholder="Write a valir Email Address" required class="form-control"><br>
		<textarea name="message" placeholder="Write your message here" required class="form-control"></textarea><br>
		<legend>Are you Human?</legend>
		<div class="form-inline">
			<input type="text" name="x" value="<?php echo $x ?>" class="form-control mediuminput" readonly> <label>+</label> 
			<input type="text" name="y" value="<?php echo $y ?>" class="form-control mediuminput" readonly> <label>=</label> 
			<input type="text" name="xy" required class="form-control mediuminput">
		</div><br>
		<?php echo !empty($session["message"]) ? '<strong style="color: RED">' . $session["message"] . '</strong><br>' : ""; ?>
		<button type="submit" class="btn btn-success">Send</button>
	</form>
</div>

<?php 
require_once('template/foo.php');
?>