<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>java tut</title>
	<style type="text/css">
         h1{
			text-align: center;
			color: navy;

		}
		body{
			background-color: cyan;
		}
		#submit{
			background-color: navy;
			color: whitesmoke;
			height: 30px;
			width: 70px;
			border-radius: 40px
		}
		#submit:hover{
			border: 3px solid skyblue;
			background-color: cyan;
			height: 30px;
			width: 70px;
			border-radius: 40px;
			color: black;
		}
		#marsheet{
			color: black;
			background-color: whitesmoke;
		}
		#result{
			color: black;
			background-color: whitesmoke;
		}
	</style>

		<script src="javascriptwrite.js">

</script>
</head>
<body>
	<h1>marksheets</h1>
	<form method="post" action="#" onsubmit=" return marks()">
    <table align="center"  cellspacing="10" id="input">
    	<tr>
    		<td>sindhi</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="sindhi" required>
    		</td>
    	</tr>
    	<tr>
    		<td>urdu</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="urdu" >
    		</td>
    	</tr>
    	<tr>
    		<td>english</td>
    		<td>
    			<input type="text" placeholder="0-100" id="english">
    		</td>
    	</tr>
    	<tr>
    		<td>science</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="science">
    		</td>
    	</tr>
    	<tr>
    		<td>math</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="math">
    		</td>
    	</tr>
    	<tr>
    		<td>arabic</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="arabic">
    		</td>
    	</tr>
    	<tr>
    		<td>drawing</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="drawing">
    		</td>
    	</tr>
    	<tr>
    		<td>socialStudy</td>
    		<td>
    			<input type="text" placeholder="0-100"  id="socialStudy">
    		</td>
    	</tr>
    	<tr>
    		<td>check the result</td>
    		<td>
    			<input type="submit" name="click me" id="submit">
    		</td>
    	</tr>
    	
    </table>
  
    </form>
  <table id="result" align="center">
    	<tr>
    		<td><span id="sindhimsg"><span></td>
    		</tr>
    	<tr>
    		<td><span id="urdumsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="arabicmsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="englishmsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="sciencemsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="mathmsg"><span></td>
    	</tr>
    	<tr>
    		<td ><span id="drawingmsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="socialStudymsg"><span></td>
    	</tr>
    	<tr>
    		<td><span id="totalscoremsg"><span></td>
    	</tr>
      </table>
 </body>
</html>