</div>


<div class="footer"></div>

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

</body>


</html>