
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>

                <div class="col-md-6">
                    <div class="head-reg text-center">
                        <h2>SEND A MESSAGE TO FAMILY</h2>
                    </div>
                      <div class="pull-left navi">
                  <a href="index.html">Home</a>|<a href="regiments.html">Regiments</a>|<a href="detail.html">Soldier Detail</a>|<a href="message.html">Send a Message</a>
              </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="container">
          
                <div class="row">
<div id="wrapper">
        <form action="<?php echo site_url('website/sendmessagesubmit');?>" method="POST">
            <fieldset>
                <legend>Send a Message</legend>
                <div style="display:none;">
                    <input type="text" name="id" placeholder="Martyr id" value="<?php echo $id;?>"/>
                </div>
                <div>
                    <input type="text" name="name" placeholder="Your Name" required/>
                </div>
                <div>
                    <input type="text" name="contact" placeholder="Contact Number" required/>
                </div>
                <div>
                    <input type="text" name="city" placeholder="City"/>
                </div>
                <div>
                    <input type="text" name="email" placeholder="Email" required/>
                </div>
                <div>
                    <div class="small">this textarea is just for test so you can see the placeholder working on textarea as well</div>
                    <textarea name="message" placeholder="Message"></textarea>
                </div>    
<!--                <button type="submit" class="btn btn-info">Submit</button>-->
                <input type="submit"  class="btn" name="submit" value="Send"/>
            </fieldset>    
        </form>
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
        $(function () {

            $(' #da-thumbs > li ').each(function () {
                $(this).hoverdir();
            });

        });
    </script>