function configGroupCustomer() {
    $.ajax({
        url: 'index.php?r=site/configGroupCustomer',
        success: function(data) {
            $("#content").html(data);
        }
    });

    return false;
}

function saveGroupCustomer() {
    $.ajax({
        url: 'index.php?r=site/saveGroupCustomer',
        type: 'POST',
        data: $("#formGroupCustomer").serialize(),
        success: function(data) {
            if (data == 'success') {
                alert("บันทึกรายการแล้ว");
                configGroupCustomer();
            }
        }
    });

    return false;
}

function editGroupCustomer(id) {
    $.ajax({
        url: 'index.php?r=site/editGroupCustomer',
        data: {
            id: id
        },
        dataType: 'json',
        success: function(data) {
            $("input[name=name]").val(data.name);
            $("input[name=id]").val(data.id);
        }
    });

    return false;
}

function deleteGroupCustomer(id) {
    if (confirm("Delete ?")) {
        $.ajax({
            url: 'index.php?r=site/deleteGroupCustomer',
            data: {
                id: id
            },
            success: function(data) {
                if (data === 'success') {
                    configGroupCustomer();
                }
            }
        });
    }

    return false;
}