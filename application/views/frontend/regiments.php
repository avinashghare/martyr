
  <div class="container">
      <div class="row">
         <div class="col-md-3"></div>
         
          <div class="col-md-6">
             <div class="head-reg text-center">
              <h2>ARMY MARTYR REGIMENTS</h2>
              </div>
              <div class="pull-left navi">
                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>
              </div>
          </div>
          <div class="col-md-3"></div>
      </div>
  </div>
   <div class="container">
      <div class="regiment-back">
       <div class="row">
           
		
			<div class="col-md-3">
				<ul id="da-thumbs" class="da-thumbs">
					<li>
						<a href="detail.html">
							<img src="image/1.jpg" />
							<div class="fonts"><span>Martyr  Name</span><p>Date Of Action</p></div>
						</a>
					</li>
					</ul>
					</div>
						
           </div>
           
       </div>
       
   </div>
    </div>
    <div class="footer"></div>
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