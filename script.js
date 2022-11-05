

function run(){
    console.log('function Called')
    // $('.content').imagesLoaded({ background: true }, function() {
    //     console.log('images loaded')
    //     setTimeout(removeLoader, 1500);
    //   });
    imagesLoaded( document.querySelector('.content'), function( instance ) {
        console.log('all images are loaded');
        setTimeout(removeLoader, 500);
      });
 }

 function removeLoader(){
    
    let loader = document.querySelector(".loader");
    let content = document.querySelector(".content");
    console.log("Removing Loader");
    loader.style.display = 'none' 
    content.style.display = 'block';
    
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