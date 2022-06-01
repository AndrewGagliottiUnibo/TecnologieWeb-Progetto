const pattern = /^(?:[0-9]+[a-z]|[a-z]+[0-9])[a-z0-9]*$/i;
$(document).ready(function(){

    const username = $("input#username");
    const password = $("input#password");

    $("form").submit(function(e){
        e.preventDefault();
        let isFormOk = true;
        
        $("input#username + p").remove();
        if(username.val()==undefined || username.val().length<5){
            username.parent().append("<p>Username deve essere almeno 5 caratteri</p>")
            isFormOk = false;
        }
        
        $("input#password + p").remove();
        if(password.val()==undefined || password.val().length<8 || !pattern.test(password.val())){
            password.parent().append("<p>Password deve essere almeno 8 caratteri e deve contenere almeno una lettera ed un numero</p>");
            isFormOk = false;
        }

        if(isFormOk){
            e.currentTarget.submit(); 
        }


    });
    
});