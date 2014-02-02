<!-- ======================== begin login form ============================== -->
<form method="post" action="index.php?state=<?php echo $FB_STATE['register_process']; ?>">

<legend>Register</legend>

<label for="first_name">First Name:</label>
<input type="text" name="first_name" id="first_name" value="" size="40" maxlength="40">

<label for="last_name">Last Name:</label>
<input type="text" name="last_name" id="last_name" value="" size="40" maxlength="40">

<label for="username">Screen Name:</label>
<input type="text" name="username" id="username" value="" size="15" maxlength="15">

<label for="password">Desired Password</label>
<input type="password" name="password" id="password" value="" size="15" maxlength="15">
<label for="sub">Click to Submit:</label>
<input type="submit" name="sub" id="sub" value="Register">

</form>
<!-- ========================== end login form ============================== -->

