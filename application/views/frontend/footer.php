</div>


<div class="footer"></div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="<?php echo base_url('frontassets/js/jquery.hoverdir.js'); ?>"></script>
<script>
    $(document).ready(function () {

        $(".section1 .show").click(function () {
            //                console.log("ABCD");
            $(".section1 span.tobedone").fadeOut(300);
            $(this).parents(".section1").children("span.tobedone ").fadeIn(300);
        });
    });
</script>
<script type="text/javascript">
			$(function() {
			
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

			});
		</script>

</body>


</html>