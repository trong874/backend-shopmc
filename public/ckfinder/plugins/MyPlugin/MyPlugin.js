CKFinder.define( function () {

    var MyPlugin = {
        init: function ( finder ) {
            finder.on( 'app:ready', function ( evt ) {
                finder.request( 'dialog:info', {
                    msg: 'Welcome to CKFinder!'
                } );
            } );
        }
    };

    return MyPlugin;
} );
