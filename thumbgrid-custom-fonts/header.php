<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<style>
		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 100;
			src: local('Roboto Thin'), local('Roboto-Thin'), url(http://themes.googleusercontent.com/static/fonts/roboto/v10/vzIUHo9z-oJ4WgkpPOtg1_esZW2xOQ-xsNqO47m55DA.woff) format('woff');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 300;
			src: local('Roboto Light'), local('Roboto-Light'), url(http://themes.googleusercontent.com/static/fonts/roboto/v10/Hgo13k-tfSpn0qi1SFdUfT8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 400;
			src: local('Roboto Regular'), local('Roboto-Regular'), url(http://themes.googleusercontent.com/static/fonts/roboto/v10/2UX7WLTfW3W8TclTUvlFyQ.woff) format('woff');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 700;
			src: local('Roboto Bold'), local('Roboto-Bold'), url(http://themes.googleusercontent.com/static/fonts/roboto/v10/d-6IYplOFocCacKzxwXSOD8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
		}

		@font-face {
			font-family: 'Roboto';
			font-style: normal;
			font-weight: 900;
			src: local('Roboto Black'), local('Roboto-Black'), url(http://themes.googleusercontent.com/static/fonts/roboto/v10/mnpfi9pxYH-Go5UiibESIj8E0i7KZn-EPnyo3HZu7kw.woff) format('woff');
		}
	</style>
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
		font-family: 'Roboto', 'Arial';
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

	#logo {
		max-height: 100%;
		float: left;
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

</style>


<div id="header">
	<div class="container">
		<img src="<?php echo $logo ?>" id="logo">

		<div class="title_container">
			<span class="title"><?php echo $headerTitle ?></span><br>
			<span class="subtitle"><?php echo $headerSubTitle ?></span>
		</div>
		<div class="paging_container">
			Page <span class="page"></span> of <span class="topage"></span>
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