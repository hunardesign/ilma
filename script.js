function run(){
  $(window).on('load',function(){
    setTimeout(function () {
      $('.loader').hide();
      $('.content').fadeIn();
    }, 1500);
   }); 
} 


/* Replacing div with code which allows reusability */ 

$.get("../navbarComponent.html", function(data){
    $(".navbar").replaceWith(data);
});

/* Replacing div with code which allows reusability */ 

$.get("../footerComponent.html", function(data){
    $(".footer").replaceWith(data);
});

/* Replacing div with code which allows reusability */ 
$.get("../aboutComponent.html", function(data){
  $(".aboutUs").replaceWith(data);
});


/* Replacing div with code which allows reusability */ 
$.get("../eventComponent.html", function(data){
  $(".eventSection").replaceWith(data);
});

/* Replacing div with code which allows reusability */ 
$.get("../contactComponent.html", function(data){
  $(".contactSection").replaceWith(data);
});
function interzum(){
  window.open("https://www.interzum.com/en/trade-fair/interzum-2023/tickets/buy-tickets/");

}

function visa(){
  window.open("https://www.interzum.com/en/trade-fair/travel-and-accommodation/visa-support/");
}
/*Changing Navbar based on scroll location*/ 
function scrollValue() {
    var navbar = document.getElementById('navbar');
    var scroll = window.scrollY;
    if (scroll < 200) {
        navbar.classList.remove('darkNav');
    } else {
        navbar.classList.add('darkNav');
    }
}

window.addEventListener('scroll', scrollValue);

/* Function to showcase subscription of newsletter*/ 
function mailSent(){
  console.log("Trying to say this");
    swal(
        'Subscribed to Newsletter ',
        'Your email was subscribed to our newsletter',
        'success'
      )
}

function tel(){
    window.open('tel:+917940053443', '_blank');

    // window.location.href = "";
}
function mailto(){
    window.open('mailto:ilma@live.in', '_blank');
    // window.location.href = "mailto:ilma@live.in";
}


const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    
    const slideMeUp = entry.target.querySelector('.slideMeUp');
    

    if (entry.isIntersecting) {
      slideMeUp.classList.add('slideupAnimation');
      
	  return; // if we added the class, exit the function
    }

    // We're not intersecting, so remove the class!
    // slideMeUp.classList.remove('slideupAnimation');
    
  });
});
observer.observe(document.querySelector('.slideMeUp-Wrapper'));

const events = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      
      const slideMeUp = entry.target.querySelector('.slideMeUp');
      
  
      if (entry.isIntersecting) {
        slideMeUp.classList.add('slideupAnimation');
        
        return; // if we added the class, exit the function
      }
  
    //   // We're not intersecting, so remove the class!
    //   slideMeUp.classList.remove('slideupAnimation');
      
    });
  });
events.observe(document.querySelector('.slideMeUp-Wrapper'));

barba.init({
  transitions: [{
    name: 'opacity-transition',
    leave(data) {
      return gsap.to(data.current.container, {
        opacity: 0
      });
    },
    enter(data) {
      return gsap.from(data.next.container, {
        opacity: 0
      });
    }
  }]
});