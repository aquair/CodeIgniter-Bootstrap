<?
/**
 * This is a bootstrapped table, you should pass along the following
 * array to this view to render it properly.
 *
 * $table = array(
 * 	'header' => 'My table',
 * 	'data' =>
 * 		array(
 *			array(
 * 				'table header' => 'value',
 * 				'table header2' => 'value2'
 * 			),
 * 			array(
 * 				'style:class' => 'warning',
 * 				'table header' => 'value3',
 * 				'table header2' => 'value4',
 * 				'table header3' => 'value5'
 * 			)
 *		)
 * 	)
 * 
 * Will produce:
 * 
 * My table
 * +--------------+---------------+---------------+
 * | table header | table header2 | table header3 |
 * +--------------+---------------+---------------+
 * | value        | value2        |               |
 * | value3       | value4        | value 5       | // Red TD
 * +--------------+---------------+---------------+
 */
if(isset($table)):
$keys=array();
foreach($table['data'] as $row)
	foreach($row as $key => $val)
		if(!in_array($key, $keys))
			if($key != 'style:class')
				$keys[] = $key;
?>

<?if(isset($table['header'])):?><h3><?=$table['header']?></h3><?endif?>

<table class="table table-bordered table-striped table-hover table-condensed tablesorter">
	<thead>
		<tr>
		<?foreach($keys as $key):?>
			<th><?=$key?></th>
		<?endforeach?>
		</tr>
	</thead>
	<tbody>
		<?foreach($table['data'] as $row):?>
		<tr <?if(isset($row['style:class'])){?> class="<?=$row['style:class']?>"<?}?>>
		<?foreach($keys as $key):?>
			<td><?if(isset($row[$key])){echo $row[$key];}?></td>
		<?endforeach?>
		</tr>
		<?endforeach?>
	</tbody>
</table>
<?if(!isset($table['tablesorter']) || (isset($table['tablesorter']) && $table['tablesorter'] == true)):?>
<script>
$(document).ready(function() 
{ 
    $(".tablesorter").tablesorter({sortList: [[0,0]]}); 
}); 
</script>
<?endif?>

<?endif?>