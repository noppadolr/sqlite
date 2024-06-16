<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                username: {
                    required : true,
                },

                password: {
                    required : true,
                    minlength:3,
                },

            },
            messages :{
                username: {
                    required : 'Please Enter Your Name',
                },
                password: {
                    required : 'Please Select Supplier',
                    minlength : 'Your password must be at least 8 character long '
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>
