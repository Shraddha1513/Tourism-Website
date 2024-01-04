(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);


   // Newsletter Form Validation
   document.getElementById("Newsletter").onsubmit=function(e) {

    emailValidation();
    
    if(
      emailValidation() == true){
      return true;
    }else{
      return false;
    }
    }
    
     // Email Address Validation
     var emailA= document.getElementById("emailA");;
     var emailValidation= function(){
    
      emailAValue=emailA.value.trim(); 
       validemailA=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
       emailAErr=document.getElementById('emailA-err');
    
       if(emailAValue=="")
       {
        emailAErr.innerHTML="Email Address is required";
    
       }else if(!validemailA.test(emailAValue)){
         emailAErr.innerHTML="Email Address must be invalid formate with @ symbol";
       }else{
         emailAErr.innerHTML="";
         return true;
       }
    
     }
    
    emailA.oninput=function(){
    
       emailValidation();
    }
    
    // validation on submit
    
    
    document.getElementById("Newsletter").onsubmit=function(e){
    
        emailValidation();
       
      
        if(emailAddressValidation() == true ){
          return true;
        }else{
          return false;
        }
      }
    

  
// ID Proof - Booking Form
    function generateAdditionalFields() {
    const peopleCount = parseInt(document.getElementById('people').value, 10);
    const container = document.getElementById('additionalFieldsContainer');
    container.innerHTML = '';
  
    for (let i = 1; i <= peopleCount; i++) {
      const personContainer = document.createElement('div');
      personContainer.innerHTML = `
     
      <div class="row">
        <h3 class="text-white">Person ${i}</h3>
      
        <div class="col-md-6">
       <div class="form-floating">
        <input type="text" id="name${i}"  class="form-control bg-transparent" id="name1" placeholder="Full Name" name="name" required>
        <div class="error" id="first-name-err"></div>
        <label for="name${i}">Name:</label>
    </div>
  </div>
             
  <div class="col-md-6">
       <div class="form-floating">
        <input type="number" id="age${i}" class="form-control bg-transparent" id="Age1" placeholder="Age" name="Age" required>
        <div class="error" id="first-name-err"></div>
        <label for="age${i}">Age:</label>
    </div>
  </div>

  <div class="col-md-6">
       <div class="form-floating proof">
        <input type="file" id="idProof${i}" class="" id="ID_proof1" placeholder="ID-proof" name="ID_proof">
        <div class="error" id="first-name-err"></div>
        <label for="idProof${i}">ID Proof:</label>
    </div>
  </div>

  <div class="col-md-6">
       <div class="form-floating proof">
        <input type="file" id="passport${i}" class="" id="Passport1" placeholder="Passport"  name="Passport">
        <div class="error" id="first-name-err"></div>
        <label for="passport${i}">Passport:</label>
    </div>
  </div>

  </div>

      `;
  
      container.appendChild(personContainer);
    }
  }
  

  // booking form next and back button
  
    function showForm(formId) {
      document.querySelectorAll('.form-container').forEach(container => {
        container.style.display = 'none';
      });

      document.getElementById(formId).style.display = 'block';
    }

    function nextForm(nextFormId) {
      showForm(nextFormId);
    }

    function prevForm(prevFormId) {
      showForm(prevFormId);
    }

    // Show the first form initially
    showForm('formDiv1');


