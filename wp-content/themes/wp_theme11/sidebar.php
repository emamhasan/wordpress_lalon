<div id="sidebar">
<?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>	


<li id="categories"><?php _e('Categories:'); ?>
	<ul>
<?php wp_list_cats(); ?>
	</ul>
 </li>

 <div class="navigation">
<div class="alignleft">
     <?php next_posts_link('&laquo; Previous Entries') ?>
</div>
<div class="alignright">
     <?php previous_posts_link('Next Entries &raquo;') ?>
</div>
</div>

<li id="archives"><?php _e('Archives:'); ?>
     <ul>
<?php wp_get_archives('type=monthly'); ?>
     </ul>
 </li>    

  </div>   