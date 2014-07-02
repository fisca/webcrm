function configGroupCustomer() {
    $.ajax({
        url: 'index.php?r=site/configGroupCustomer',
        success: function(data) {
            $("#content").html(data);
        }
    });
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
}