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
                $( '.specialist-card' ).on( 'click', function () {
                    let title = $( this ).data( 'title' );
                    let description = $( this ).data( 'description' );
                    self.openModal( title, description );
                });

                $( '.close-modal-btn' ).on( 'click', function () {
                    self.closeModal();
                });
            },

            /**
             * Show the modal
             */
            openModal: function ( title, description ) {
                $( '#specialist-modal' ).removeClass( 'hidden' );
                $( '#modal-title').text( title );
                $( '#modal-description').text( description );
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
