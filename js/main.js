$(document).ready(function () {
    $('#pcountry').click(function () {
        //$('#district').show();
        $('#pdistrict').hide();
        $('#pupazila').hide();
        $('#pstate').hide();
        $('#pcity').hide();
        $('#pmail').hide();
        $('#pzip').hide();
        var name=$(this).val();
        if(name != ''){
            if(name=="Bangladesh"){
                $('#pdistrict').show();
                $('#pupazila').show();
                $('#pmail').show();
            }else {
                $('#pstate').show();
                $('#pcity').show();
                $('#pzip').show();
            }
        }
    });

    $('#username').blur(function () {
        var username=$(this).val();
        $.ajax({
            url:"checkuser.php",
            method:"POST",
            data:{username:username},
            dataType:"text",
            success:function checkUser (data) {
                $('#authenticUser').html(data);
            }
        });
    });

    //personal info btn
    $('#btn_personalInfo').click(function () {
        $('#errorTitle').text('');
        $('#pTitle').removeClass('has-error');
        $('#errorFirstName').text('');
        $('#pFirstName').removeClass('has-error');
        $('#errorLastName').text('');
        $('#pLastName').removeClass('has-error');
        $('#errorNickName').text('');
        $('#pNickName').removeClass('has-error');
        $('#errorDate').text('');
        $('#pDate').removeClass('has-error');
        $('#errorBloodGroup').text('');
        $('#pBloodGroup').removeClass('has-error');
        $('#errorDept').text('');
        $('#pDepartment').removeClass('has-error');
        $('#errorHall').text('');
        $('#pHall').removeClass('has-error');


        var titleLength = $.trim($('#pTitle').val()).length;
        var firstNameLength = $.trim($('#pFirstName').val()).length;
        var lastNameLength = $.trim($('#pLastName').val()).length;
        var nickNameLength = $.trim($('#pNickName').val()).length;
        var dateLength = $.trim($('#pDate').val()).length;
        var bloodLength = $.trim($('#pBloodGroup').val()).length;
        var deptLength = $.trim($('#pDepartment').val()).length;
        var hallLength = $.trim($('#pHall').val()).length;
        var errMsg='Please complete the field';
        if(titleLength>0 && firstNameLength>0 && lastNameLength>0 && nickNameLength>0 && dateLength>0 && bloodLength>0 && deptLength>0 && hallLength>0){
            $('#li_personal').removeAttr('href data-toggle');
            $('#li_personal').removeClass('active');
            $('#li_personal').addClass('disabled');
            $('#home').hide();

            $('#li_contact').removeClass('disabled');
            $('#li_contact').addClass('active');
            $('#a_contactInfo').attr('href','#menu1');
            $('#a_contactInfo').attr('data-toggle','tab');
            $('#menu1').addClass('active in');
        }else {
            if(titleLength<=0){
                $('#errorTitle').text(errMsg);
                $('#pTitle').addClass('has-error');
            }
            if(firstNameLength<=0){
                $('#errorFirstName').text(errMsg);
                $('#pFirstName').addClass('has-error');
            }
            if(lastNameLength<=0){
                $('#errorLastName').text(errMsg);
                $('#pLastName').addClass('has-error');
            }
            if(nickNameLength<=0){
                $('#errorNickName').text(errMsg);
                $('#pNickName').addClass('has-error');
            }
            if(dateLength<=0){
                $('#errorDate').text(errMsg);
                $('#pDate').addClass('has-error');
            }
            if(bloodLength<=0){
                $('#errorBloodGroup').text(errMsg);
                $('#pBloodGroup').addClass('has-error');
            }
            if(deptLength<=0){
                $('#errorDept').text(errMsg);
                $('#pDepartment').addClass('has-error');
            }
            if(hallLength<=0){
                $('#errorHall').text(errMsg);
                $('#pHall').addClass('has-error');
            }
        }

    });

    //contact info btn
    $('#btn_contactInfo').click(function () {

        $('#errorPrimaryEmail').text('');
        $('#cPrimaryEmail').removeClass('has-error');
        $('#errorMobile').text('');
        $('#cMobile').removeClass('has-error');
        $('#errorCountry').text('');
        $('#pcountry').removeClass('has-error');
        $('#errorDistrict').text('');
        $('#cDistrict').removeClass('has-error');
        $('#errorZila').text('');
        $('#cZilla').removeClass('has-error');
        $('#errorState').text('');
        $('#cState').removeClass('has-error');
        $('#errorCity').text('');
        $('#cCity').removeClass('has-error');
        $('#errorPerCountry').text('');
        $('#cPerCountry').removeClass('has-error');
        $('#errorPerDistrict').text('');
        $('#cPerDistrict').removeClass('has-error');
        $('#errorPerZila').text('');
        $('#cPerZilla').removeClass('has-error');

        var primaryEmailLength = $.trim($('#cPrimaryEmail').val()).length;
        var mobileLength = $.trim($('#cMobile').val()).length;
        var countryLength = $.trim($('#pcountry').val()).length;
        var districtLength = $.trim($('#cDistrict').val()).length;
        var zilaLength = $.trim($('#cZilla').val()).length;
        var stateLength = $.trim($('#cState').val()).length;
        var cityLength = $.trim($('#cCity').val()).length;
        var perCountryLength = $.trim($('#cPerCountry').val()).length;
        var perDistrictLength = $.trim($('#cPerDistrict').val()).length;
        var perZilaLength = $.trim($('#cPerZilla').val()).length;
        var errMsg='Please complete the field';

        if(primaryEmailLength>0 && mobileLength>0 && countryLength>0 && (stateLength>0 || districtLength>0) && (zilaLength>0 || cityLength>0) && perCountryLength>0 && perDistrictLength>0 && perZilaLength>0){
            $('#li_contact').removeAttr('href data-toggle');
            $('#li_contact').removeClass('active');
            $('#li_contact').addClass('disabled');
            $('#menu1').hide();
            $('#li_family').removeClass('disabled');
            $('#li_family').addClass('active');
            $('#a_familyInfo').attr('href','#menu2');
            $('#a_familyInfo').attr('data-toggle','tab');
            $('#menu2').addClass('active in');
        }else {
            if(primaryEmailLength<=0){
                $('#errorPrimaryEmail').text(errMsg);
                $('#cPrimaryEmail').addClass('has-error');
            }
            if(mobileLength<=0){
                $('#errorMobile').text(errMsg);
                $('#cMobile').addClass('has-error');
            }
            if(countryLength<=0){
                $('#errorCountry').text(errMsg);
                $('#pcountry').addClass('has-error');
            }
            if(districtLength<=0){
                $('#errorDistrict').text(errMsg);
                $('#cDistrict').addClass('has-error');
            }
            if(zilaLength<=0){
                $('#errorZila').text(errMsg);
                $('#cZilla').addClass('has-error');
            }
            if(stateLength<=0){
                $('#errorState').text(errMsg);
                $('#cState').addClass('has-error');
            }
            if(cityLength<=0){
                $('#errorCity').text(errMsg);
                $('#cCity').addClass('has-error');
            }
            if(perCountryLength<=0){
                $('#errorPerCountry').text(errMsg);
                $('#cPerCountry').addClass('has-error');
            }
            if(perDistrictLength<=0){
                $('#errorPerDistrict').text(errMsg);
                $('#cPerDistrict').addClass('has-error');
            }
            if(perZilaLength<=0){
                $('#errorPerZila').text(errMsg);
                $('#cPerZilla').addClass('has-error');
            }
        }


    });

    //family info btn
    $('#btn_familyInfo').click(function () {

        $('#errorFatherName').text('');
        $('#fatherName').removeClass('has-error');
        $('#errorMotherName').text('');
        $('#motherName').removeClass('has-error');

        var fatherNameLength = $.trim($('#fatherName').val()).length;
        var motherNameLength = $.trim($('#motherName').val()).length;
        var errMsg='Please complete the field';

        if(fatherNameLength>0 && motherNameLength>0){
            $('#li_family').removeAttr('href data-toggle');
            $('#li_family').removeClass('active');
            $('#li_family').addClass('disabled');
            $('#menu2').hide();
            $('#li_prof').removeClass('disabled');
            $('#li_prof').addClass('active');
            $('#a_prof').attr('href','#menu3');
            $('#a_prof').attr('data-toggle','tab');
            $('#menu3').addClass('active in');
        }else {
            if(fatherNameLength<=0){
                $('#errorFatherName').text(errMsg);
                $('#fatherName').addClass('has-error');
            }
            if(motherNameLength<=0){
                $('#errorMotherName').text(errMsg);
                $('#motherName').addClass('has-error');
            }
        }

    });

});









// $(document).ready(function () {
//     $('#country').click(function () {
//         //$('#district').show();
//         $('#district').hide();
//         $('#state').hide();
//         var name=$(this).val();
//         if(name!=""){
//             if(name=="Bangladesh"){
//                 $('#district').show();
//             }else {
//                 $('#state').show();
//             }
//         }
//     })
// })












// $(document).ready(function () {
//     $('#username').blur(function () {
//         var username=$(this).val();
//         $.ajax({
//             url:"checkuser.php",
//             method:"POST",
//             data:{username:username},
//             dataType:"text",
//             success:function checkUser (data) {
//                 $('#authenticUser').html(data);
//             }
//         });
//     });
//
//
// })

