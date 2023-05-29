<?php $this->setLayoutVar('title','試作') ?>

<h2>管理者ページ</h2>

<form action="<?php echo $base_url; ?>/admin/signup" method="post">

<table>
		<tbody>
			<tr>
				<th>ユーザID</th>
				<td>
					<input type="text" name="name" value="" />
				</td>
			</tr>
			<tr>
				<th>パスワード</th>
				<td>
					<input type="password" name="password" value="" />
				</td>
			</tr>
		</tbody>
	</table>

	<p>
		<input type="submit" value="登録">
	</p>
</form>
