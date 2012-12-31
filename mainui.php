<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<title>Customer</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>แสดงข้อมูล Customer</h1>

	<div id="body">
		<?php echo anchor("customerctrl/add","เพิ่มข้อมูล");?>
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Username</th>
					<th>Password</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>E-Mail</th>
					<th>Location</th>
					<th>City</th>
					<th>Postnumber</th>
					<th>Telephone</th>
					<th>Config</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(count($rs)==0)
					{
						echo "<tr><td colspan='11' aling='center'>--no data--</td></tr>";
					}
					else
					{
						foreach ($rs as $r) {
							echo "<tr>";
							echo "<td aling='center'>$r[id]</td>";
							echo "<td>$r[username]</td>";
							echo "<td>$r[password]</td>";
							echo "<td>$r[firstname]</td>";
							echo "<td>$r[lastname]</td>";
							echo "<td>$r[email]</td>";
							echo "<td>$r[location]</td>";
							echo "<td>$r[city]</td>";
							echo "<td>$r[postnumber]</td>";
							echo "<td>$r[telephone]</td>";
							echo "<td aling='center'>";
							echo anchor("customerctrl/edit/".$r['id'],"แก้ไข")."&nbsp";
							echo anchor("customerctrl/del/".$r['id'],"ลบ",array("onclick"=>"javascript:return confirm('คุณต้องการลบหรือไม่ ?');"));
							echo "</td>";
							echo "</tr>";
						}
					}
				?>
			</tbody>
		</table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
