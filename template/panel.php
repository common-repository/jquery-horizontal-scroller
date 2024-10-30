<style>

.addwindow {
	
	position:relative:
	border: 2px;
	display: none;
	
}
.scrolleritemfull<?php echo $id; ?> {
	
	margin: 10px;
	padding: 10px;
	border: 2px solid #555;
	<?php
	if($_POST['id']!=$id) {
		echo 'display: none;';
	}
	?>
	
}


.scrollerdelete<?php echo $id; ?>{
	
	
	display: none;
	
}
.edititem {
	
	position:relative:
	border: 2px;
	display: none;
	margin: 8px;
	line-height:250%;
	padding: 8px;
	background-color:#CCC;
	
}
</style>
    <script type="text/javascript">

        jQuery(document).ready( function () { 
		
		
		var uploadID<?php echo $id; ?> = ''; /*setup the var in a global scope*/

jQuery('.upload-button<?php echo $id; ?>').click(function() {
	
	

//uploadID = jQuery(this).prev('input');
uploadID<?php echo $id; ?> = jQuery(this).prev('input');


window.send_to_editor = function(html) {
	

imgurl = jQuery('img',html).attr('src');

uploadID<?php echo $id; ?>.val(imgurl)
tb_remove();
}


tb_show('', 'media-upload.php?type=image&amp;amp;amp;amp;TB_iframe=true&uploadID<?php echo $id; ?>=' + uploadID<?php echo $id; ?>);

return false;
});



		
		
          
	jQuery('.editscroller<?php echo $id; ?>').click(function() {
		
		
	if(jQuery('.scrolleritemfull<?php echo $id; ?>').css("display")=="none") jQuery('.scrolleritemfull<?php echo $id; ?>').show();
	else jQuery('.scrolleritemfull<?php echo $id; ?>').css("display", "none")
	
	
	
	return false;
	
	
})
	

	jQuery('.deletebuton<?php echo $id; ?>').click(function() {
		
		
		
			if(jQuery('.scrollerdelete<?php echo $id; ?>').css("display")=="none") jQuery('.scrollerdelete<?php echo $id; ?>').show();
	else jQuery('.scrollerdelete<?php echo $id; ?>').css("display", "none")
		

	
	
	
	return false;
	
	
})	
		 
	jQuery('.additem').click(function() {
		
		
		
	//jQuery('.widget-wp_scrollerpro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('1');
	jQuery('.addwindow').show();
	
	
	
	return false;
	
	
})

	jQuery('.deleteitem').click(function() {
		
		
		
	//jQuery('.widget-wp_scrollerpro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('2');
	jQuery('.addwindow').show();
	
	
	
	return false;
	
	
})

	jQuery('.cancel').click(function() {
		
		
		
	//jQuery('.widget-wp_scrollerpro-__i__-savewidget').trigger('click');
	jQuery('input[name=operation]').val('0');
	jQuery('.addwindow').hide();
	
	
	
	return false;
	
	
})

jQuery('.<?php echo $id; ?>editbutton').click(function() {
		
		
		
	//jQuery('.widget-wp_scrollerpro-__i__-savewidget').trigger('click');
	

	if(jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).css("display")=="none") { 
		
		jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).show()
		jQuery(this).text("-")
	}
	else { 
		jQuery(this).text('+')
		jQuery('#<?php echo $id; ?>edit'+jQuery(this).attr("rel")).css("display", "none")
	}
	return false;
	
	
})

		  
        });

    </script>


	  <legend>SCROLLER <?php echo $title; ?>. Write: <strong>[scroller <?php echo $id; ?> /]</strong> in your post/pages. <button class="editscroller<?php echo $id; ?>">EDIT</button></legend> 



<div class="scrolleritemfull<?php echo $id; ?>"> 
	<form method="post" action="">
		<fieldset>
<label >Title: </label><input id="stitle<?php echo $id; ?>" name="stitle<?php echo $id; ?>" type="text" value="<?php echo $title; ?>" />
              <hr />
             
              <input name="operation" type="hidden" id="operation" value="0" />
               <input name="itemselect<?php echo $id; ?>" type="hidden" id="itemselect<?php echo $id; ?>" value="" />
