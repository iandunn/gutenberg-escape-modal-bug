/**
 * WordPress dependencies
 */
const { render, createElement } = wp.element;

/**
 * Internal dependencies
 */
import GutenbergEscapeModalBug from './main';

( function() {
	const props = {};

	const container = document.createElement( 'div' );
	container.id    = 'gemb-container';

	document.getElementById( 'wpbody-content' ).appendChild( container );

	render(
		createElement( GutenbergEscapeModalBug, props ),
		document.getElementById( 'gemb-container' )
	);
}() );
