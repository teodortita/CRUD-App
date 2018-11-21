$(document).ready(function () {
    showUser();

    //Add
    $(document).on('click', '#addnew', function () {
        if ($('#firstname').val() == "" || $('#lastname').val() == "") {
            alert('Please input data first');
        } else {
            $firstname = $('#firstname').val();
            $lastname = $('#lastname').val();
            $.ajax({
                type: "POST",
                url: "addnew.php",
                data: {
                    firstname: $firstname,
                    lastname: $lastname,
                    add: 1,
                },
                success: function () {
                    showUser();
                }
            });
        }
    });

    //Delete
    $(document).on('click', '.delete', function () {
        $id = $(this).val();
        $.ajax({
            type: "POST",
            url: "delete.php",
            data: {
                id: $id,
                del: 1,
            },
            success: function () {
                showUser();
            }
        });
    });

    //Update
    $(document).on('click', '.updateuser', function () {
        $uid = $(this).val();
        $('#edit' + $uid).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $ufirstname = $('#ufirstname' + $uid).val();
        $ulastname = $('#ulastname' + $uid).val();
        $.ajax({
            type: "POST",
            url: "update.php",
            data: {
                id: $uid,
                firstname: $ufirstname,
                lastname: $ulastname,
                edit: 1,
            },
            success: function () {
                showUser();
            }
        });
    });

});

//Show
function showUser() {
    $.ajax({
        url: 'show_user.php',
        type: 'POST',
        async: false,
        data: {
            show: 1
        },
        success: function (response) {
            $('#userTable').html(response);
        }
    });
}