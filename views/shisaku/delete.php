<?php $this->setLayoutVar('title','試作') ?>


<h2>試作</h2>

削除しました。
<form method="post" action="delete.php" >
<input type="hidden" name="id" value="<?php echo $user['id']; ?>" />
<input type="submit" name="submit" value="削除" />
</form>

<br>
<a href="<?php echo $base_url; ?>">削除</a>

<br>

<br>

<a href="<?php echo $base_url; ?>/shisaku/list">一覧</a>