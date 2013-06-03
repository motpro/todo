<div class="alert alert-info">编辑课程 <?php echo $course[0]['fullname']?></div>

<form class="form_hori" name="_course_edit" action="" method="">
<table class="table table-bordered">
<tr>
	<td width="20%">课程名称</td> 
	<td width="80%"><input name="fullname" type="text" value="<?php echo $course[0]['fullname']?>" /> </td>
</tr>

<tr>
	<td>内容</td>
	<td><textarea class="span12"><?php echo $course[0]['summary']?></textarea></td>
</tr>

<tr>
	<td>是否免费</td>
	<td>
		<label class="radio">
			<input name="is_free" type="radio" value="1" <?php if( $course[0]['is_free']){?> checked="checked"<?php }?>>是
		</label>
		<label class="radio">
			<input name="is_free" type="radio" value="0" <?php if( !$course[0]['is_free']){?> checked="checked"<?php }?>>否
		</label>

	</td>
</tr>

<tr>
	<td>是否公开</td>
	<td>
		<label class="radio">
			<input name="is_hidden" type="radio" value="1" <?php if( !$course[0]['is_hidden']){?> checked="checked"<?php }?>>是
		</label>
		<label class="radio">
			<input name="is_hidden" type="radio" value="0" <?php if( $course[0]['is_hidden']){?> checked="checked"<?php }?>>否
		</label>
	</td>
</tr>

<tr><td>分类</td>
	<td>
		<select name="category_id">
			<?php foreach ($category as $item) {?>
			<option value="<?php echo $item['id']?>" <?php if( $course[0]['category_id'] == $item['id']){?> selected="selected"<?php }?>><?php echo $item['category']?></option>
			<?php }?>
		</select>
	</td>
</tr>

<tr>
	<td>封面</td>
	<td>
		<input type="file" name="logo" />
	</td>
</tr>

<tr>
	<td>更新</td>
	<td>
		<input class="btn" type="submit" name="done" value="更新" />
	</td>
</tr>

</table>
</form>


<div class="alert alert-info">编辑本节的章节(页面)</div>

<table class="table table-bordered">
<tr>
	<td>封面</td> <td>标题</td> <td>视频文件</td> <td>路径</td> <td>字幕1</td> <td>字幕2</td>  <td>操作</td>
</tr>
<tr>
	<td><input class="input-small" name="image_file" type="file" /></td>
	<td><input class="span12" type="text" value="" /> </td>
	<td><input class="span12" type="text" value="" /></td>
	<td><input class="span12" type="text" value="" /></td>
	<td><input class="span12" type="text" value="" /></td>
	<td><input class="span12" type="text" value="" /></td>
	<td><input class="btn btn-small span12" type="submit" /></td>
</tr>
<?php global $constant;?>
<?php foreach ($pages as $page) {
?>
<tr>
	<td><img class="img-polaroid" width="100px" src="<?php echo $constant['discuz_url'] . 'page/' .$page['image_file']?>" /></td>
	<td><input class="span12" type="text" value="<?php echo $page['title'] ?>" /> </td>
	<td><input class="span12" type="text" value="<?php echo $page['v_file']?>" /></td>
	<td><input class="span12" type="text" value="<?php echo $page['v_path']?>" /></td>
	<td><input class="span12" type="text" value="<?php echo $page['label_a_file']?>" /></td>
	<td><input class="span12" type="text" value="<?php echo $page['label_b_file']?>" /></td>
	
	<td>
		<a class="btn btn-small" href="#">修改</a>
		<a class="btn btn-small" href="#">删除</a>
	</td>
</tr>
<?php
}
?>
</table>

















