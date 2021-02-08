wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'sport-quote',
    label: 'Sport Quote'
} );

wp.domReady( function() {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );