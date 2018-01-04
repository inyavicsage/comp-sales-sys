<?php
	include 'header.php';
	require 'funcs.php';
?>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
		<h2 align="center">RECORDS</h2>
		<table class="table table-bordered">
			<?php if (isset($_GET['msg'])): ?>
				<div align="center" class="alert alert-info" role="alert"><?php echo $_GET['msg']; ?></div>
			<?php endif; ?>
			<div class="clearfix"><a class="btn btn-primary pull-right" href="add.php">ADD</a></div>
			<thead>
				<th>SN</th>
				<th>CUSTOMER'S NAME (CN)</th>
				<th>CUSTOMER'S ADDRESS (CA)</th>
				<th>CUSTOMER'S PHONE NUMBER (CPN)</th>
				<th>ITEM BOUGHT (IB)</th>
				<th>ITEM SOLD (IS)</th>
				<th>UNIT PRICE (UP)</th>
				<th>TOTAL AMOUNT (TA)</th>
				<th>TOTAL EXPENDITURE (TE)</th>
				<th>DATE (D)</th>
				<th>QUANTITY (Q)</th>
			</thead>
			<tbody>
				<?php foreach (get_records() as $SN => $record): ?>
				 	<tr>
				 		<?php foreach ($record as $field): ?>
				 			<td><?php echo $field; ?></td>
				 		<?php endforeach ?>
				 		<td>
				 			<a href="update.php?SN=<?php echo $SN; ?>">UPDATE</a>
				 			<a href="remove.php?SN=<?php echo $SN; ?>">REMOVE</a>
				 		</td>
				 	</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<button class="btn btn-primary pull-right" onclick="myFunction()">PRINT</button>
	</div>
	<div class="col-md-1"></div>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
<?php include 'footer.php'; ?>