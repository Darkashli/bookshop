<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style type="text/css" media="screen">
    ::selection { background-color: #E13300; color: yellow; }
	::-moz-selection { background-color: #E13300; color: white; }
	body {
		background-color: skyblue;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

    h1{
    	font-size: 24px;
    	text-align: center;
    	font-family:fantasy;
      }

	p{
		font-family:fantasy;
		text-align: center;
		font-size: 20px;
		padding-top: 30px;
	}

    	
    </style>
	<title>Test</title>
</head>
<body>
  

  <div id="container">
	<h1>This is the first Test for CodeIgniter View!</h1>

	<div id="body">
		<p>When it comes to odd jobs, Anuar Abdullah's might top the list. The Malaysian artist and coral conservationist has spent the past few months diving off the coast of Brunei, sketching the skeletons of sunken ships.</p>

		<p>Last year, Brunei-based Poni Divers hired Abdullah to immortalize the sultanate's eerie collection of more than 30 shipwrecks.</p>

		<p>From the 1942 Australian Wreck -- a Dutch steamer sunk by a Japanese mine -- to the 1945 American Wreck, a victim of World War II, each provides a unique diving experience.</p>

		<p>"Southeast Asia is really the diving capital of the world -- (people) fly all over the world to dive in the Philippines, Malaysia, and Indonesia," Thye Sing Wong, founder of Poni Divers, tells CNN.</p>
   </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>