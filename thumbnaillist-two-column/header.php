<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<!--	<link rel="stylesheet" href="--><?php //echo $templateURL; ?><!--bootstrap.min.css">-->

	<script>
		function subst() {
			var vars = {};
			var x = window.location.search.substring(1).split('&');
			for (var i in x) {
				var z = x[i].split('=', 2);
				vars[z[0]] = unescape(z[1]);
			}
			var x = ['frompage', 'topage', 'page', 'webpage', 'section', 'subsection', 'subsubsection'];
			for (var i in x) {
				var y = document.getElementsByClassName(x[i]);
				for (var j = 0; j < y.length; ++j) y[j].textContent = vars[x[i]];
			}
		}
	</script>


</head>
<body onload="subst()">
<style>

	body {
		color: #555;
		font-family: "Arial", sans-serif;
		margin: 0;
		padding: 0px 80px;
		font-size: 15px;
		background: white;
	}

	#header {
		margin-top: 10px;
		height: 120px;
		padding-bottom: 10px;
		background: <?php echo $headerBackgroundColor ?>;
	<?php  if ($showLines) { ?> border-bottom: 1px solid <?php echo $lineColor ?>;
	<?php  } ?>
	}

	.title {
		color: <?php echo $headerTitleColor; ?>;
		font-weight: bold;
		font-size: 20px;
	}

	.subtitle {
		margin-top: 10px;
		color: <?php echo $headerSubTitleColor; ?>;
		font-weight: normal;
		font-size: 16px;
	}

	#ruler {
		display: none;
		height: 20px;
	}

	#ruler .mark {
		display: inline-block;

		border-left: 1px solid #555;
		float: left;
		width: 86px;
	}

	.container {
		position: relative;
	}

	.container > div {
		position: relative;
	}

	.paging_container {
		color: <?php echo $headerSubTitleColor; ?>;
		position: absolute;
		right: 0;
		text-align: right;

	}

	.title_container {
		float: left;
		padding-left: 20px;
		padding-top: 20px;

	}

	.logo_link {
		display: block;
	}

	.logo_container {
		float: left;
		display: inline-block;
		position: relative;
	}

	#logo {
		max-height: 100%;
		display: block;
	}


</style>

<div id="header">
	<div class="container">
		<div class="logo_container">
			<a href="<?php echo get_site_url(); ?>" class="logo_link">
				<img src="<?php echo $logo ?>" id="logo">
			</a>
		</div>

		<div class="title_container">
			<span class="title"><?php echo $headerTitle ?></span><br>
			<span class="subtitle"><?php echo $headerSubTitle ?></span>
		</div>
		<div class="paging_container">
			<?php _e('Page','pdfcatalog2'); ?> <span class="page"></span> <?php _e('of','pdfcatalog2'); ?> <span class="topage"></span>
		</div>
	</div>
</div>
<div id="ruler">
	<div class="mark">1</div>
	<div class="mark">2</div>
	<div class="mark">3</div>
	<div class="mark">4</div>
	<div class="mark">5</div>
	<div class="mark">1</div>
	<div class="mark">2</div>
	<div class="mark">3</div>
	<div class="mark">4</div>
	<div class="mark">5</div>
</div>
<div style="clear:left"></div>
</body>
</html>