<h2>ITEMS:</h2>               
            <button class="additem">Add Item</button> <button class="deleteitem">Delete Items</button> <input type='submit' name='' value='Save' />
            <div class="addwindow">
             <hr />
           <input type='submit' name='' value='OK' /><button class="cancel">Cancel</button>
            
            </div>
             <hr />
            <ul>
            <?php
			
			// items
			$cont=0;
			if($values!="") {
				$items=explode("kh6gfd57hgg", $values);
				$cont=1;
				foreach ($items as &$value) {
					if(count($items)>$cont) {
					$item=explode("t6r4nd", $value);
					
					 
					 echo '<li><input name="item'.$cont.'" type="checkbox" value="hide" /><img src="'.$item[2].'" width="60px"/><input name="title'.$cont.'" type="text" value="'.$item[0].'" /><button class="'.$id.'editbutton" rel="'.$cont.'">+</button>
					 
					 <div id="'.$id.'edit'.$cont.'" class="edititem">
					 Url image:<br/>
					 <input type="text" name="image'.$cont.'" value="'.$item[2].'" class="upload'.$id.'" size="70"/>
					 <input class="upload-button'.$id.'" name="wsl-image-add" type="button" value="Change Image" /><br/>
					 Active: <input name="video'.$cont.'" type="checkbox" id="video'.$cont.'" value="1"';
					 
					 if($item[4]=="1") echo 'checked="checked"';
					 
					 echo ' /><br/>
					 URL LINK: <input name="link'.$cont.'" type="text" value="'.$item[3].'" size="70" /><br/>
					 SEO Alt image tag: <input name="seo'.$cont.'" type="text" value="'.$item[6].'" size="70" /><br/>
					 SEO Title link tag: <input name="seol'.$cont.'" type="text" value="'.$item[7].'" size="70" /><br/>
					 ORDER: <input name="order'.$cont.'" type="text" value="'.$cont.'" size="4"/><br/>
					  <hr />
					  <input type=\'submit\' name=\'\' value=\'Save\' />
					 </div>
					 </li>';
					 $cont++;
					}
					 
				}
			}
			 $cont--;
			echo '</ul><input class="widefat" name="total" type="hidden" id="total" value="'.$cont.'" />';
			?>
 
            <hr />
<h2>CONFIGURATION:</h2>            


              

<h3>PLUGIN</h3>
           <label>Plugin width: </label> <input type='text' id='width<?php echo $id; ?>'  name='width<?php echo $id; ?>'  value='<?php echo $width; ?>' size="6"/>
            
       		<label>Plugin height: </label> <input type='text' id='height<?php echo $id; ?>'  name='height<?php echo $id; ?>'  value='<?php echo $height; ?>' size="6"/>
            <label>Plugin border: </label> <input type='text' id='border<?php echo $id; ?>'  name='border<?php echo $id; ?>'  value='<?php echo $border; ?>' size="6"/>
            <label>Plugin round: </label> 
            
            
             <select name="round<?php echo $id; ?>" id="round<?php echo $id; ?>">
                <option value="hide" <?php if($round=='hide') echo ' selected="selected"'; ?>>Show</option>
                <option value="checked" <?php if($round!='hide') echo ' selected="selected"'; ?>>Hide</option>
              </select>
               <label>Link target: </label> <input type='text' id='twidth<?php echo $id; ?>'  name='twidth<?php echo $id; ?>'  value='<?php echo $twidth; ?>' size="12"/>
            <br/>  
<h3>IMAGES</h3>

            <label>Images height: </label> <input type='text' id='theight<?php echo $id; ?>'  name='theight<?php echo $id; ?>'  value='<?php echo $theight; ?>' size="6"/>
            
             <label>Images border: </label> <input type='text' id='tborder<?php echo $id; ?>'  name='tborder<?php echo $id; ?>'  value='<?php echo $tborder; ?>' size="6"/>
             
             
            <label>Images round: </label> 
            
             <select name="thumbnail_round<?php echo $id; ?>" id="thumbnail_round<?php echo $id; ?>">
                <option value="hide" <?php if($thumbnail_round=='hide') echo ' selected="selected"'; ?>>Show</option>
                <option value="checked" <?php if($thumbnail_round!='hide') echo ' selected="selected"'; ?>>Hide</option>
              </select>
            
            
            <br/>  
            
            
<h3>COLORS</h3>
            

           
            
            <label>Background color: </label> <input type='text' id='color1<?php echo $id; ?>'  name='color1<?php echo $id; ?>'  value='<?php echo $color1; ?>'/>
            <label>Plugin border color: </label> <input type='text' id='color3<?php echo $id; ?>'  name='color3<?php echo $id; ?>'  value='<?php echo $color3; ?>'/>
            <label>Images border color: </label> <input type='text' id='color2<?php echo $id; ?>'  name='color2<?php echo $id; ?>'  value='<?php echo $color2; ?>'/>
            

            
            
      <br/>  <br/>      

<input name="id" type="hidden" id="id" value="<?php echo $id; ?>" /></td>
	<input type='submit' name='' value='SAVE scroller' />
		 
      </fieldset>
	</form>		 <br/>
    <hr />
  <form method="post" action="">
	  <input name="borrar" type="hidden" id="borrar" value="<?php echo $id; ?>">
      <button class="deletebuton<?php echo $id; ?>">Delete scroller</button>
      <div class="scrollerdelete<?php echo $id; ?>">
      <button class="deletebuton<?php echo $id; ?>">CANCEL</button>
     <input type='submit' name='' value='OK' />
     </div>
    </form>
  <hr />
  </div>
