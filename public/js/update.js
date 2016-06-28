$(document).ready(function() {

    $('#button').click(function() {
        $.ajax({
            type: 'POST',
            url: url + 'tickets/addcredits',
        })
        .done(function(data) {
            tickets = $.parseJSON(data);
           $('#ticketsValue').html(tickets.toString()); 
        });
    });
});