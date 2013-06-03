<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <?php global $constant;?>
    <title>
        CRM - <?php if( $this->uri->segment(1)) echo $constant[$this->uri->segment(1)]?>
        <?php if( $this->uri->segment(2)) echo ' - '.$constant[$this->uri->segment(2)]?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>public/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body style="margin-top:40px;">
<div class="container">
 
<div class="navbar">
    <div class="navbar-inner navbar-fixed-top">
        <a class="brand" href="#">admininstrator control-panel</a>
        <ul class="nav">
            <li class="active"><a href="<?php echo base_url();?>">首页</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
</div>


<div class="container-fluid">
    <h4>
        
    </h4>
    <ul class="breadcrumb">
        <li><a href="<?php echo base_url()?>">首页</a></li>
        <?php if( $this->uri->segment(1)){?><li> <span class="divider">/</span><a href="<?php echo base_url() . 'index.php/' .$this->uri->segment(1);?>"><?php echo $constant[$this->uri->segment(1)];?></a> </li><?php }?>
        <?php if( $this->uri->segment(2)){?><li class="active"><span class="divider">/</span> <?php echo $constant[$this->uri->segment(2)];?></li><?php }?>
    </ul>

    <div class="row-fluid">
        <div class="span2">
            <ul id="navbar" class="nav nav-pills nav-stacked">
                <li <?php if( 'client' === $this->uri->segment(1)){?>class="active"<?php }?>>
                    <a href="<?php echo base_url();?>index.php/client"><i class="icon-chevron-right pull-right"></i>客户</a>
                </li>
                <li <?php if( 'course' === $this->uri->segment(1)){?>class="active"<?php }?>>
                    <a href="<?php echo base_url();?>index.php/course"><i class="icon-chevron-right pull-right"></i>课程</a>
                </li>
                <li <?php if( 'review' === $this->uri->segment(1)){?>class="active"<?php }?>>
                    <a href="<?php echo base_url();?>index.php/review"><i class="icon-chevron-right pull-right"></i>审核</a>
                </li>
                <li <?php if( 'statistic' === $this->uri->segment(1)){?>class="active"<?php }?>>
                    <a href="<?php echo base_url();?>index.php/statistic"><i class="icon-chevron-right pull-right"></i>统计</a>
                </li>
                <li <?php if( 'bugtrack' === $this->uri->segment(1)){?>class="active"<?php }?>>
                    <a href="<?php echo base_url();?>index.php/bugtrack"><i class="icon-chevron-right pull-right"></i>Bug</a>
                </li>
            </ul>
        </div>

        <div class="span10">
            <?php if( 'client' === $this->uri->segment(1)){?>
                <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">导入数据
                    <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/client/excel">Excel格式</a></li>
                            <li><a href="<?php echo base_url();?>index.php/client/csv">CSV格式</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">客户资料
                        <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/client/excel">资料列表</a></li>
                            <li><a href="<?php echo base_url();?>index.php/client/csv">添加用户</a></li>
                            <li><a href="<?php echo base_url();?>index.php/client/csv">编辑用户</a></li>
                        </ul>                        
                    </li>


                    <li><a href="#">企业资料</a>
                    </li>
                    


                    <li><a href="#">订单管理</a></li>
                </ul>

            <?php }else if( 'course' === $this->uri->segment(1)) {?>
                <div class="page-header">
                <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">课程编辑
                    <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/course/add_course">添加</a></li>
                            <li><a>编辑</a></li>
                            <li><a>删除</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">分类管理
                        <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>index.php/course/add_category">添加分类</a></li>
                            <li><a href="<?php echo base_url();?>index.php/course/edit_category">编辑分类</a></li>
                    </li>

                </ul>
                </div>

            <?php }else if ( 'review' === $this->uri->segment(1)) {?>
                <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">New File
                    <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                        <!-- links -->
                        </ul>
                    </li>
                </ul>
                
            <?php }else if ( 'statistic' === $this->uri->segment(1)) {?>
                <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">New File
                    <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                        <!-- links -->
                        </ul>
                    </li>
                </ul>
                
            <?php }else if ( 'bugtrack' === $this->uri->segment(1)) {?>
                <ul class="nav nav-pills">
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">New File
                    <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                        <!-- links -->
                        </ul>
                    </li>
                </ul>
                
            <?php }else { ?>
                No content
            <?php } ?>

            <?php echo $content;?>
        </div>
    </div>
</div>
</div>


<div class="container">
    <hr />
    <div class="row-fluid">
        <div class="span2 text-center"><h1>C</h1><h1>R</h1><h1>M</h1></div>

        <div class="span2">
            <h5>Developer
            <small>
            <ul class="unstyled">
                <li><a href="#">mot</a></li>
            </ul>
             </small>
            </h5>
        </div>

        <div class="span2">
            <h5>Render Time
            <small>
            <ul class="unstyled">
                <li><a href="#"><?php echo $this->benchmark->elapsed_time();?> m</a></li>
            </ul>
            </small>
            </h5>
        </div>

        <div class="span2">
            <h5>Memory Used
            <small>
            <ul class="unstyled">
                <li><a href="#"><?php echo $this->benchmark->memory_usage();?></a></li>
            </ul>
             </small>
            </h5>
        </div>

        <div class="span2">
            <h5>Third Libraries
            <small>
            <ul class="unstyled">
                <li><a href="#">Layout</a></li>
            </ul>
             </small>
            </h5>
        </div>

        <div class="span2">
            <h5>资料信息
            <small>
            <ul class="unstyled">
                <li><a href="#">Our Mission</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Team</a></li>
                <li><a href="#">Our Interns</a></li>
                <li><a href="#">Our Supporters</a></li>
                <li><a href="#">Discovery Lab</a></li>
                <li><a href="#">MCAT Video Competition</a></li>
            </ul>
             </small>
            </h5>
        </div>

    </div>

    <hr />
    <ul class="text-right inline">
        <li><small><a href="#"><i class="icon-info-sign"></i> FAQ</a></small></li>
    </ul>

    <h5><small>© 2013 36Lean CRM</small></h5>
    <h5><small> All rights reserved.</small></h5>
</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/bootstrap/js/bootstrap.js"></script>
</body>
</html>
