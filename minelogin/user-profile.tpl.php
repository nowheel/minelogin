<?php
global $base_url;
global $user;
if(arg(1) == $user->uid){
	$userviewed = user_load($user->uid);
}else{
	$userviewed = user_load(arg(1));
}

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
