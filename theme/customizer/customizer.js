( function( $ ) {

  wp.customize( 'blogname', function( value ) {
    value.bind( function( to ) {
      $( '.wp-blogname' ).html( to );
    } );
  } );
  
  wp.customize( 'blogdescription', function( value ) {
    value.bind( function( to ) {
      $( '.wp-blogdescription' ).html( to );
    } );
  } );

} )( jQuery );