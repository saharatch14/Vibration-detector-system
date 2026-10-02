<!DOCTYPE html>
<!-- saved from url=(0046)https://semantic-ui.com/examples/attached.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  <title> Vibration detected </title>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>

  <link rel="icon" href="https://img.icons8.com/ios/100/000000/earthquakes.png">

  <style type="text/css">
  h2 {
    margin: 2em 0em;
  }
  .ui.container {
    padding-top: 1em;
    padding-bottom: 1em;
  }
  .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100px;
}
  </style>
         <script type= text/javascript src ="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function() {
				$('#show').load('data.php')
			}, 1000);
		});
	</script>

</head>
<body>

<div class="ui container">
  <div class="ui section divider"></div>
  <img class="center" src="https://img.icons8.com/ios/100/000000/earthquakes.png">
  <h2 align="center" class="ui header">Vibration detected</h2>

  <table class="ui bottom attached table">
  <div class="ui section divider"></div>
  <h4 class="ui top attached block header">
    Vibration status
  </h4>
                <thead>
                <tr>
                        <td width ="557"> <div align="Center">Status</div></td>
                        <td width ="558"> <div align="Center">Time</div></td>
                </tr>
        </thead>
    <tbody id="show" align="Center">

    </tbody>
  </table>
</div>

<!--<a href="https://icons8.com/icon/69629/falling-man-filled">Falling Man Filled icon by Icons8</a>-->

</body></html>
                          
