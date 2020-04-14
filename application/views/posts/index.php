
<style type="text/css">
.post-date{
	background: #f4f4f4;
	padding:4px;
	margin: 3px 0;
	display: block;
}
.more{
	background: #009988;
	width: 8%; height:30px;
    text-align: center;

}
 .container{
  margin-left: 20px;margin-right: 20px;
  padding:20px;
 }
 .body{
   font-family: ariel;
   text-align: justify;
   word-spacing: 3px;
   line-height: 150%;
 }
</style>

<div class="container">
<h2> <?= $title ?> </h2>
  <?php
  // loop throught the data in the database
   foreach($posts as $post):?>

     <h3> <?php echo $post['title'];?> </h3>
    
     <img src="assets/images/posts/<?php echo $post['post_image'];?> "  style="height: 70px;border-radius:150px;">
  


 
    <div class="post-date"> 
     <small> POSTED ON : <?php echo $post['created_at'] ; ?> in <strong>  <?php //echo $post['name'];?> </small>  </strong>
 
    </div><p>
      <!-- word limiter reduces the amonut of words to a specific size -->
   <?php  echo "<div class ='body'> ". word_limiter($post['body'],40)."</div>" ;?>

     <div class="more"> 
    <p> <a href="<?php echo site_url('/posts/'.$post['slug']);?>" style="color: #ffffff;  text-decoration: none;padding:10px;"> 
     Read More </a></p>
       </div>
   	 

       <?php endforeach ;?>