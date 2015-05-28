<!DOCTYPE html>
<html>
  <head>
    <title>Group Meeting Time Selection</title>
    <!-- Bootstrap -->
	<!--[if IE]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<style>
		#calendar{
			width:1000px;
			margin:20px auto;
		}
		table{
			width:100%;
			margin:20px 0;
			text-align:center;
		}
		td{
			border:1px solid #eee;
			padding:10px;
		}
		td:first-child{
			background-color:#eee;
			border-width:0;
			border-bottom:1px solid white;
		}
		td:not(:first-child){
			cursor:pointer;
		}
		td:not(:first-child):hover{
			background-color:rgb(228, 255, 228);
		}
		th{
			background-color:#777;
			color:white;
			padding:10px;
		}
		th:not(:first-child){
			width:15%;
		}
		.selected{
			background-color:rgb(168, 253, 168) !important;
			border-color:white;
		}
		input[type='text'],input[type='email']{
			color:#aaa;
			font-style:italic;
		}
		input[type='submit']{	
		    padding:10px 20px;
		    background-color:rgb(42, 122, 189);
		    color:white;
		    border:0;
		    font-size:1.2em;
		    font-weight:200;
		}
		input[type='submit']:hover{
			background-color:rgb(67, 153, 224);
		}
	</style>
  </head>
  <body>
	<form id="calendar" method="POST" action="meeting.php">
    	<h2>Group Meeting</h2>
		<div>Summer weekly group meeting</div>
		<table>
			<tr>
				<th>Time</th>
				<th>Monday</th>
				<th>Tuesday</th>
				<th>Wednesday</th>
				<th>Thursday</th>
				<th>Friday</th>
			</tr>
			<tr>
				<td>08:00am - 09:00am</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>09:00am - 10:00am</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>10:00am - 11:00am</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>11:00am - 12:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>12:00pm - 01:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>01:00pm - 02:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>02:00pm - 03:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>03:00pm - 04:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>04:00pm - 05:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td>05:00pm - 06:00pm</td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>
		<input type="hidden" value="0" name="selected">
		<input type="text" value="Enter your name" name="uname">
		<input type="email" value="Enter your email (optional)" name="email"><br/>
		<input type="submit" value="Submit">
	</form>
    <!--<script src="http://code.jquery.com/jquery-latest.js"></script>-->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('td:not(:first-child)').click(function(){
			if($(this).hasClass('selected')){
				$(this).removeClass('selected');
			}else{
				$(this).addClass('selected');
			}
		});
		
		$('input[type="text"],input[type="email"]').focusin(function(){
			if($(this).val()=='Enter your name' && $(this).attr('type')=='text'){
				$(this).val('');
			}
			if($(this).val()=='Enter your email (optional)' && $(this).attr('type')=='email'){
				$(this).val('');
			}
			$(this).css({'color':'black','font-style':'normal'});
		}).focusout(function(){
			if($(this).val()=='' && $(this).attr('type')=='text'){
				$(this).val('Enter your name');
				$(this).css({'color':'#aaa','font-style':'italic'});
			}
			if($(this).val()=='' && $(this).attr('type')=='email'){
				$(this).val('Enter your email (optional)');
				$(this).css({'color':'#aaa','font-style':'italic'});
			}
		})
	})
	</script>
  </body>
</html>