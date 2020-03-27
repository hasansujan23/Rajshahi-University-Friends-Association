<?php
include 'header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 contact-div" style="">
            <h3>Please Login</h3>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 60px;margin-bottom: 60px;">
    <div class="row" style="background: #ffffff; padding: 50px;">
            <div class="col-md-12">
                <div style="width: 500px;margin: 0 auto;">

                    <div class="panel">
                        <div class="panel-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-muted">Username</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted">Password</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="btn" type="submit" value="LOGIN" style="background: #2D3091;color: aliceblue;width: 48%;padding: 15px;">
                                    <input class="btn" type="submit" value="REGISTER" style="background: #E5E5E5;color: #333333;width: 48%;float: right;padding: 15px;">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox"><span class="text-muted" style="font-size: 20px;"> Keep me sign in</span>
                                </div>
                                <div class="form-group">
                                    <p class="text-muted text-center"><a href="#" class="card-link">Forgot your password?</a></p>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
</div>



<?php
include 'footer.php';
?>
