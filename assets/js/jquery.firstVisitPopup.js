/*
 * First Visit Popup jQuery Plugin version 1.2
 * Chris Cook - chris@chris-cook.co.uk
 */

(function ($) {
	'use strict';
	$.fn.firstVisitPopup = function (settings) {

		var $body = $('body');
		var $dialog = $(this);
		var $blackout;
		var setCookie = function (name, value, expires) {
			var date = new Date(),
			expires = 'expires=';
			date.setTime(date.getTime() + expires);
			expires += date.toGMTString();
			document.cookie = name + '=' + value + '; ' + expires + '; path=/';
		}
		var getCookie = function (name) {
			var allCookies = document.cookie.split(';'),
				cookieCounter = 0,
				currentCookie = '';
			for (cookieCounter = 0; cookieCounter < allCookies.length; cookieCounter++) {
				currentCookie = allCookies[cookieCounter];
				while (currentCookie.charAt(0) === ' ') {
					currentCookie = currentCookie.substring(1, currentCookie.length);
				}
				if (currentCookie.indexOf(name + '=') === 0) {
					return currentCookie.substring(name.length + 1, currentCookie.length);
				}
			}
			return false;
		}
		var showMessage = function () {
			$blackout.show();
			$dialog.show();
		}
		var hideMessage = function () {
			$blackout.hide();
			$dialog.hide();
			setCookie('ex' + settings.cookieName, 'true', settings.frequency);
		}
		$body.append('<div id="expedite-pop-blackout"></div>');
		$dialog.append('<a id="expedite-pop-close">&#10006;</a>');
		$blackout = $('#expedite-pop-blackout');

		if (getCookie('ex' + settings.cookieName)) {
			hideMessage();
		} else {
			showMessage();
		}
        var redirectPage = function (){
        event.preventDefault();
        hideMessage();
        var href = event.currentTarget.getAttribute('href')
        window.location= href;
    }
    $('.expedite-pop-up-message-content a').on('click', redirectPage);
    $(settings.showAgainSelector).on('click', showMessage);
		$body.on('click', '#expedite-pop-blackout, #expedite-pop-close', hideMessage);
	 };
})(jQuery);