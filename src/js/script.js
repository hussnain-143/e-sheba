( function ( $ ) {
    'use strict';
    $( document ).ready( function () {

        let MedicalScript = {

            /**
             * Initialize functions
             */
            init: function () {
                this.mobileToggle();
                this.bindModalEvents();
            },

            /**
             * Mobile menu toggle function 
             */
            mobileToggle: function () {
                let $toggle = $( '#mobile-toggle');
                let $menu = $( '#mobile-menu' );
                $toggle.on( 'click', function () {
                    $menu.toggleClass( 'hidden' );
                });
            },

            /**
             * Bind modal open/close events
             */
            bindModalEvents: function () {
                let self = this;

                $( '.open-modal-btn' ).on( 'click', function () {
                    let index = $( this ).data( 'index' ); 
                    self.openModal( index );
                });

              
                $('.close-modal-btn').on('click', function () {
                    self.closeModal();
                });
            },

            /**
             * Show the modal
             */
            openModal: function (index) {
                $( '#specialist-modal' ).removeClass( 'hidden' );
            },

            /**
             * Hide the modal
             */
            closeModal: function () {
                $( '#specialist-modal' ).addClass( 'hidden' );
            }

        };

        MedicalScript.init();
    } );
} )( jQuery );
