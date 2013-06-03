<table class="table table-bordered">
<tr>
	<?php 
	foreach ($row as$key => $title) {
		echo '<td>'.$title.'</td>';
		if( $key === 6)
			break;
	}
	?>
	<td></td>
</tr>

<?php 
foreach ($infos as $info) {
?>
<tr>

<?php
	$data = json_decode( $info['row_content']);
	foreach ($data as $key => $d) {
		if( $key === 7)
			break;
?>
<td><?php echo $d;?></td>
<?php
	}
?>
</tr>
<?php
}
?>
</table>