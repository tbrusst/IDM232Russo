var windowWidth = $(window).width();
var maxDeviceWidth = 768;
if (windowWidth > maxDeviceWidth) {
  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#about'
    })
    .setClassToggle('.about2', 'fade-in')
    /*.setClassToggle('.aboutInfo', 'slideLeft')*/
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#about'
    })
    .setClassToggle('.aboutText', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#dp'
    })
    .setClassToggle('#dp1', 'slideUp')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#dp'
    })
    .setClassToggle('#dp3', 'slideDown')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#dp'
    })
    .setClassToggle('.dpP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#fader'
    })
    .setClassToggle('#fader1', 'slideUp')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#fader'
    })
    .setClassToggle('#fader3', 'slideDown')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#fader'
    })
    .setClassToggle('.faderP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#kanye'
    })
    .setClassToggle('.kanyeP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#kanye1'
    })
    .setClassToggle('#kanye1', 'pushOver')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#kanye3'
    })
    .setClassToggle('#kanye3', 'pushOver')
    .addTo(controller);


  });

    //Server the desktop version
    //You can get the content with Ajax or load both and hide the other
} else {
  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#.ull'
    })
    .setClassToggle('.about2', 'fade-in')
    /*.setClassToggle('.aboutInfo', 'slideLeft')*/
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '.full'
    })
    .setClassToggle('.aboutText', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#about'
    })
    .setClassToggle('#dp1', 'slideUp')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#about'
    })
    .setClassToggle('#dp3', 'slideDown')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#about'
    })
    .setClassToggle('.dpP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int1'
    })
    .setClassToggle('#fader1', 'slideUp')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int1'
    })
    .setClassToggle('#fader3', 'slideDown')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int1'
    })
    .setClassToggle('.faderP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int2'
    })
    .setClassToggle('.kanyeP', 'slideRight')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int2'
    })
    .setClassToggle('#kanye1', 'pushOver')
    .addTo(controller);


  });

  $(document).ready(function(){
    console.log('ScrollMagic');
    var controller = new ScrollMagic.Controller();

    var ourScene = new ScrollMagic.Scene({
      triggerElement: '#int2'
    })
    .setClassToggle('#kanye3', 'pushOver')
    .addTo(controller);


  });

    //Load the mobile content - either with Ajax, or hide the desktop content
}
