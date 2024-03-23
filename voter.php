<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<h4><b> Welcome <?php echo $_SESSION['SESS_NAME']; ?></b> </h4>
<h4>Make a Vote </h4>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'> What is your favorite political party? <BR>
<input type="radio" name="lan" value="BJP">  BJP<BR>
<input type="radio" name="lan" value="CONGRESS">CONGRESS<BR>
<input type="radio" name="lan" value="ADMK">ADMK<BR>
<input type="radio" name="lan" value="DMK">DMK<BR>
<input type="radio" name="lan" value="NOTA">NOTA<BR>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>
