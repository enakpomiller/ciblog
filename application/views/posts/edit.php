
<style type="text/css">
	
	.txt{
		padding:10px;
	   width: 77%; 
	   margin: 10px;
	  border-radius: 0px;


	}
	.btn{
		padding:15px;
		margin: 10px;
		background:#009988;
		width:10%;
		border: 0px solid red;
		border-radius: 5px;
		color: #ffffff;
		letter-spacing: 5px;
		font-weight: bolder;
	}
	  .container{
	  margin-left: 10px; margin-right: 10px;
	  }
</style>

    
   <h2 style="text-transform: uppercase;">  &nbsp  <?php echo $title ;?> </h2> 
    <div style="color:#ff0000;margin-left: 20px;">

   <!-- This script is HTML text editor -->
    <script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> 

   <?php
   //  form validation
   echo " <br> ".validation_errors();

   ?>

   </div>

  

   <?php echo form_open('posts/update');?> <!-- this is the form action -->
<!--input type of update-- id will be hidden  -->

<input type="hidden" name="id" value="<?php echo $post['id'];?>">
<div class="container">
    &nbsp <label>  News Title </label> <br>
<input type="text" class="txt" name="title" value="<?php echo $post['title'];?>">

  <br>
  &nbsp  <label> News Contents </label> <br> 
    
 <textarea name="body" class="txt" id="long_desc" rows="2" cols="20"><?php echo $post['body'];?> </textarea>
   
 <br>  

   <!--
  <select name ="category_id" class="txt" >

     <?php //foreach($cartegories as $cartegory):?>
<option value="<?php //echo $cartegory['id'];?>">
 <?php //echo $cartegory['name'] ;?>
    </option>
        <?php //endforeach ;?>
  	 </select>

  	    --->
<br>
  <button type="submit" class="btn">  SUBMIT </button>
   </div>

    </form>


  &nbsp <script type="text/javascript">

// Initialize CKEditor
//CKEDITOR.inline( 'short_desc' );

CKEDITOR.replace('long_desc',{

  width: "80%",
  height: "100px"

}); 

</script>