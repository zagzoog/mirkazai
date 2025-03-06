(() => {
	'use strict';

	$( document ).ready( function () {
		// Update check functionality removed
	} );
} )();

function setCookie( cookieName, cookieValue, expirationDays ) {
	'use strict';
	const date = new Date();
	date.setTime( date.getTime() + ( expirationDays * 24 * 60 * 60 * 1000 ) ); // Convert days to milliseconds
	const expires = 'expires=' + date.toUTCString();
	document.cookie = cookieName + '=' + cookieValue + ';' + expires + ';path=/';
}

function getCookie( cookieName ) {
	'use strict';
	const name = cookieName + '=';
	const decodedCookie = decodeURIComponent( document.cookie );
	const cookieArray = decodedCookie.split( ';' );

	for ( let i = 0; i < cookieArray.length; i++ ) {
		let cookie = cookieArray[ i ];
		while ( cookie.charAt( 0 ) === ' ' ) {
			cookie = cookie.substring( 1 );
		}
		if ( cookie.indexOf( name ) === 0 ) {
			return cookie.substring( name.length, cookie.length );
		}
	}
	return '';
}
