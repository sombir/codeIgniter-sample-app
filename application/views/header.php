<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">  
</head>
<body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CodeIgniter</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if($this->uri->uri_string() == 'home' || $this->uri->uri_string() == ''){echo "class='active'";} ?>><a href="/">Home</a></li>
			<li <?php if($this->uri->uri_string() == 'about-us'){echo "class='active'"; }?>><a href="/about-us">About Us</a></li>
			<li <?php if($this->uri->uri_string() == 'services'){echo "class='active'"; }?>><a href="/services">Services</a></li>
			<li <?php if($this->uri->uri_string() == 'contact-us'){echo "class='active'"; }?>><a href="/contact-us">Contact Us</a></li>			
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (!isset($this->session->userdata['logged_in'])) { ?>
				<li <?php if($this->uri->uri_string() == 'login'){echo "class='active'"; }?>><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<?php } ?>
			<?php if (isset($this->session->userdata['logged_in'])) { 
				$username = ($this->session->userdata['logged_in']['username']);
			?>
			<li <?php if($this->uri->uri_string() == 'admin'){echo "class='active'"; }?>><a href="/admin"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
			<li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			<?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>