<section class="slider-area-2 ">
    <div class="rev_slider_wrapper sliderwelcome ">


        <div id="rev_slider_2" class="rev_slider" style="display:none">
            <!--BEGIN SLIDES LIST--> 

            <ul>
                <!--slider one start--> 
                 <?php
                            foreach (Slider::all() as $slider) {
                                ?>
                <li data-index="rs-3045" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="images/slider/slider-back-02.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!--MAIN IMAGE--> 

                    <img src="upload/slider/<?php echo $slider['image_name']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg img-responsive" data-no-retina>
                    

                    <!--LAYER NR. 3--> 
                    <div class="tp-caption lfb tp-resizeme header-btn-2" data-x="center" data-hoffset="0" data-y="center" data-voffset="100" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;">
                    </div>
                </li>
               
                            <?php } ?>
                 <!--end slider one--> 
             
            </ul>  
            <!--END SLIDES LIST--> 

        </div>  

        <!--END SLIDER CONTAINER--> 
    </div>  
    <!--END SLIDER CONTAINER WRAPPER--> 
</section>