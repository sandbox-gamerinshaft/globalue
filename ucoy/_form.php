<script type="text/javascript">
	function onChange(Obj) {
		index_nub = Obj.selectedIndex; // 選択された項目番号を取得する
		O_value = Obj.options[Obj.selectedIndex].value; // 選択された項目の値を取得する

		$("#textarea").remove();
		var appends = '';
		if (O_value === "jisen") {
			appends += '<div id="textarea">';
			appends += '<p>自己推薦文<br>';
			appends += '<textarea name="suisenbun" cols="50" rows="10"></textarea>';
			appends += '</div>';
		} else {
			appends += '<div id="textarea">';
			appends += '<p>活動実績<br>';
			appends += '<textarea name="jisseki" cols="50" rows="10"></textarea>';
			appends += '</div>';
		}
		$("#textarea_wrapper").append(appends);
	}
	;
</script>
<form method="post" action="send.php">

	<p>氏名<br>
		<input type="text" name="shimei"></p>

	<p>大学・学部・学科<br>
		<input type="text" name="shozoku" size="50"></p>

	<p>学年<br>
		<input type="text" name="gakunen" size="1" maxlength="1">年</p>

	<p>連絡先(TEL)<br>
		<input type="text" name="tel" size="50" value=""></p>

	<p>連絡先(E-mail)<br>
		<input type="text" name="email" size="50" value=""></p>

	<p>SNSアカウント(facebook等)<br>
		<input type="text" name="sns" size="50" value=""></p>

	<p>自薦・他薦<br>
		<select name="suisen" onchange="onChange(this)">
			<option value="jisen" selected>自薦</option>
			<option value="tasen">他薦</option>
		</select></p>

	<div id="textarea_wrapper">
		<div id="textarea">
			<p>自己推薦文<br><textarea name="suisenbun" cols="50" rows="10"></textarea>
		</div>
	</div>
	<p><input type="submit" value="送信する"></p>
	<div></div>
</form>
