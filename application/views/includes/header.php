<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>CodeIgniter Admin Sample Project</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	    <div class="container">
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/products">Products</a></li>
            <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>><a href="<?php echo base_url(); ?>admin/manufacturers">Manufacturers</a></li>
            <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">System <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>admin/logout">Logout</a>
	            </li>
	          </ul>
	        </li>
          </ul>
        </div><!--/.nav-collapse -->    
            
	    </div>
	</nav>	