<?php

//fetch.php

include('../php/database.php');

$results = mysqli_query($con, 'SELECT * from article');


$output = '
<table class="table table-striped table-bordered">
	<tr>
		<th>Id</th>
        <th>Date</th>
        <th>Title</th>
        <th>Content</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if(mysqli_num_rows($results) > 0)
{
	while ($row = mysqli_fetch_assoc($results))
	{
		$output .= '
		<tr>
            <td width="5%">'.$row["Id"].'</td>
            <td width="10%">'.$row["Date"].'</td>
            <td width="20%">'.$row["Title"].'</td>
            <td width="45%">'.$row["Content"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["Id"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["Id"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>