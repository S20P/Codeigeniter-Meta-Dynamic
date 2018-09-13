
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
             Student application 
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="<?php echo $meta['title'];?>"/>
    <meta name="description" content="<?php echo $meta['description'];?>" />
    <meta property="og:title" content="<?php echo $meta['title'];?>"/>
    <meta property="og:description" content="<?php echo $meta['description'];?>" />
    <meta property="og:url" content="<?php echo base_url().$meta['slug'];?>"/>
    <meta property="og:site_name" content="PHP-Meta-Dynamic"/>
    <meta property="og:type" content="article"/>
    <meta property="og:image" content="<?php echo base_url().$meta['image'];?>"/>
    <meta property="fb:app_id" content="287859101811792" />
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/optimize.css">
 <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>

       </head>
        <body>       
<u>
<li><a href="<?php echo base_url(); ?>home">Home</a></li>
<li><a href="<?php echo base_url(); ?>about">About</a></li>
<li><a href="<?php echo base_url(); ?>contact">Contact</a></li>

</u>

<br />
<br />


<?php 

echo $meta['title'];
echo "<br>";
echo $meta['description'];
echo "<br>";
// echo $meta['slug'];
echo "<br>";
echo "<img src=".$meta['image']." width='400px'>";

?>
  <br>
  <br>
 <button id="metabtn_defaut" class="btn">Share with original og:meta data</button>

            