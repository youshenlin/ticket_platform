
<p class = "test1"><?php 

echo "<pre >";
echo base_url();

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
