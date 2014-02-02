<!-- ======================== begin login form ============================== -->
<form method="post" action="index.php?state=<?php echo $FB_STATE['login_process']; ?>">

<legend>Login Form</legend>

<label for="username">User Name:</label>
<input type="text" name="username" id="username" value="" size="15" maxlength="15">
<label for="password">Password</label>
<input type="password" name="password" id="password" value="" size="15" maxlength="15">
<label for="sub">Click to Submit:</label>
<input type="submit" name="sub" id="sub" value="Login">

</form>
<!-- ========================== end login form ============================== -->

