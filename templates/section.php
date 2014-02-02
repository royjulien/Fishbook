<?php

echo "<pre><em>ERROR REPORT:</em>\n";
	print_r($FB_ERROR);
echo "</pre>\n";


if ($_SESSION['FB_STATE'] === $FB_STATE['logged_in']) {
?>
	<section id="content-logged-in">
		<section class="wrapper">
			<div id="left-column">
				<div id="profile">
					<div id="profile-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END avatar -->
					<div id="profile-name"><strong><a href="javascript:;"><?php echo $c_first_name." ".$c_last_name; ?></a></strong> <a href="javascript:;">Edit Profile</a></div><!-- END name -->
				</div><!-- END profile -->
				<div id="favorites">
					<h3>Favorites</h3>
					<ul>
						<li class="selected"><i class="news-feed"></i><strong>News Feed</strong></li>
						<li><i class="messages"></i>Messages</li>
						<li><i class="events"></i>Events</li>
						<li><i class="photos"></i>Photos</li>
					</ul>
				</div><!-- END favorites -->
				<div id="groups">
					<h3>Groups</h3>
					<ul>
						<li><i class="got-fishbooked"></i>We all got Fishbooked</li>
						<li><i class="ai-smiles"></i>Geekwiz Rules</li>
						<li><i class="create-group"></i>Create Group...</li>
					</ul>
				</div><!-- END groups -->
				<div id="pages">
					<h3>Pages</h3>
					<ul>
						<li><i class="the-fish"></i>The Fish</li>
						<li><i class="page-feed"></i>Pages Feed</li>
						<li><i class="like-pages"></i>Like Pages</li>
					</ul>
				</div><!-- END pages -->
				<div id="apps">
					<h3>Apps</h3>
					<ul>
						<li><i class="app-center"></i>App Center</li>
						<li><i class="gift"></i>Gifts</li>
						<li><i class="games-feed"></i>Games Feed</li>
					</ul>
				</div><!-- END apps -->
				<div id="more"><strong><a href="javascript:;">More<i class="arrow-down"></i></a></strong></div>
			</div><!-- END left-column -->
			<div id="content-column">
				<div id="main-content">
					<div id="posting">
						<div id="posting-what">
							<ul>
								<li><i class="update-status"></i><strong>Update Status</strong></li>
								<li><i class="photos"></i><strong><a href="javascript:;">Add Photos/Video</a></strong></li>
							</ul>
						</div><!-- END posting-what -->
						<div id="posting-input">
							<i class="arrow-up"></i>
							<form action="">
								<textarea placeholder="What's on your mind?" value=""></textarea>
								<input type="submit" value="Post" />
							</form>
						</div><!-- END posting-input -->
					</div><!-- END posting -->
					<div id="posts">
						<ul>
							<li class="sort"><span><a href="javascript:;">sort<i class="arrow-down"></i></a></span></li>
							<li class="post">
								<div class="post-avatar">
									<img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" />
								</div><!-- END post-avatar -->
								<div class="post-content">
									<div class="post-title">
										<strong><a href="javascript:;">Fishbooked Troller</a></strong>
									</div><!-- END post-title -->
									<div class="post-text">
										WTF is going on, did we just all get Fishbooked by <a href="javascript:;">Julien Roy</a>, TROLOLOLOL
									</div><!-- END post-text -->
									<div class="post-url">
										<a href="javascript:;">Sing along and enjoy the auto Replay :D!!!!!!!</a>
									</div><!-- END post-url -->
									<div class="post-link">
										<div class="post-link-item">
											<video autoplay loop controls>
											  <source src="templates/video/family-guy-trololol.mp4" type="video/mp4">
											  <source src="templates/video/family-guy-trololol.ogv" type="video/ogg">
											  Your browser does not support the video tag.
											</video>
										</div><!-- END post-link-item -->
										<div class="post-link-text">
											<div class="post-link-text-title">
												<strong><a href="javascript:;">Fishbook EPIC TROLL :D</a></strong>
											</div><!-- END post-link-text-title -->
											<div class="post-link-text-description">
												royjulien.com/mm3323/fishbook/ <br /> OMG!! We all got Fishbooked WTF Mates, Thanks Julien Roy :'(
											</div><!-- END post-link-text-description -->
										</div><!-- END post-link-text -->
									</div><!-- END post-link -->
									<div class="post-share">
										<ul>
											<li><a href="javascript:;">Like</a></li>
											<li>·</li>
											<li><a href="javascript:;">Comment</a></li>
											<li>·</li>
											<li><a href="javascript:;">Share</a></li>
											<li>·</li>
											<li><a href="javascript:;">Promote</a></li>
											<li>·</li>
											<li><a href="javascript:;">4 Minutes ago near Sante Monica</a></li>
										</ul>
									</div><!-- END post-share -->
									<div class="post-likes">
										<i class="like-this"></i><a href="javascript:;">5 people</a> likes this.
									</div><!-- END post-likes -->
									<div class="post-comments">
										<ul>
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text">
													<strong><a href="javascript:;">Fishbook Roy</a></strong> Dam it, I got Fishbooked too GRRRRR AAAAAHHHH!!!!!!
													<span>45 minutes ago · <a href="javascript:;">Like</a></span>
												</div><!-- END post-comment-text -->
											</li><!-- END post-comment -->
											
											<!-- WRITE A COMMENT -->
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text"><input type="text" placeholder="Write a comment..." value="" /></div><!-- END post-comment-text -->
											</li><!-- END post-comment-write -->
										</ul>
									</div><!-- END post-comments -->
								</div><!-- END post-content -->
							</li><!-- END post -->
							
							<li class="sort"></li>
							
							<li class="post">
								<div class="post-avatar">
									<img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" />
								</div><!-- END post-avatar -->
								<div class="post-content">
									<div class="post-title">
										<strong><a href="javascript:;">Fishbooked Troller</a></strong>
									</div><!-- END post-title -->
									<div class="post-text">
										WTF is going on, did we just all get Fishbooked by <a href="javascript:;">Julien Roy</a>, TROLOLOLOL
									</div><!-- END post-text -->
									<div class="post-url">
										<a href="http://www.youtube.com/watch?v=i6uK7VaREm0">http://www.youtube.com/watch?v=i6uK7VaREm0</a>
									</div><!-- END post-url -->
									<div class="post-link">
										<div class="post-link-item">
											<object type="movie" data="http://www.youtube.com/v/i6uK7VaREm0?hl=en_US&amp;version=3">
											<param name="movie" value="http://www.youtube.com/v/i6uK7VaREm0?hl=en_US&amp;version=3"></param>
											<param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param>
											<embed src="http://www.youtube.com/v/i6uK7VaREm0?hl=en_US&amp;version=3" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true"></embed>
											</object>
										</div><!-- END post-link-item -->
										<div class="post-link-text">
											<div class="post-link-text-title">
												<strong><a href="javascript:;">Trololo [Full Song]</a></strong>
											</div><!-- END post-link-text-title -->
											<div class="post-link-text-description">
												www.youtube.com <br /> OMG!! We all got Fishbooked WTF Mates, Thanks to Julien Roy :'(
											</div><!-- END post-link-text-description -->
										</div><!-- END post-link-text -->
									</div><!-- END post-link -->
									<div class="post-share">
										<ul>
											<li><a href="javascript:;">Like</a></li>
											<li>·</li>
											<li><a href="javascript:;">Comment</a></li>
											<li>·</li>
											<li><a href="javascript:;">Share</a></li>
											<li>·</li>
											<li><a href="javascript:;">Promote</a></li>
											<li>·</li>
											<li><a href="javascript:;">4 Minutes ago near Sante Monica</a></li>
										</ul>
									</div><!-- END post-share -->
									<div class="post-likes">
										<i class="like-this"></i><a href="javascript:;">5 people</a> likes this.
									</div><!-- END post-likes -->
									<div class="post-comments">
										<ul>
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text">
													<strong><a href="javascript:;">Fishbook Roy</a></strong> Dam it, I got Fishbooked too GRRRRR AAAAAHHHH!!!!!!
													<span>45 minutes ago · <a href="javascript:;">Like</a></span>
												</div><!-- END post-comment-text -->
											</li><!-- END post-comment -->
											
											<!-- WRITE A COMMENT -->
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text"><input type="text" placeholder="Write a comment..." value="" /></div><!-- END post-comment-text -->
											</li><!-- END post-comment-write -->
										</ul>
									</div><!-- END post-comments -->
								</div><!-- END post-content -->
							</li><!-- END post -->
							
							<li class="sort"></li>
							
							<li class="post">
								<div class="post-avatar">
									<img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" />
								</div><!-- END post-avatar -->
								<div class="post-content">
									<div class="post-title">
										<strong><a href="javascript:;">Fishbooked Troller</a></strong>
									</div><!-- END post-title -->
									<div class="post-text">
										WTF is going on, did we just all get Fishbooked by <a href="javascript:;">Julien Roy</a>, TROLOLOLOL
									</div><!-- END post-text -->
									<div class="post-url">
										<a href="http://www.youtube.com/watch?v=i6uK7VaREm0">http://www.youtube.com/watch?v=i6uK7VaREm0</a>
									</div><!-- END post-url -->
									<div class="post-link">
										<div class="post-link-item">
											<img src="templates/img/sc2-hots-credits.jpg" alt="StarCraft 2 - Heart of the Swarm, Julien Roy Credits" />
										</div><!-- END post-link-item -->
										<div class="post-link-text">
											<div class="post-link-text-title">
												<strong><a href="javascript:;">Trololo [Full Song]</a></strong>
											</div><!-- END post-link-text-title -->
											<div class="post-link-text-description">
												www.youtube.com <br /> OMG!! We all got Fishbooked WTF Mates, Thanks to Julien Roy :'(
											</div><!-- END post-link-text-description -->
										</div><!-- END post-link-text -->
									</div><!-- END post-link -->
									<div class="post-share">
										<ul>
											<li><a href="javascript:;">Like</a></li>
											<li>·</li>
											<li><a href="javascript:;">Comment</a></li>
											<li>·</li>
											<li><a href="javascript:;">Share</a></li>
											<li>·</li>
											<li><a href="javascript:;">Promote</a></li>
											<li>·</li>
											<li><a href="javascript:;">4 Minutes ago near Sante Monica</a></li>
										</ul>
									</div><!-- END post-share -->
									<div class="post-likes">
										<i class="like-this"></i><a href="javascript:;">5 people</a> likes this.
									</div><!-- END post-likes -->
									<div class="post-comments">
										<ul>
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text">
													<strong><a href="javascript:;">Fishbook Roy</a></strong> Dam it, I got Fishbooked too GRRRRR AAAAAHHHH!!!!!!
													<span>45 minutes ago · <a href="javascript:;">Like</a></span>
												</div><!-- END post-comment-text -->
											</li><!-- END post-comment -->
											
											<!-- WRITE A COMMENT -->
											<li class="post-comment">
												<div class="post-comment-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END post-comment-avatar -->
												<div class="post-comment-text"><input type="text" placeholder="Write a comment..." value="" /></div><!-- END post-comment-text -->
											</li><!-- END post-comment-write -->
										</ul>
									</div><!-- END post-comments -->
								</div><!-- END post-content -->
							</li><!-- END post -->
						</ul>
					</div><!-- END posts -->
				</div><!-- END main-content -->
				<aside>
					<div id="coming-events">
						<ul>
							<li><a href="javascript:;"><i class="events"></i><strong>School Break</strong></a> on March 23</li>
							<li><a href="javascript:;"><i class="page-feed"></i><strong>2 requests</strong></a> from Julien Troll</li>
							<li><a href="javascript:;"><i class="app-center"></i><strong>1 other app request</strong></a></li>
						</ul>
					</div><!-- END coming-events -->
					<div id="sponsored">
						<div id="sponsored-title">
							<strong><a href="javascript:;">Sponsored</a><i class="speaker-phone"></i></strong>
							<span><a href="javascript:;">Create an Ad</a></span>
						</div>
						<ul>
							<li class="ad">
								<div class="ad-title"><strong><a href="javascript:;">Dead Space Fishbook</a></strong> <a href="javascript:;">deadspacefish.com</a></div>
								<div class="ad-image"><img src="templates/img/no-way.png" alt="Fishbook ad" /></div>
								<div class="ad-description">Now that's the game we've all been waiting for Fishbook in Dead Space 3, What else could you want?</div>
							</li><!-- END ad -->
							<li class="ad">
								<div class="ad-title"><strong><a href="javascript:;">Wanna go to Vegas with Fishy?</a></strong> <a href="javascript:;">Fishme.com</a></div>
								<div class="ad-image"><img src="templates/img/no-way-2.png" alt="Fishbook ad" /></div>
								<div class="ad-description">Meet Fishy at the Aria Hotel in Las Vegas and thanks for all the fish!</div>
							</li><!-- END ad -->
							<li class="ad">
								<div class="ad-title"><strong><a href="javascript:;">Iphones have a new Fish color</a></strong> <a href="javascript:;">iphonefish.com</a></div>
								<div class="ad-image"><img src="templates/img/no-way-3.png" alt="Fishbook ad" /></div>
								<div class="ad-description">Oh yeah, it's finally here, the Iphone Fish. Underwater proof, you can now take amazing pictures of the Fish :D</div>
							</li><!-- END ad -->
							<li class="ad">
								<div class="ad-title"><strong><a href="javascript:;">Turbo Tax, Fishing Edition</a></strong> <a href="javascript:;">turbotaxfish.com</a></div>
								<div class="ad-image"><img src="templates/img/no-way-4.png" alt="Fishbook ad" /></div>
								<div class="ad-description">You think Turbo Tax is good? Wait till you've tried our new version the Fishing Edition.</div>
							</li><!-- END ad -->
						</ul>
					</div><!-- END sponsored -->
				</aside><!-- END right-column -->
			</div><!-- END content-column -->
		</section><!-- END wrapper -->
		
		<aside>
			<div id="live-notifications">
				<ul>
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>The Fishbook</strong> commented on Julien Roy's post on his wall: "Oh no, Fishbooked haha..."</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>Troller Pro</strong> commented on your wall: "Da Fish strikes again Muahahaha!!!"</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>The Fishbook</strong> commented on Julien Roy's post on his wall: "Oh no, Fishbooked haha..."</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>Troller Pro</strong> commented on your wall: "Da Fish strikes again Muahahaha!!!"</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>The Fishbook</strong> commented on Julien Roy's post on his wall: "Oh no, Fishbooked haha..."</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>Troller Pro</strong> commented on your wall: "Da Fish strikes again Muahahaha!!!"</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>The Fishbook</strong> commented on Julien Roy's post on his wall: "Oh no, Fishbooked haha..."</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>Troller Pro</strong> commented on your wall: "Da Fish strikes again Muahahaha!!!"</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>The Fishbook</strong> commented on Julien Roy's post on his wall: "Oh no, Fishbooked haha..."</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
					<li class="live-notification">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-event"><p><strong>Troller Pro</strong> commented on your wall: "Da Fish strikes again Muahahaha!!!"</p></div><!-- END live-event -->
					</li><!-- END live-notification -->
				</ul>
			</div><!-- END live-notifications -->
			<div id="live-seperator"></div><!-- END live-seperator -->
			<div id="online-friends">
				<ul>
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="Alex Lewis Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Alex Lewis</div><!-- END live-name -->
						<div class="live-online"><i class="online"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="David Campos Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">David Campos</div><!-- END live-name -->
						<div class="live-online"><span>8m</span><i class="phone"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Dr. Evil</div><!-- END live-name -->
						<div class="live-online"><i class="phone"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="The Fisher Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">The Fisher</div><!-- END live-name -->
						<div class="live-online"><span>15m</span><i class="phone"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="Janet Pascual Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Janet Pascual</div><!-- END live-name -->
						<div class="live-online"><span>5h</span><i class="phone"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Julien Roy</div><!-- END live-name -->
						<div class="live-online"><i class="online"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="Ken Tuazon Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Ken Tuazon</div><!-- END live-name -->
						<div class="live-online"><i class="online"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
					<li class="online-friend">
						<div class="live-avatar"><img src="templates/img/avatar.jpg" alt="<?php echo $c_first_name." ".$c_last_name; ?> Avatar" /></div><!-- END live-avatar -->
						<div class="live-name">Macha Roy</div><!-- END live-name -->
						<div class="live-online"><span>1h</span><i class="phone"></i></div><!-- END live-online -->
					</li><!-- END online-friend -->
				</ul>
			</div><!-- END online-friends -->
		</aside><!-- END aside -->
	</section><!-- END content-logged-in -->
<?php
	} else if ($_SESSION['FB_STATE'] === $FB_STATE['registered']) {
?>
	<section id="content">
		<section class="wrapper">
			<div id="intro">
				<p>Thank you for registering to Fishbook <?php echo $c_first_name." ".$c_last_name; ?> a confirmation email has been sent to <?php echo $c_email; ?>.</p>
			</div><!-- END intro -->
		</section><!-- END wrapper --> 
	</section><!-- END content -->
<?php
	} else {
?>
	<section id="content">
		<section class="wrapper">
			<div id="intro">
				<p>Facebook helps you connect and share with the people in your life.</p>
				<img src="templates/img/header.png" width="537" height="195" alt="Facebook connection">
			</div><!-- END intro -->
			<div id="sign-up">
				<h2><img src="templates/img/sign-up-text.jpg" width="223" height="65" alt="Sign Up"></h2>
				<form id="sign-up-form" method="post" action="index.php?state=<?php echo $FB_STATE['register_process']; ?>">
					<input type="text" id="first-name" name="first-name" placeholder="First Name" required>
					<input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
					<input type="email" id="new-email" name="new-email" placeholder="Your Email" required>
					<input type="email" id="re-email" name="re-email" placeholder="Re-enter Email" required>
					<input type="password" id="password" name="password" placeholder="New Password" required>
					<label for="birthday"><span>Birthday:</span>
						<select name="b-month" id="b-month">
							<option value="-1">Month:</option>
							<option value="1">Jan</option>
							<option value="2">Feb</option>
							<option value="3">Mar</option>
							<option value="4">Apr</option>
							<option value="5">May</option>
							<option value="6">Jun</option>
							<option value="7">Jul</option>
							<option value="8">Aug</option>
							<option value="9">Sep</option>
							<option value="10">Oct</option>
							<option value="11">Nov</option>
							<option value="12">Dec</option>
						</select>
						<select name="b-day" id="b-day">
							<option value="-1">Day:</option>
							<?php for($x=0; $x<=31; $x += 1) echo "<option value='".$x."'>".$x."</option>"; ?>
						</select>
						<select name="b-year" id="b-year">
							<option value="-1">Year:</option>
							<?php for($x=2014; $x>=1905; $x -= 1) echo "<option value='".$x."'>".$x."</option>"; ?>
						</select>
					</label>
					<div id="why">
						<a href="javascript:;">Why do I need to provide my birthday?</a>
					</div><!-- END why -->
					<label for="sex"><input type="radio" name="sex" value="female"> Female</label>
					<label for="sex"><input type="radio" name="sex" value="male"> Male</label>
					<div id="terms">
						By clicking Sign Up, you agree to our <a href="http://www.facebook.com/legal/terms" target="_blank">Terms</a> and that you have read our <a href="http://www.facebook.com/about/privacy/" target="_blank">Data Use Policy</a>, including our <a href="https://www.facebook.com/help/cookies/" target="_blank">Cookie Use</a>.
					</div><!-- END terms -->
					<input type="submit" id="sign-up-submit" value="">
				</form>
				<p id="create-a-page"><a href="https://www.facebook.com/pages/create.php">Create a Page</a> for a celebrity, band or business.</p>
			</div><!-- END sign-up -->
		</section><!-- END wrapper --> 
	</section><!-- END content -->
<?php
	}
?>