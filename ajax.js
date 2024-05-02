$(document).ready(function(){
    read(); 
});
// insert data

$(".btn").click(function(){

    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    // alert(name);
    $.ajax({
        method : "POST",
        url : "insert.php",
        data : {
            name : name,
            email : email,
            password : password
        },
        success : function(data){
           read();
        }
    })
})

// read data

function read(){
    var data = "";
    $.ajax({
        url : "read.php",
        method : "POST",
        data : {
            data : data
        },
        success : function(data){
            $("tbody").html(data)
        }
    })
}

// delete data

function Delete_user_data(user_id){
    // alert(user_id);
    $.ajax({
        url : "delete.php",
        method : "POST",
        data : {
            user_id : user_id
        },
        success : function(data){
            alert("Are you sure?");
            read();
        }
    })
}

//edit data

function Edit_user_data(user_id){

    $.ajax({
        url : "edit.php",
        method : "GET",
        data : {
            user_id : user_id
        },
        success : function(data){
            $("body").html(data);
        }
    })
}

///update data

function UpdateData(user_id){
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    $.ajax({
        url : "update.php",
        method : "GET",
        data : {
            name : name,
            email : email,
            password : password,
            user_id : user_id
        },
        success : function(data){
            alert(data);
            gotHome();
        }

    })
}
function gotHome(){
    window.location.href = "index.php";
}
