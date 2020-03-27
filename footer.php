<div class="footer-area">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="footer-widget text-center">			<div class="textwidget"><p><span class="footer-about">Rajshashi University Friends Association. Session 1996-97</span></p>
<p>RUFA 96-97 is the association of students who got themselves admitted in undergraduate programmes at Rajshashi University in 1996-97 academic session. Although there are many alumni associations at different levels including Departments and Halls,</p>
</div>
		</div>                </div>
                <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                    <div class="footer-widget"><h3>Emergency Numbers</h3>			<div class="textwidget"><p>
<span class="emergency-contact">Bangladesh Police</span> <a href="tel:+8801769690033">01769690033</a><br />
<span class="emergency-contact">Bangladesh RAB</span> <a href="tel:01777710255">01777710255</a><br />
<span class="emergency-contact">Dhaka Medical College</span> <a href="tel:+880 2-55165088">+880 2-55165088</a></p>
</div>
		</div>                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-widget"><h3>Rufa Community</h3><div class="menu-important-link-container"><ul id="menu-important-link" class="menu"><li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#">Library</a></li>
<li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#">Directory</a></li>
<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#">forum</a></li>
<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">Community</a></li>
</ul></div></div>                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Close -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p>© Rajshashi University Friends Association (RUFA) 1996-97 | All Rights Reserved | <strong>Developed by <a
                                href="http://facebook.com/computersoftwaresolution/" target="_blank">Computer Solution</a></strong></p>
                    </div><!-- Copyright -->
                </div>
            </div>
        </div>
    </div><!-- Footer Bottom Close -->
</div><!-- Footer Area Close -->





    <div id="um_upload_single" style="display:none">
	
</div><div id="um_view_photo" style="display:none">

	<a href="#" data-action="um_remove_modal" class="um-modal-close"><i class="um-faicon-times"></i></a>
	
	
</div><!-- Custom Facebook Feed JS -->



<script>
    $(document).ready(function () {
        $('#professionCountry').click(function () {
            //var professionCountryLength = $.trim($('#professionCountry').val()).length;
            $('#professionDistrict').show();
            var professionCountry=$('#professionCountry').val();
            if (professionCountry=="Bangladesh"){
                $('#professionDistrict').show();
                $('#professionCity').hide();
            } else {
                $('#professionCity').show();
                $('#professionDistrict').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#cDistrict').change(function () {
            var dId=$('#cDistrict').val();
            $.ajax({
                url:"fetchZila.php",
                method:"POST",
                data:{dId:dId},
                dataType:"text",
                success:function (data) {
                    $('#cZilla').html(data);
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#cPerDistrict').change(function () {
            var dId=$('#cPerDistrict').val();
            $.ajax({
                url:"fetchZila.php",
                method:"POST",
                data:{dId:dId},
                dataType:"text",
                success:function (data) {
                    $('#cPerZilla').html(data);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#personalClick').click(function () {
            $('#contactInformation').fadeOut();
            $('#familyInformation').fadeOut();
            $('#professionalInformation').fadeOut();
            $('#personalInformation').fadeIn();
        });
        $('#contactClick').click(function () {
            $('#familyInformation').fadeOut();
            $('#professionalInformation').fadeOut();
            $('#personalInformation').fadeOut();
            $('#contactInformation').fadeIn();
        });
        $('#familyClick').click(function () {
            $('#professionalInformation').fadeOut();
            $('#personalInformation').fadeOut();
            $('#contactInformation').fadeOut();
            $('#familyInformation').fadeIn();
        });
        $('#professionalClick').click(function () {
            $('#personalInformation').fadeOut();
            $('#contactInformation').fadeOut();
            $('#familyInformation').fadeOut();
            $('#professionalInformation').fadeIn();
        });
    });
</script>
<script>
    $(document).ready(function () {
        var skroll = new Skroll()
            .add(".anim1",{
                animation:"fadeInUp",
                delay:520,
                duration:1000,
                wait:350
            })
            .add(".anim2",{
                animation:"flipInX",
                delay:120,
                duration:750
            })
            .add(".anim3",{
                animation:"rotateLeftIn",
                delay:500,
                duration:1550
            })
            .add(".anim4",{
                animation:"slideInLeft",
                delay:480,
                duration:1800
            })
            .add(".anim5",{
                animation:"growInLeft",
                delay:380,
                duration:1000,
                easing:"cubic-bezier(0.37, 0.27, 0.24, 1.26)"
            })
            .add(".anim6",{
                animation:"growInRight",
                delay:480,
                duration:1500,
                easing:"cubic-bezier(0.37, 0.27, 0.24, 1.26)"
            })
            .addAnimation("spinIn",{
                start:function(el){
                    $(el).css({
                        transform:"rotate(-360deg) scale(.2,.2)",
                        transformOrigin:"50% 50%",
                        opacity:0
                    });
                },
                end:function(el){
                    $(el).css({
                        transform:"rotate(0deg) scale(1,1)",
                        opacity:1
                    })
                }
            })
            .add(".anim7",{
                animation:"spinIn",
                delay:480,
                duration:1500,
                easing:"cubic-bezier(0.37, 0.27, 0.24, 1.26)"
            })
            .add(".anim8",{
                animation:"fadeInDown",
                delay:75,
                duration:150,
                triggerBottom:.98,
                easing:"cubic-bezier(0.37, 0.27, 0.24, 1.26)"
            })
            .init();
        $(window).load(function(e){
            skroll.recalcPosition();
        })
        setInterval(function(){
            skroll.recalcPosition();
        },2000)
    });
</script>

<!-- Bootstrap JS (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/croppie.js"></script>
	</body>
</html>
<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 text-center">
                        <div id="image_demo" style="width:350px; margin-top:30px"></div>
                    </div>
                    <div class="col-md-4" style="padding-top:30px;">
                        <br />
                        <br />
                        <br/>
                        <button class="btn btn-success crop_image">Crop & Upload Image</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width:200,
                height:200,
                type:'square' //circle
            },
            boundary:{
                width:300,
                height:300
            }
        });

        $('#upload_image').on('change', function(){
            var reader = new FileReader();
            reader.onload = function (event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event){
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response){
                $.ajax({
                    url:"upload.php",
                    type: "POST",
                    data:{"image": response},
                    success:function(data)
                    {
                        $('#uploadimageModal').modal('hide');
                        //$('#uploaded_image').html(data);
                        $('#upImage').attr("src",data);
                        $('#imgUrl').val(data);
                    }
                });
            })
        });

    });
</script>