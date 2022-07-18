// halaman pembukaan
const pembukaan = document.getElementById('pembukaan');
const content = document.getElementById('content');

$("#btn-buka").click(function () {
  $("#pembukaan").hide(),
    content.classList.toggle('d-none');

});

// animation AOS
AOS.init({
  offset: 200,
  duration: 1500,
});

// gsap
gsap.from('.nama-mempelai', {
  duration: 2,
  y: 100,
  opacity: 0,
});
gsap.from('.btn-buka', {
  duration: 2,
  delay: .5,
  y: 100,
  opacity: 0,
});


//  owl carousel
const $owlCarousel = $(".owl-header").owlCarousel({
  items: 1,
  loop: true,
  autoplay: true,
  autoplayTimeout: 4500,

  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 450,
  responsiveClass: true,


});
$(document).ready(function () {

  $('.owl-doa').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4500,
    smartSpeed: 450,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      992: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  });
});

// audio
window.addEventListener("DOMContentLoaded", event => {
  const audio = document.querySelector("audio");
  audio.volume = 0.4;
  audio.play();
});
const button = document.querySelector("#button");
const icon = document.querySelector("#button > #icon-play");
const audio = document.querySelector("audio");

button.addEventListener("click", () => {
  if (audio.paused) {
    audio.volume = 0.4;
    audio.play();
    icon.src = "icons/ic_music_on.svg";

  } else {
    audio.pause();
    icon.src = "icons/ic_music_mute.svg";
  }
  button.classList.add("fade");
});


// navigation

$(document).ready(function () {

  $(document).on("scroll", onScroll);

  //smoothscroll
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    $(document).off("scroll");

    $('a').each(function () {
      $(this).removeClass('tab-active ');
    })
    $(this).addClass('tab-active ');

    var target = this.hash,
      menu = target;
    $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top + 2
    }, 500, 'swing', function () {
      window.location.hash = target;
      $(document).on("scroll", onScroll);
    });
  });
});

function onScroll(event) {
  var scrollPos = $(document).scrollTop();
  $('#tab-nav-container a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() >
      scrollPos) {
      $('#tab-nav-container a').removeClass("tab-active ");
      currLink.addClass("tab-active ");
    } else {
      currLink.removeClass("tab-active ");

    }
  });
}
//scroll up 
$(function () {
  var header = $(".scroll-up");


  // scroll up
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      header.addClass('display');


    } else if (scroll <= 100) {
      header.removeClass('display');

    }
  });


});

// TIMER

// Set the date we're counting down to
var countDownDate = new Date("Aug 6, 2021 09:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("timer-akad").innerHTML = days + " hari " + hours + "jam " +
    minutes + "menit " + seconds + "detik ";

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer-akad").innerHTML = "acara sudah di laksanakan";
  }
}, 1000);

// Set the date we're counting down to
var countDownDateResepsi = new Date("Aug 8, 2021 09:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function () {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDateResepsi - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Output the result in an element with id="demo"
  document.getElementById("timer-resepsi").innerHTML = days + " hari " + hours + "jam " +
    minutes + "menit " + seconds + "detik ";

  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer-resepsi").innerHTML = "acara sudah di laksanakan";
  }
}, 1000);


// GALLERY
var lightbox = new SimpleLightbox('.gallery a', {

  captions: true,

});




// form
const scriptURL = 'https://script.google.com/macros/s/AKfycbwNrPdJ3mzd33N-75-icPYg1LgIgm0bF8btU4ZlgZztAJqOaBjFoyvfSznyyMcJvaNm/exec';
const form = document.forms['form-eka-wedding'];
const btnKirim = document.querySelector('.btn-kirim');
const btnLoading = document.querySelector('.btn-loading');
const myAlert = document.querySelector('.my-alert');

form.addEventListener('submit', e => {
  e.preventDefault();
  // ketika tombol submit diklik
  // tampilkan tombol loading, hilangkan tombol kirim
  btnLoading.classList.toggle('d-none');
  btnKirim.classList.toggle('d-none');






  fetch(scriptURL, {
      method: 'POST',
      body: new FormData(form)
    })
    .then(response => {
      // tampilkan tombol kirim, hilangkan tombol loading
      btnLoading.classList.toggle('d-none');
      btnKirim.classList.toggle('d-none');

      // tampilkan alert
      myAlert.classList.toggle('d-none');

      // reset form nya
      form.reset();
      console.log('Success!', response)

    })
    .catch(error => console.error('Error!', error.message))
})




// partikel
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 120,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#c6ad76"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 1,
      "random": true,
      "anim": {
        "enable": true,
        "speed": 1,
        "opacity_min": 0,
        "sync": false
      }
    },
    "size": {
      "value": 5,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 4,
        "size_min": 0.3,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "top-right",
      "random": true,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 600
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "bubble"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 250,
        "size": 0,
        "duration": 2,
        "opacity": 0,
        "speed": 3
      },
      "repulse": {
        "distance": 400,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
var count_particles, stats, update;
stats = new Stats;
stats.setMode(0);
stats.domElement.style.position = 'absolute';
stats.domElement.style.left = '0px';
stats.domElement.style.top = '0px';
document.body.appendChild(stats.domElement);
count_particles = document.querySelector('.js-count-particles');
update = function () {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);