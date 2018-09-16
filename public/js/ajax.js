jQuery(document).ready(function () {
    $("#send").submit(function () {
        $.ajax({
            type: "POST",
            url: "/send",
            data: $(this).serialize()
        }).done(function () {
            document.getElementById("send").reset();
            alertify.set('notifier', 'position', 'top-left');
            alertify.success('Сообщение было отправлено, вам ответят в течении 24 часов');
        });
        return false;
    });
    $("#sendProd").submit(function () {
        $.ajax({
            type: "POST",
            url: "/sendProd",
            data: $(this).serialize()
        }).done(function () {
            document.getElementById("sendProd").reset();
            alertify.set('notifier', 'position', 'top-left');
            alertify.success('Сообщение было отправлено, вам ответят в течении 24 часов');
        });
        return false;
    });
});


function ringGallery() {
    $.ajax({
        url: 'ringGallery',
        success: function (data) {
            $('#content').html(data);
        }
    });
}

function braceletsGallery() {
    $.ajax({
        url: 'braceletsGallery',
        success: function (data) {
            $('#content').html(data);
        }
    });
}

function necklacesGallery() {
    $.ajax({
        url: 'necklacesGallery',
        success: function (data) {
            $('#content').html(data);
        }
    });
}

function earringGallery() {
    $.ajax({
        url: 'earringGallery',
        success: function (data) {
            $('#content').html(data);
        }
    });
}