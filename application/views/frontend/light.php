
		<div class="fallingLeaves" style="margin:0px auto;">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	
	
	</div>

  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2 style="margin:-5px auto;">LIGHT A LAMP</h2>
              </div>
 
          </div>
          <div class="col-md-3"></div>
      </div>
  </div>
    <div class="container">
      <div class="row">
          <div class="col-md-12">
                       <div class="links ">
<!--                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>|<a href="detail.html">Martyr Detail</a>-->

               
                 <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->regiment;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Soldier Detail</a>|<a href="#">Light A Lamp</a>

              </div>
          </div>
      </div>
  </div>
  <div class="regi">
   <div class="container pages">
      <div class="">
  <div class="lamp-head text-center">
      <img src="<?php echo base_url("uploads");?><?php echo "/".$row->image;?>" class="lamp-img" height="250px" width="200px">
      <h3><?php echo $row->name;?></h3>
      <h4><?php echo $row->dateofdeath;?></h4>
      <div class="lamp-light">
<!--          <div class="candle"></div>-->
          
      </div>
      
  </div>
           
       </div>
       
   </div>
   </div>
    </div>
    <div class="footer"></div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $(".section1 .show").click(function () {
//                console.log("ABCD");
                $(".section1 span.tobedone").fadeOut(300);
                $(this).parents(".section1").children("span.tobedone ").fadeIn(300);
            });
        });
    </script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
		<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>