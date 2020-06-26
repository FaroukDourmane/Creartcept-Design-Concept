<?php require_once("config/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Creartcept - Coming soon </title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	 <link rel="icon" type="image/png" href="assets/img/icon.png"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
<!--===============================================================================================-->

<!-- Main style -->
<link rel="stylesheet" href="assets/css/main_<?php __("dir"); ?>.css">
</head>

<body>
  <div class="sidebar">
    <a class="home"> <img src="assets/svg/home.svg" /> </a>
    <a href="https://www.facebook.com/creartcept" target="_blank"> <img src="assets/svg/facebook.svg" /> </a>
		<a href="https://www.instagram.com/creartcept/" target="_blank"> <img src="assets/svg/instagram.svg" /> </a>
    <a href="https://api.whatsapp.com/send?phone=00905524551793" target="_blank"> <img src="assets/svg/whatsapp.svg" /> </a>
  </div>

  <div class="top">
    <ul>
      <li>
        <a> <?php echo lang_preview(); ?> </a>
        <ul>
          <li> <a href="?lang=ar"> <img src="assets/svg/ar.svg" /> AR </a> </li>
          <li> <a href="?lang=en"> <img src="assets/svg/en.svg" /> EN </a> </li>
          <li> <a href="?lang=tr"> <img src="assets/svg/tr.svg" /> TR </a> </li>
        </ul>
      </li>
    </ul>
  </div>

	<div class="content">
		<img src="assets/svg/logo.svg" class="logo" />
		<p dir="<?php __("dir"); ?>">
			<span>Creartcept</span>,
			<?php __("about_company"); ?>
		</p>

		<p><span><?php __("our_goal"); ?></span> <?php __("goal_text"); ?></p>

		<p><?php __("mission_text"); ?> <span><?php __("our_mission"); ?></span> </p>

		<div class="expect" dir="<?php __("dir"); ?>">
			<?php __("expect_us"); ?>
			<span> <?php __("soon"); ?> </span>
		</div>
	</div>
</body>

<footer>
</footer>

</html>
