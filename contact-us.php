<?php include 'header.php';?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 contact-div anim5" style="">
            <h3>Contact Us</h3>
        </div>
    </div>
</div>

<div class="container" style="background: #ffffff;margin-top: 20px;margin-bottom: 20px;padding: 20px;">
    <div class="row">
        <div class="col-md-6 anim5">
            <form action="user_contact.php" method="post" style="background: #001F33;padding: 20px;">
                <div class="form-group">
                    <label style="color: aliceblue;">Your Name</label>
                    <input class="form-control" name="u_name" type="text" required>
                </div>
                <div class="form-group">
                    <label style="color: aliceblue;">Email</label>
                    <input class="form-control" name="u_email" type="text" required>
                </div>
                <div class="form-group">
                    <label style="color: aliceblue;">Subject</label>
                    <input class="form-control" name="u_subject" type="text" required>
                </div>
                <div class="form-group">
                    <label style="color: aliceblue;">Your Message</label>
                    <textarea name="u_msg" class="form-control" rows="10" required></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-default" type="submit" name="submit" value="SEND">
                </div>
            </form>
        </div>
        <div class="col-md-6 anim5">
            <div>
                <address>
                    <h4>Dhaka University Friends Association (DUFA) 1995-96</h4>
                    <h4>House # 23 (Flat # 2B), Road # 18, Block: A</h4>
                    <h4>Banani Model Town</h4>
                    <h4>Dhaka-1213, Bangladesh</h4>
                    <p>Phone # ———————</p>
                    <p>Fax #  ————————–</p>
                    <p>Mobile # (+88) 01715046660 </p>
                    <p>Web: www.dufa9596.org</p>
                    <p>Email: info.dufa9596@gmail.com</p>
                </address>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1817.0981335195424!2d88.63413335797799!3d24.37447488921039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fbf02ac4168c77%3A0xb04df7e891b7ff5d!2sRajshahi+University+Botanical+Garden%2C+Rajshahi!5e0!3m2!1sen!2sbd!4v1542468932337" width="600" height="277" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php';?>