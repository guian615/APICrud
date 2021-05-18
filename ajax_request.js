$(document).ready(function () {
    var ID = 0;
    displayUsers();
    //display
  
    function displayUsers() { //defining a function that display a specific base on the number of its table

        $.ajax({
            type: "get",
            url: "http://192.168.0.9:8081/patAndGuian/display_ajax_request.php",
            success: function (returnData) {
                $("tbody").html(returnData);



                //edit
                $('.editBtn').click(function () {
                    ID = $(this).next().val();

                    $.ajax({
                        type: "post",
                        data: {
                            ID: ID,
                        },
                        url: "http://192.168.0.9:8081/patAndGuian/ajax_request.php",
                        success: function (result) {
                            $(".modal-body").html(result);
                            //update
                            $('.updateBtn').click(function () {
                                var name = $(".fullname").val()
                                var email = $(".email").val()
                                var pass = $(".password").val()
                                

                                $.ajax({
                                    type: "post",
                                    data: {
                                        update_ID: ID, update_name: name, update_email: email, update_password: pass
                                    },
                                    url: "http://192.168.0.9:8081/patAndGuian/ajax_request.php",
                                    success: function (result) {
                                        alert (result);
                                    location.reload(true);
                                       
                                    }
                                });
                            });

                        }
                    });
                });


                //delete
                $('.deleteBtn').click(function () {
                    var id = $(this).prev().val()
                    alert(id);
                    $.ajax({
                        type: "post",
                        data: {
                            delete_ID: id
                        },
                        url: "http://192.168.0.9:8081/patAndGuian/ajax_request.php",
                        success: function (result) {
                            alert("Deleted Successfully")
                        }
                    });
                });
            },
        });
    }




    //insert
    $('.btnInsert').click(function () {
        var name = $(".name").val();
        var email = $(".email").val();
        var password = $(".password").val();
        console.log(name)
        console.log(email)
        console.log(password)



        $.ajax({
            type: "post",
            data: {
                inputName: name,
                inputEmail: email,
                inputPassword: password
            },
            url: "http://192.168.0.9:8081/patAndGuian/ajax_request.php",
            success: function (returnData) {

                alert("added successfully")
                window.location.replace("display.php");

            },
        });
    })






    setInterval(function () {
        displayUsers();

    }, 3000);
})