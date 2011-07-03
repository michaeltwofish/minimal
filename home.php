<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php Options::out('title' ); ?></title>

	<meta name="description" content="Description" />
	<!-- <link rel="shortcut icon" href="http://assets.tumblr.com/images/default_avatar_16.gif" /> -->

	<?php $theme->header(); ?>

</head>
<body class="<?php $theme->body_class(); ?>">
	<div id="wrapper">
		<div id="header">
			<div id="access">
				<div class="menu">
					<div id="pages">
							<ul>
								<li><a href="#" title="/">Home</a></li>
								<li class="archive"><a href="#" title="/archive">Archive</a></li>
								<li class="mobile"><a href="#" title="/mobile">Mobile</a></li>
								<li class="rss"><a href="#" title="http://demo.tumblr.com/rss">RSS</a></li>
							</ul>
					</div><!-- #pages -->
					<div id="search">
						<form action="/search" method="get">
							<input type="text" name="q" value=""/>
							<input type="submit" value="Search" class="search-button"/>
						</form>
					</div><!-- #search -->
				</div><!-- .menu -->
			</div><!-- #access -->
			<div id="branding">
				<h1><a href="<?php Site::out_url('habari'); ?>"><?php Options::out('title'); ?></a></h1>
				<h2><?php Options::out( 'tagline' ); ?></h2>
			</div><!-- #branding -->
		</div><!-- #header -->
		<div id="main">
			<div id="container">
				<div id="content">
					<?php
					foreach ( $posts as $post ) {
						$theme->content($post);
					}
					?>
					<div class="pagination">
						<span class="next-page"><a href="#" title="/page/2">Next &#187;</a></span>
					</div><!-- .pagination -->

				</div><!-- #content -->
			</div><!-- #container -->

			<?php $theme->display('sidebar'); ?>
		</div><!-- #main -->
		<div id="footer">
			<div id="colophon"><p>Powered by <a href="#" title="http://habariproject.org">Habari</a>. <a href="#" title="<?php echo $theme->info->url; ?>">Minimal Theme</a> designed by <a href="#" title="http://arturkim.com">Artur Kim</a>.</p></div>
		</div><!-- #footer -->
	</div><!-- #wrapper -->

</body>
</html>
