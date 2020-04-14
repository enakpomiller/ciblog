
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
.delete-btn{
	padding:10px;
	width: 10%;
	background: #ff0000;
	color: #ffffff;
	border: 0px solid red;
	border-radius: 3px;
	font-weight: bolder;
}
.container{
	margin-left: 10px;
}
.edit{
	padding:10px;
	width: 10%;
	border: 1px solid #009988; 
	color: #009988;
	border-radius: 4px;
	font-weight: bolder;
	text-decoration: none;

}
</style>

<div class="container">
<h2><?php echo $post['title'] ;?> </h2>

    <div class="post-date"> 
     <small> POSTED ON : <?php echo $post['created_at'] ; ?></small> 
 
    </div><p>

<?php echo $post['body'] ;?>


<hr>


<!-- create a delete button -->
<?php echo form_open('posts/delete/'.$post['id']);?>

<input type="submit" value=" DELETE POST" class="delete-btn" onclick="return confirm(' delete <?php echo $post['title'];?> post');">

 <a href="<?php echo base_url();?>posts/edit/<?php  echo $post['slug'];?>" class="edit"> EDIT POST </a>
</form>

</div>


