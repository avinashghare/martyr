<div class="container">
    <div class="row">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="head-reg text-center">
                <h2>SEND A MESSAGE TO FAMILY</h2>
            </div>
            <!--
                      <div class="pull-left navi">
                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->regiment;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Soldier Detail</a>|<a href="">Send a Message</a>
              </div>
-->
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="links ">
                <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?category=').$row->regiment;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Soldier Detail</a>|<a href="">Send a Message</a>


                <!--                  <a href="<?php echo site_url('website/index');?>">Home</a>|<a href="<?php echo site_url('website/regiments?id=').$row->regiment;?>">Regiments</a>|<a href="<?php echo site_url('website/detail?id=').$row->id;?>">Martyr Detail</a>-->

            </div>
        </div>
    </div>
</div>
<div class="regi">
<div class="container">

    <div class="row">
        <div id="wrapper">
            <form action="<?php echo site_url('website/sendmessagesubmit');?>" method="POST">
                <fieldset>
                    <legends>Send a Message</legends>
                    <div style="display:none;">
                        <input type="text" name="id" placeholder="Martyr id" value="<?php echo $id;?>" />
                    </div>
                    <div>
                        <input type="text" name="name" placeholder="Your Name" required/>
                    </div>
                    <div>
                        <input type="text" name="contact" placeholder="Contact Number" required/>
                    </div>
                    <div>
                        <input type="text" name="city" placeholder="City" />
                    </div>
                    <div>
                        <input type="text" name="email" placeholder="Email" required/>
                    </div>
                    <div>
                        <div class="small">this textarea is just for test so you can see the placeholder working on textarea as well</div>
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <!--                <button type="submit" class="btn btn-info">Submit</button>-->
                    <input type="submit" class="btns" name="submit" value="Send" style="position: relative;
top: 25px;" />
                </fieldset>
            </form>
        </div>
    </div>



</div>
</div>

