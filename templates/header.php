
	<?php if ($_SESSION['FB_STATE'] === $FB_STATE['logged_in']) { ?>
	<header id="login">
		<section class="wrapper">
			<a href="http://royjulien.com/fishbook/"><h1 class="facebook-logo"></h1></a>
			<section id="requests">
				<div id="friend-request" data-new="no"><a href="javascript:;"></a></div>
				<div id="message-request" data-new="yes"><a href="javascript:;"></a></div>
				<div id="notification-request" data-new="yes"><a href="javascript:;"></a></div>
			</section><!-- END requests -->
			<section id="search">
				<form id="search-form" method="post" action="index.php">
					<label for="search-field"><input type="text" name="search-field" id="search-field" placeholder="Search for people, places and things" tabindex="1"></label>
					<label for="login-submit"><input type="submit" name="login-submit" id="login-submit" value="" tabindex="2"></label>
				</form>
			</section><!-- END search -->
			<section id="options">
				<div id="go-to-timeline">
					<div id="avatar-thumbnail"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div>
					<a href="javascript:;"><?php echo $c_first_name." ".$c_last_name; ?></a>
				</div>
				<div id="go-to-home"><a href="javascript:;">Home</a></div>
				<div id="go-to-privacy"><a href="javascript:;"></a></div>
				<div id="go-to-settings"><a href="index.php?state=<?php echo $FB_STATE['logout']; ?>"></a></div>
			</section><!-- END options -->
		</section><!-- END wrapper -->
	</header><!-- END login -->
	<?php
		} else {
	?>
	<header id="logout">
		<section class="wrapper">
			<a href="http://royjulien.com/fishbook/"><h1 class="facebook-logo"></h1></a>
			<section id='mobile-login'>
				<section id='get-app'>
					<i class='phone-app'></i> Get Facebook for iPhone and browse faster.
				</section>
				<form id="mobile-login-form" method="post" action="index.php?state=<?php echo $FB_STATE['login_process']; ?>">
					<input type="text" name="email" id="mobile-email" placeholder="Email or Phone" tabindex="1">
					<input type="password" name="pass" id="mobile-pass" placeholder="Password" tabindex="2">
					<div id='mobile-login-submit'><input type="submit" name="login-submit" id="mobile-login-submit-button" value="Log In" tabindex="4"></div>
					<button id="mobile-create-account" onclick='javascript:;'>Create New Account</button>
					<label id="mobile-forgot-pass">Forgot your password? · Help Center</label>
				</form>
			</section>
			<section id="login">
				<form id="login-form" method="post" action="index.php?state=<?php echo $FB_STATE['login_process']; ?>">
					<label for="email"><span>Email or Phone</span> <input type="text" name="email" id="email" tabindex="1"></label>
					<label for="pass"><span>Password</span> <input type="password" name="pass" id="pass" tabindex="2"></label>
					<label for="login-submit"><input type="submit" name="login-submit" id="login-submit" value="Log In" tabindex="4"></label>
					<label for="persist-box"><input type="checkbox" name="persist-box" value="1" tabindex="3">Keep me logged in </label>
					<label id="forgot-pass">Forgot your password?</label>
				</form>
			</section><!-- END login -->
		</section><!-- END wrapper -->
	</header><!-- END logout -->
	<?php
		}
	?>