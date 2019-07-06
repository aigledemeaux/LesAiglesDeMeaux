var app = {
  init: function() {
    console.log('init');
    var button = $('.button-menu');
    var wrapper = $('.wrapper');
    $('a[href*="#"]:not([href="#"])').on('click', app.handleScroll);
    button.on('click', app.openCloseMenu);
    wrapper.on('click', app.closeMenu);
  },

  openCloseMenu: function (evt){
    console.log('click');
    var menu = $('.menu');
    menu.toggleClass('menu-open');

    var icone = $('.button-menu__icone');
    icone.toggleClass('rotate');

  },

  closeMenu: function (evt){
    console.log('click');
    var menu = $('.menu');
    menu.removeClass('menu-open');

    var icone = $('.button-menu__icone');
    icone.removeClass('rotate');

  },
  handleScroll: function(evt) {
    console.log($(this));
    var page = $(this).attr('href'); // Page cible
    var speed = 2000; // Durée de l'animation (en ms)
    $('html,body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
  }
}






$(app.init);

