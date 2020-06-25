<table border="2" align="center" cellpadding="5" cellspacing="5">
	
	<tr>
	<th> ISBN </th>
	<th> Title </th>
	<th> Author </th>
	<th> Edition </th>
	<th> Publication </th>
	</tr>
	
	<?php while($row = mysql_fetch_assoc($result))
	{
	?>
	<tr>
	<td><?php echo $row["ISBN"];?></td>
	<td><?php echo $row["Title"];?></td>
	<td><?php echo $row["Author"];?></td>
	<td><?php echo $row["Edition"];?></td>
	<td><?php echo $row["Publication"];?></td>
	</tr>
	<?php
	}
	}