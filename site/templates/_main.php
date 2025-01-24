<?php

namespace ProcessWire;

// We keep this file to demonstrate the basic structure of a template file.

/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */

$home = $pages->get('/');
/** @var HomePage $home */

?>
<!DOCTYPE html>
<html lang="en">

<head id="html-head">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo $page->title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
	<script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
</head>

<body id="html-body">

	<p id="topnav">
		<?php echo $home->and($home->children)->implode(" / ", "<a href='{url}'>{title}</a>"); ?>
	</p>

	<hr />

	<h1 id="headline">
		<?php if ($page->parents->count()): // breadcrumbs 
		?>
			<?php echo $page->parents->implode(" &gt; ", "<a href='{url}'>{title}</a>"); ?> &gt;
		<?php endif; ?>
		<?php echo $page->title; // headline 
		?>
	</h1>

	<div id="content">
		Default content
	</div>

	<?php if ($page->hasChildren): ?>
		<ul>
			<?php echo $page->children->each("<li><a href='{url}'>{title}</a></li>"); // subnav 
			?>
		</ul>
	<?php endif; ?>

	<?php if ($page->editable()): ?>
		<p><a href='<?php echo $page->editUrl(); ?>'>Edit this page</a></p>
	<?php endif; ?>

</body>

</html>