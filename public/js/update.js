$(document).ready(function() {
        
    $.ajax({
        type: 'POST',
        url: url + 'tickets/getCredits',
    })
    .done(function(data) {
        tickets = $.parseJSON(data);
       $('#ticketsValue').html(tickets.toString()); 
    });

    $('#button').click(function() {
        $.ajax({
            type: 'POST',
            url: url + 'tickets/addcredits',
        })
        .done(function(data) {
            tickets = $.parseJSON(data);
            if (tickets ,$.isNumeric()) {
                $('#ticketsValue').html(tickets.toString()); 
            } else {
                console.log('foo');
            }
        });
    });
});