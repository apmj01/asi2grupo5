var Script = function () {

    $.validator.setDefaults({
        submitHandler: function() { alert("submitted!"); }
    });

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
       $("#signupForm").validate({
            rules: {
                firstname: "required",
                lastname: "required",
                username: {
                    required: true,
                    minlength: 2
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                estado: "required",
                rol: "required"
            },
            messages: {
                //Please enter your firstname
                firstname: "Por favor ingrese su nombre",
                //Please enter your lastname
                lastname: "Por favor ingrese su apellido",
                username: {
                    //Please enter a username
                    required: "Por favor ingrese un usuario",
                    //Your username must consist of at least 2 characters
                    minlength: "Su nombre de usuario debe tener al menos 2 caracteres"
                },
                password: {
                    //Please provide a password
                    required: "Por favor ingrese su contraseña",
                    //Your password must be at least 5 characters long
                    minlength: "Su contraseña debe tener al menos 8 caracteres"
                },
                confirm_password: {
                     //Please provide a password
                    required: "Por favor ingrese su contraseña",
                     //Your password must be at least 5 characters long
                    minlength: "Su contraseña debe tener al menos 8 caracteres",
                    //Please enter the same password as above
                    equalTo: "Por favor, introduzca la misma contraseña que arriba"
                },
                //Please enter a valid email address
                email: "Por favor, introduce una dirección de correo electrónico válida",
                //Please accept our policy
                estado: "Por favor, seleccione un estado de usuario",
                rol: "Por favor, seleccione un rol de usuario"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();