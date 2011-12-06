<h3>
	Vanilla Forums Proxy Connect
</h3>

<p>
	This information required by <a href="http://vanillaforums.org/">Vanilla Forum</a>'s SSO <a href="http://vanillaforums.org/page/ProxyConnect_SSO">ProxyConnect</a> Authenticator.
	More information can be found at <a href="http://vanillaforums.org/page/singlesignon">http://vanillaforums.org/page/singlesignon</a>.
<p>

<p>
	Please note, this information is based on a standard PyroCMS installation.
	If you're using an alternate method of user authentication, these values
	maybe incorrect.
</p>

<form action="#" method="post" class="crud">
	<fieldset>
		<ol>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="site-url">Pyro CMS URL</label>
				<input type="text" name="site-url" value="<?php echo $url['site']; ?>" readonly="readonly" />
			</li>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="auth-url">Authenticate URL</label>
				<input type="text" name="authentication-url" value="<?php echo $url['authentication']; ?>" readonly="readonly" />
			</li>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="reg-url">Registration URL</label>
				<input type="text" name="registration-url" value="<?php echo $url['registration']; ?>" readonly="readonly" />
			</li>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="signin-url">Sign-In URL</label>
				<input type="text" name="sign-in-url" value="<?php echo $url['sign-in']; ?>" readonly="readonly" />
			</li>
			<li class="<?php echo alternator('', 'even'); ?>">
				<label for="signout-url">Sign-Out URL</label>
				<input type="text" name="sign-out-url" value="<?php echo $url['sign-out']; ?>" readonly="readonly" />
			</li>
		</ol>
	</fieldset>
</form>