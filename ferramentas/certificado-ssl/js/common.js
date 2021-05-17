
$(document).ready(function(){
    //validate ssl checker
    $("#frm_ssl_checker").validate({
        debug: false,
        rules: {
            url: "required"
        },
        messages: {
            url: "Please enter the valid url."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            //Add loader
            $('#results').html('');
            $(".loader").show();
            $.post('ssl_checker_result.php', $('#frm_ssl_checker').serialize(), function(data) {
                $(".loader").hide();
                $('#results').html(data);
                document.location.hash="#results";
            });
        }
    });

    //validate CSR Decoder
    $("#frm_csr_decoder").validate({
        debug: false,
            rules: {
            csrfield: "required"
        },
        messages: {
            csrfield: "Please enter the valid CSR."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("csr_decoder_result.php", $("#frm_csr_decoder").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    //validate Certificate Decoder
    $("#frm_cert_decoder").validate({
        debug: false,
        rules: {
            certfield: "required"
        },
        messages: {
            certfield: "Please enter the valid Certificate."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("cert_decoder_result.php", $("#frm_cert_decoder").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    //validate Certificate Key Matcher
    $("#frm_cert_key_matcher").validate({
        debug: false,
        rules: {
            certificate: "required",
            csr: { required: "#csr_radio:checked"},
            private_key: { required: "#private_key_radio:checked"}
        },
        messages: {
            certificate: "Please enter the valid Certificate.",
            csr: "Please enter the valid CSR.",
            private_key: "Please enter the valid PrivateKey."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("cert_key_matcher_result.php", $("#frm_cert_key_matcher").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    $("input[name$='match_element_type']").click(function(){

        var radio_value = $(this).val();

        if(radio_value=='CSR') {
            $("#Cert_box").show();
            $("#CSR_box").show();
            $("#PrivateKey_box").hide();
        }
        else if(radio_value=='PrivateKey') {
            $("#Cert_box").show();
            $("#PrivateKey_box").show();
            $("#CSR_box").hide();
        }
    });

    //Validate CSR Generation form
    $("#frm_csr_generator").validate({
        debug: true,
        rules: {
            common_name: "required",
            organisation_name: "required",
            organisation_unit: "required",
            locality: "required",
            state: "required",
            country: "required",
            email: "required",
            key_size: "required",
            signature_algorithm: "required"
        },
        messages: {
            common_name: "Please enter the Common Name.",
            organisation_name: "Please enter the Organization Name.",
            organisation_unit: "Please enter the Organization Unit Name.",
            locality: "Please enter the City.",
            state: "Please enter the State.",
            country: "Please Select the Country.",
            email: "Please enter the Valid Email ID.",
            key_size: "Please Select the root length.",
            signature_algorithm: "Please Select the Signature Algorithm"
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("csr_generator_result.php", $("#frm_csr_generator").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    //SSL Convert

    //Validate
    $("#frm_ssl_converter").validate({
        debug: false,
        rules: {
            from_type: "required",
            to_type: "required",
            certificate: "required",
            private_key:
            {
                required:
                {
                    depends: function(element)
                    {
                        var from_type = $('input[name="from_type"]:checked').val();
                        var to_type = $('input[name="to_type"]:checked').val();
                        if(from_type == 'PEM' && to_type == 'PFX')
                        {
                            return true;
                        }

                        return false;
                    }
                }
            },
            key_password:
            {
                required:
                {
                    depends: function(element)
                    {
                        var from_type = $('input[name="from_type"]:checked').val();
                        var to_type = $('input[name="to_type"]:checked').val();
                        if((from_type == 'PEM' && to_type == 'PFX') || (from_type == 'PFX' && to_type == 'PEM'))
                        {
                            return true;
                        }

                        return false;
                    }
                }
            }
        },
        messages: {
            from_type: "Please select current format.",
            to_type: "Please select change format.",
            certificate: "Please select certificate file.",
            private_key:"Please select private key file.",
            key_password:"Please enter key password."
        }
    });

    $("#div_certificate, #div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").hide();
   // $('#wrap_to_type_pem, #wrap_to_type_der, #wrap_to_type_pfx, #wrap_to_type_p7b').hide();
    $('input[name="from_type"]').click(function(){

        $('p#convert_error').html('');
        var from_type = $(this).val();
        $("#div_certificate, #div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").hide();

        $('input[name="to_type"]').attr('checked',false);

        if(from_type == 'PEM')
        {
            $('#to_type_pem').attr('disabled',true);
            $('#to_type_der, #to_type_pfx, #to_type_p7b').attr('disabled',false);

            jQuery('#wrap_to_type_pem').hide();
            $('#wrap_to_type_der, #wrap_to_type_pfx, #wrap_to_type_p7b').show();

            jQuery('#to_type_der').click();
            changeOnClick();
        }
        else if(from_type == 'DER')
        {
            $('#to_type_pem').attr('disabled',false);
            $('#to_type_der, #to_type_pfx, #to_type_p7b').attr('disabled',true);

            $('#wrap_to_type_pem').show();
            $('#wrap_to_type_der, #wrap_to_type_pfx, #wrap_to_type_p7b').hide();

            $('#to_type_pem').click();
            changeOnClick();

        }
        else if(from_type == 'PFX')
        {
            $('#to_type_pem').attr('disabled',false);
            $('#to_type_der, #to_type_pfx, #to_type_p7b').attr('disabled',true);

            $('#wrap_to_type_pem').show();
            $('#wrap_to_type_der, #wrap_to_type_pfx, #wrap_to_type_p7b').hide();

            jQuery('#to_type_pem').click();
            changeOnClick();

        }
        else if(from_type=='P7B')
        {
            $('#to_type_pem, #to_type_pfx').attr('disabled',false);
            $('#to_type_der,#to_type_p7b').attr('disabled',true);

            $('#wrap_to_type_pem, #wrap_to_type_pfx').show();
            $('#wrap_to_type_der,#wrap_to_type_p7b').hide();


            jQuery('#to_type_pem').click();
            changeOnClick();

        }
    });

    $('input[name="to_type"]').click(function()
    {
        changeOnClick();
    });

    function changeOnClick()
    {
        jQuery('p#convert_error').html('');
        var from_type = $('input[name="from_type"]:checked').val();
        var to_type = $('input[name="to_type"]:checked').val();
        if(from_type=='PEM' && to_type=='DER')
        {
            $("#div_certificate").show();
            $("#div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").hide();
        }
        else if(from_type=='PEM' && to_type=='PFX')
        {
            $("#div_certificate, #div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").show();
        }
        else if(from_type=='PEM' && to_type=='P7B')
        {
            $("#div_certificate, #div_root_cert, #div_intermediate_cert").show();
            $("#div_private_key, #div_key_password").hide();

        }
        else if(from_type=='DER' && to_type=='PEM')
        {
            $("#div_certificate").show();
            $("#div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").hide();

        }
        else if(from_type=='PFX' && to_type=='PEM')
        {
            $("#div_certificate, #div_key_password").show();
            $("#div_private_key, #div_root_cert, #div_intermediate_cert").hide();
        }
        else if(from_type=='P7B' && to_type=='PEM')
        {
            $("#div_certificate").show();
            $("#div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").hide();

        }
        else if(from_type == 'P7B' && to_type == 'PFX')
        {
            $("#div_certificate, #div_private_key, #div_root_cert, #div_intermediate_cert, #div_key_password").show();

        }
    }

    //Validate Why no Padlock

    $("#frm_why_no_padlock").validate({
        debug: false,
        rules: {
            url: "required"
        },
        messages: {
            url: "Please enter the valid url."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("why_no_padlock_result.php", $("#frm_why_no_padlock").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    //Validate CAA Record Generator
    $("#frm_caa_generator").validate({
        debug: false,
        rules: {
            host_name: "required"
        },
        messages: {
            host_name: "Please enter Domain name."
        },
        errorPlacement: function(error, element) {
            if(element.hasClass("cacheck")) {
                error.appendTo( $("span.chkerror") );
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            $('#results').html('');
            $(".loader").show();
            $.post("caa_record_generator_result.php", $("#frm_caa_generator").serialize(), function(data) {
                $(".loader").hide();
                $("#results").html(data);
                document.location.hash="#results";
            });
        }
    });

    $(".cacheck").rules("add", {
        required: function(){
            if($(".cacheck:checked").length == 0)
                return true;
            else
                return false;
        },
        messages: {
            required:  "Please select CA"
        }
    });



    //validate ssl checker
    $("#frm_server_checker").validate({
        debug: false,
        rules: {
            url: "required"
        },
        messages: {
            url: "Please enter the valid host."
        },
        submitHandler: function(form) {
            // do other stuff for a valid form
            //Add loader
            $('#results').html('');
            $(".loader").show();
            $.post('server_checker_result.php', $('#frm_server_checker').serialize(), function(data) {
                $(".loader").hide();
                $('#results').html(data);
                document.location.hash="#results";
            });
        }
    });
});

