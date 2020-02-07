<!DOCTYPE html>
<html>
<head>
	<title>test1</title>
</head>
<body>
<link rel="stylesheet" href="<?php echo base_url();?>css/test1.css" />
<p class = "test1"><?php 

echo "<pre >";

?></p>
<?php foreach ($a as $datas): ?>
    <?php foreach ($datas as $key => $data): ?>
        <?= $key;?>
        <?= $data;?>

        <br />
    <?php endforeach;?>
<?php endforeach;?>
</body>
</html>
