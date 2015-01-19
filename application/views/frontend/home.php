<div class="text-center">
    <h2>Light a lamp or send a message for Martyr </h2>
</div>
<?php
$cats1=$category->children[0]->children;
$cats2=$category->children[1]->children;
print_r($cats2);
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="defence">

                <div class="col-md-6 ">
                    <div class="ministri text-center">
                        <div class="section1">
                            <i class="show"><img src="<?php echo base_url( 'assets/images/defence1.png'); ?>"></i>
                            <span class="tobedone">
                                   
                      <ul class="cssMenu">
	<?php foreach($cats2 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li><a href="regiments.html"><?php echo $sub->name;?></a></li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>
    
                                </span>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="ministri text-center">
                        <div class="section1 menu">
                            <i class="show img-po"><img src="<?php echo base_url('assets/images/homeaffair1.png'); ?>"></i>

                            <span class="tobedone done">
                                   
                      <ul class="cssMenu">
                      
	<?php foreach($cats1 as $cat) {
                          ?>
	<li>
	
		<a href="#" class="abc"><?php echo $cat->name;?></a> 
		<?php 
            $subcategory=$cat->children;
        ?>          
		<ul class="bcd">
		    <?php foreach($subcategory as $sub) {?>
			<li><a href="regiments.html"><?php echo $sub->name;?></a></li>
			<?php } ?>
			
		</ul>
	</li>
	<?php } ?>
	
</ul>
    
                                </span>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
