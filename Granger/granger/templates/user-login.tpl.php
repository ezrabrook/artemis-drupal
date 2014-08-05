 <?php
    // split the username and password so we can put the form links were we want (they are in the "user-login-links" div bellow)
    print drupal_render($form['name']);
    print drupal_render($form['pass']);
    ?>
	<div class="form-item form-type-checkbox form-item-remember-me">
	<input tabindex="3" type="checkbox" id="edit-remember-me" name="remember_me" value="1" checked="checked" class="form-checkbox"><label class="option" for="edit-remember-me">Remember me </label>
    <?php
        // render login button
    print drupal_render($form['form_build_id']);
    print drupal_render($form['form_id']);
    print drupal_render($form['actions']);
    ?>
	
<!-- /user-login-custom-form -->