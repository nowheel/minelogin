<?php
global $base_url;
global $user;
if(arg(1) == $user->uid){
	$userviewed = user_load($user->uid);
}else{
	$userviewed = user_load(arg(1));
}
/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<div class="profile"<?php print $attributes; ?>>
  <div class="username">
  	<p><?php print($userviewed->name); ?></p>
  </div>
  <div class="userimg">
	  <img src="
	  	<?php 
	  		$uri =$userviewed->field_avatar['und'][0]['uri']; 
	  		print image_style_url('medium', $uri); 
	  	?>"
	  />
  </div>
  <div class="user-info">
	  <div class="user-status">
		  <?php  
		  		$status = $userviewed->status;
		  		if($status == 1){
			  		print '<h3>UTENTE ATTIVO</h3>';
		  		}else{
			  		print '<h3>UTENTE BLOCCATO</h3>';
		  		}
		  ?>
	  </div>
	  <div class="ruolo">
		  <h3 class="title-roles">ruolo:</h3>
		  <?php
		  		$arr = $userviewed->roles;
		  		foreach ($arr as $chiave => $valore) {
				    print('<p class="role-tipe">' . $valore . '</p>');
				} 
		  	?>
	  </div>
	  <div class="online">
		  <h3 class="title-roles">Status:</h3>
		  <?php
		  	$time_active = db_query("SELECT timestamp FROM {sessions} WHERE uid = :uid ORDER BY timestamp DESC LIMIT 1", array(":uid" => $userviewed->uid))->fetchField();
		  	$time_current = time();
		  	$time_elapsed = $time_current - $time_active;
		  	if($time_elapsed <= 120){
			  	print('<p>user online</p>');
		  	}else{
			  	print('<p>user offline</p>');
		  	}
		  ?>
	  </div>
  </div>



  <?php
  /*
  	echo '<pre>';
  	print_r($user);
  	echo '</pre>';
  	*/
  ?>
	  <?php if ($user->roles[4] == 'admin'): ?>
		  <div class="admin-menu trans">
			<?php
			$menu = menu_tree('menu-admin');
			$menuhtml = drupal_render($menu);
			print_r($menuhtml);
			?>
			<img  class="trans menu-admin-img" src="<?php print $base_url; ?>/sites/all/themes/nw/images/logo_manu_admin.png" />
		  </div>
	  <?php endif; ?>
</div>
