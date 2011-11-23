<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="Demo for Infinite AJAX Scroll jQuery Plugin">
  <meta name="author" content="Jeroen Fiege">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="http://kevinburke.bitbucket.org/markdowncss/markdown.css" rel="stylesheet"></link>
</head>

<body>

  <div id="container">
    <header>

    </header>
    <div id="main" role="main">
		
		<h1>Infinite AJAX Scroll Demo</h1>
		
		<div class="posts">
			<div class="post">
				<?php 
					$items_per_page = 5;
					$cur_page = ($_GET["page"] ? (int) $_GET["page"] : 0);
					
					if ($cur_page == 0) $items_per_page = 0;
					
					// add some loading time
					if ($cur_page > 0) sleep(1);
					
					$offset = $items_per_page * $cur_page;
					$limit = $items_per_page * ($cur_page + 1);
					
					for($i=$offset;$i<$limit;$i++):
				?>
					<h2>Item <?php echo $i; ?></h2>
					<p>Pellentesque vel dui sed orci faucibus iaculis. Suspendisse dictum magna id purus tincidunt rutrum. Nulla congue. Vivamus sit amet lorem posuere dui vulputate ornare. Phasellus mattis sollicitudin ligula. Duis dignissim felis et urna. Integer adipiscing congue metus. Nam pede. Etiam non wisi. Sed accumsan dolor ac augue. Pellentesque eget lectus. Aliquam nec dolor nec tellus ornare venenatis. </p>
				<?php 
					endfor;
				?>
			</div>
		</div>
		
		<div class="navigation">
			<a href="index.php?page=<?php echo $cur_page + 1; ?>" class="next-posts">Next page</a>
		</div>
		
    </div>
    <footer>

    </footer>
  </div> <!-- eo #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
  <script>window.jQuery || document.write("<script src='js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>

  <!-- scripts -->
  <script src="../jquery.ias.js"></script>
  <script>
  	jQuery.ias({
		container : ".posts",
		item: ".post",
		pagination: ".navigation",
		next: ".next-posts",
		loader: "../images/loader.gif",
        firstPage: "first_page.php"
	});
  </script>
  <!-- end scripts-->
  
  
  <script>
    var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID 
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
    g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
    s.parentNode.insertBefore(g,s)}(document,"script"));
  </script>
</body>
</html>