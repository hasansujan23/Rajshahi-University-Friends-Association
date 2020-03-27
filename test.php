<?php
include 'header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="username" id="username"><div id="authenticUser"></div>
                    </div>
                    <div class="form-group">
                        <div class="form-group row col-md-6">
                            <label>Country</label>
                            <select class="form-control" id="country">
                                <option disabled selected hidden></option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Pakistan</option>
                            </select>
                        </div>
                        <div class="form-group row col-md-6" id="district" style="display: none;">
                            <label>District</label>
                            <input class="form-control" type="text" id="">
                        </div>
                        <div class="form-group row col-md-6" id="state" style="display: none;">
                            <label>State</label>
                            <input class="form-control" type="text" id="">
                        </div>
                    </div>
                </form>
            <div>
                <h3 id="name"></h3>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>
