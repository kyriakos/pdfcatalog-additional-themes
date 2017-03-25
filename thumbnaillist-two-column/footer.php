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

	#footer {
		margin-top: 10px;
		height: 120px;
		padding-bottom: 10px;
		background: <?php echo $footerBackgroundColor ?>;
	<?php  if ($showLines) { ?> border-top: 1px solid <?php echo $lineColor ?>;
	<?php  } ?>
	}

	.container {
		position: relative;
	}

	.container > div {
		position: relative;
	}

	.paging_container {
		text-align: right;
		padding-top: 110px;
	}


</style>


<div id="footer">
	<div class="container">
		<div class="paging_container">
			Page <span class="page"></span> of <span class="topage"></span>
		</div>

	</div>
</div>

</body>
</html>