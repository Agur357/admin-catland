<?php $this->setLayoutVar('title','試作') ?>



<h2>試作</h2>

<table border="1">
	<tr>
	    <th>ID</th>
	    <th>名前2</th>
	    <th>操作</th>
	</tr>
	<?php foreach ($users as $user) { ?>
	<tr>
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['user_name']; ?></td>
		<td>更新 | <a href="<?php echo $base_url; ?>/shisaku/delete/<?php echo $user['id']; ?>">削除</a></td>
	</tr>
    <?php } ?>
</table>