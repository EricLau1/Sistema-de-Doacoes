var alerts = [
    "alert-info",       // 0
    "alert-warning",    // 1
    "alert-dark",       // 2
    "alert-primary",    // 3
    "alert-danger",     // 4
    "my-alert-warning"  // 5
];

const ALERT_MESSAGE = alerts[5];

function flash(message, alert) {

    return "<p class='alert " + alert + "'>" + message + "</p>"; 

}

