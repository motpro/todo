<div class="container-fluid">
<div class="row-fluid">
<?php
global $constant;
$f = 0;
foreach ($list as $course) {
?>
	
<div class="span4">
    <a class="pull-left" href="<?php echo base_url()?>index.php/course/edit_course/<?php echo $course['id']?>">
        <img class="media-object" src="<?php echo $constant['discuz_url']?>course/<?php echo $course['logo']?>">
    </a>
    <div class="media-body">
     <h5 class="media-heading text-center"><?php echo $course['fullname']?></h5>
     <p class="text-center"><strong>类别</strong> <?php echo $course['category']?></p>
     <p class="text-center"><strong>
        <?php echo $course['is_free'] ? '<span class="text-error">免费</span>' : '<span class="text-success">收费</span>'?> 
        <?php echo $course['is_hidden'] ? '<span class="muted">隐藏</span>' : '<span class="text-success">可见</span>'?>
    </strong>
    </p>
     <p class="text-center"><small><a href="<?php echo base_url()?>index.php/course/edit_course/<?php echo $course['id']?>">编辑</a></small></p>
    </div>
</div>
<?php
	++$f;
	if( !($f % 3)){
		echo '</div></div><br /><div class="container-fluid"><div class="row-fluid">';
	}
}
?>
</div>
</div>