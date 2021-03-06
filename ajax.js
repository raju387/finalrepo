$("#signupform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    var myObj = JSON.parse(datatopost);
    console.log(myObj);
    $.ajax({
        url : "signupphpform.php",
        type : "POST",
        data : datatopost,
        success : function(data){
            if(data){
                $("#error").html(data);
            }
        }
       
    })
})



$("#loginform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    var myObj = JSON.parse(datatopost);
    console.log(myObj);
    $.ajax({
        url : "loginphpform.php",
        type : "POST",
        data : datatopost,
        success : function(data){
            if(data){
                $("#error").html(data);
            }
        }
       
    })
})

$("#editinfo").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    var myObj = JSON.parse(datatopost);
    console.log(myObj);
    $.ajax({
        url : "infoedit.php",
        type : "POST",
        data : datatopost,
        }
    })
})