'use strict';
// function to check if the user is already logged in
$(document).ready(function() {
	var loggedInUser = '';
	var url = window.location.href;
	loggedInUser = url.match(/userId=(.+)/)[1];
	hideButtons(loggedInUser);
});

// if the user is logged in, then buttons in the navbar will change accordingly
function hideButtons(loggedInUser) {
    if (loggedInUser !== userId) {
        $('#updateProfileBtn').hide();
        $('.editAdButton').hide();
    }
}
