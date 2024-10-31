
jQuery( document ).ready( function ($) {

    var mvno_cancel_portin_modal = $("#myModal_cancel_portin");
    $(".mvno_cancel_portin").on("click", function (e) {

        mvno_cancel_portin_modal.show();
        let id = $(this).val();

        $(".mvno_btn_cancel_yes").val(id);


    })

    $(".mvno_btn_cancel_yes").on("click", function (e) {
        $("#mvno_cancel_loader").show()
        let id = $(this).val();

        $.ajax({
            type: "post",
            url: mvnoPortinAjax.mvnoportinajaxurl,
            data: {
                action: "mvno_cancel_portin",
                id: id
            }, success: function (result) {
                var data = JSON.parse(result);
                console.log(data);
                if(data.resultType == "Success"){
                    mvno_cancel_portin_modal.hide();
                    alert("Portin has been cancelled");
                }else{
                    alert(data.messages[0]);
                }
                $("#mvno_cancel_loader").hide()
            }, error: function (err) {
                console.log(err)
            }
        })
    })

    $(".mvno_btn_cancel_no").on("click", function (e) {
        $("#myModal_cancel_portin").hide();
    })
    $(".close").on("click", function () {
        $("#myModal_cancel_portin").hide();
    });
    // Get the modal
    var modal = $("#myModal");

// Get the button that opens the modal
    $(".myBtn").on("click", function (e) {
        let id = $(this).val();
        $("#myModal").show();
        $.ajax({
            type: "post",
            url: mvnoPortinAjax.mvnoportinajaxurl,
            data: {
                action: "mvno_get_portin_info_by_id",
                id: id
            }, success: function (result) {
                var data = JSON.parse(result);

                $("#conflict_message").text(data.port_message)
                $("#mvno_phone").val(data.port_number)
                $("#mvno_zip_code").val(data.zipcode)
                $("#mvno_id").val(data.ID)
                $("#mvno_first_name").val(data.first_name)
                $("#mvno_last_name").val(data.last_name)
                $("#mvno_street_number").val(data.street_number)
                $("#mvno_street_name").val(data.street_name)
                $("#mvno_street_type").val(data.street_type)
                $("#mvno_street_direction").val(data.street_direction)
                $("#mvno_city").val(data.city)
                $("#mvno_state").val(data.state)
                $("#mvno_business_name").val(data.business_name)
                $("#mvno_account_number").val(data.account)
                $("#mvno_account_password").val(data.password)
                $("#mvno_iccid").val(data.iccid)
                $("#mvno_imei").val(data.imei)
                $("#mvno_plan").val(data.plan)

            }, error: function (err) {
                console.log(err)
            }
        });
    });
// Get the <span> element that closes the modal
    var span = $(".close").on("click", function () {
        $("#myModal").hide();
    });

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }



    $(".mvno_portin_eligible").on('click', function (e) {
        e.preventDefault()

        let phone_number = $("#mvno_portin_phone").val();
        let zipcode = $("#mvno_portin_zip_code").val();
        $("#loader").show();
        $.ajax({
            type: "post",
            url: mvnoPortinAjax.mvnoportinajaxurl,
            data: {
                action: "mvno_portin_eligible_frontend",
                phone_number: phone_number,
                zip_code: zipcode
            }, success: function (result) {
                // $(".mvno-activations-loader-center").hide();
                let d = JSON.parse(result);
                if(d.eligible == "true"){
                    $("#area").val(d.area)
                    $(".mvno_portin_div").show();
                    $(".mvno_prtin_confirm_div").hide();
                }else{
                    alert("Number is not eligible");
                }
                $("#loader").hide();
            }, error: function (err) {
                console.log(err)
            }
        });
    })


    $("input[name=mvno_portin_submit]").on("click", function (e) {
        e.preventDefault();
        $("#loader").show();
        let first_name = $("#first_name").val();
        let last_name = $("#last_name").val();
        let street_number = $("#street_number").val();
        let street_direction = $("#street_direction").val();
        let street_name = $("#street_name").val();
        let street_type = $("#street_type").val();
        let city = $("#city").val();
        let state = $("#state").val();
        let business_name = $("#business_name").val();
        let account_number = $("#account_number").val();
        let account_password = $("#account_password").val();
        let imei = $("#imei").val();
        let iccid = $("#iccid").val();
        let plan = $("#plan").val();
        let area = $("#area").val();
        let data = {
            user_id: $("input[name=user_id]").val(),
            first_name: first_name,
            last_name: last_name,
            street_name: street_name,
            street_number:street_number,
            street_direction: street_direction,
            street_type: street_type,
            city: city,
            state: state,
            business_name: business_name,
            account_number: account_number,
            password: account_password,
            imei: imei,
            iccid: iccid,
            plan: plan,
            area: area,
            zip: $("#mvno_portin_zip_code").val(),
            phone: $("#mvno_portin_phone").val()
        };
        $.ajax({
            type: "post",
            url:  mvnoPortinAjax.mvnoportinajaxurl,
            data: {
                action: "mvno_portin_ajax",
                input: data
            }, success: function (result) {
                $("#loader").hide();
                let data = JSON.parse(result);
                // console.log(data.port_message)
                $(".mvno_portin_msg").text(data.port_message)
            }, error: function (err) {
                console.log(err)
            }
        })
    })

} )


