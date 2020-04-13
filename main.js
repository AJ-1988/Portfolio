// JS Document Ready Function
document.addEventListener("DOMContentLoaded", () => {

  // Mobile Nav
  $(".burger-nav").on("click", function() {
    console.log("click");
    $("header nav").toggleClass("mobile-nav")
  })

  // JS Scroll Loading Bar Chart
  let skillsOffset = document.getElementById('my-skills');
  window.addEventListener("scroll", () => {
    if (window.pageYOffset >= skillsOffset.offsetTop -300) {
      let barGraphInner = document.querySelectorAll('.bar-graph-inner')
      for (var i = 0; i < barGraphInner.length; i++) {
        barGraphInner[i].style.width = barGraphInner[i].dataset.percent;
      }
    }
  })

  // Particle JS
  particlesJS.load('particles-js', 'particles.json', function() {
    console.log('callback - particles.js config loaded');
  })

  // Jquery Smooth Scroll
  var jScrollOffset = 30;

  $(".scroll").on("click", function(e) {
    e.preventDefault();
    var scrollPos =  $(this.hash).offset().top - jScrollOffset;
    $(window).resize(function() {
      scrollPos =  $(this.hash).offset().top - jScrollOffset;
    })
    $("body, html").animate(
      {scrollTop: scrollPos}
      , 1000)
  })

  // Jquery Nav Selector
  var jSelectorOffset = 30;

  $(window).on("scroll", function() {
    var scrollLocation = $(this).scrollTop();
    $(".scroll").each(function() {
      var sectionOffset = $(this.hash).offset().top - jSelectorOffset;
      $(window).resize(function() {
        var  sectionOffset = $(this.hash).offset().top - jSelectorOffset;
      });
      if (sectionOffset <= scrollLocation) {
        $(this).parent().addClass("active");
        $(this).parent().siblings().removeClass("active");
        $(this).addClass("active-anchor");
        $(this).parent().siblings().children().removeClass("active-anchor");
      }
    })
  })

  // Jquery Sticky Nav
  var stickyOffset = 30;

  var topOffset = $("#top").offset().top + stickyOffset;
  $(window).resize(function() {
    topOffset = $("#top").offset().top + stickyOffset;
  });
  $(window).on("scroll", function() {
    var scrollPos = $(this).scrollTop();
    if (scrollPos >= topOffset) {
      $("nav").addClass("sticky-nav")
    } else {
      $("nav").removeClass("sticky-nav")
    }
  })

  // JS Modal
  const modalExpand = document.querySelectorAll(".modal-expand");
  const modal = document.getElementById('modal');
  const modalContent = document.getElementById('modal-content');
  const modalClose = document.getElementById("modal-close");
  const modalLink = document.getElementById("modal-link");

  for (var i = 0; i < modalExpand.length; i++) {
    modalExpand[i].addEventListener("click", (e) => {
      const modalTarget = e.target.nextSibling.getAttribute("src");
      modalContent.innerHTML = '<img src= "' + modalTarget + '">';
      modal.style.display = "block";
    })
  }

  for (var i = 0; i < modalExpand.length; i++) {
    modalExpand[i].addEventListener("click", (e) => {
      const modalLinkTarget = e.target.nextSibling.nextSibling.getAttribute("href");
      modalLink.innerHTML = '<a href= "' + modalLinkTarget + '" target="_blank">' + modalLinkTarget + '</a>';
    })
  }

  modalClose.addEventListener("click", () => {
    modal.style.display = "none";
  })

  window.addEventListener("click", (e) => {
    if (e.target == modal) {
      modal.style.display = "none";
    }
  })

}) // Document Ready End

//Google Map Api

  initMap();

  function initMap() {
     var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 35.481918, lng: -97.508469},
        zoom: 6,
        // Map Display Controls
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false,
        gestureHandling: 'greedy',
        // Map Styles
        styles: [
        {elementType: 'geometry', stylers: [{color: '#141413'}]},
        {elementType: 'labels.text.stroke', stylers: [{color: '#000000'}]},
        {elementType: 'labels.text.fill', stylers: [{color: '#9999A1'}]},
        {
          featureType: 'administrative.locality',
          elementType: 'labels.text.fill',
          stylers: [{color: '#EAEAEA'}]
        },
        {
          featureType: 'poi',
          elementType: 'labels.text.fill',
          stylers: [{color: '#EAEAEA'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'geometry',
          stylers: [{color: '#2E2E30'}]
        },
        {
          featureType: 'poi.park',
          elementType: 'labels.text.fill',
          stylers: [{color: '#9999A1'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'road',
          elementType: 'geometry.stroke',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'road',
          elementType: 'labels.text.fill',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'geometry.stroke',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'road.highway',
          elementType: 'labels.text.fill',
          stylers: [{color: '#25DB92'}]
        },
        {
          featureType: 'transit',
          elementType: 'geometry',
          stylers: [{color: '#2f3948'}]
        },
        {
          featureType: 'transit.station',
          elementType: 'labels.text.fill',
          stylers: [{color: '#d59563'}]
        },
        {
          featureType: 'water',
          elementType: 'geometry',
          stylers: [{color: '#9999A1'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.fill',
          stylers: [{color: '#9999A1'}]
        },
        {
          featureType: 'water',
          elementType: 'labels.text.stroke',
          stylers: [{color: '#9999A1'}]
        }
      ]
      });
      // Map Marker
      var marker = new google.maps.Marker({
       position: {lat: 36.114647, lng: -115.172813},
       map: map,
       title: 'Hello All!'
     });
    }
