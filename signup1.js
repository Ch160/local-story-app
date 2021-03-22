$(function(){

    var $signup1Form= $("#signup1");
    if($signup1Form.length){
        $signup1Form.validate({
            rules:{
                username: {
                    required:true
                },
                firstname: {
                    required: true,
                    
                },
                lastname: {
                    required: true,
                    

                },
                email: {
                    required: true,
                    email:true
                },
                password: {
                    required: true
                    
                },
                confirm: {
                    required: true,
                    equalTo: '#password'
                },
                
            },
            messages: {
                username:{
                    required: 'username is mandatory!'
                }
            }
        })
    }
})