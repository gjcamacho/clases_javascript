<?php
$arreglo=array("Oswald", "Michel", "Javier", "Nohelya", "Edgar", "Rafa");
?>


<table>
<?php
foreach($arreglo as $student){
?>
	<tr>
		<td>
			<?php echo $student;?>
		</td>
	</tr>
<?php
}
?>
</table>