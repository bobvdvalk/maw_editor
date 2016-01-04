<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mawoo Editor</title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/stylesheet.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ace/ace.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo" />
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url(); ?>">Dashboard</a></li>
                    <li><a href="<?php echo base_url(); ?>editor">Editor</a></li>
                    <li><a href="<?php echo base_url(); ?>">Schedular</a></li>
                    <li><a href="http://mawoo.nl/maw-editor/support" target="_blank">Support</a></li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>