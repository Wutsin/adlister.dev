'use strict';

$(document).ready(function() {
	var loggedInUser = '';
	var url = window.location.href;
	loggedInUser = url.match(/userId=(.)/)[1];
	hideButtons(loggedInUser);
});
function hideButtons(loggedInUser) {
    if (loggedInUser !== userId) {
        $('#updateProfileBtn').hide();
        $('.editAdButton').hide();
    }
}
