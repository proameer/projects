

// navbar Opacity

window.addEventListener("scroll", function() {
  if(window.scrollY > 150) {
    document.querySelector("#navbar").style.opacity = 0.9;
  } else {
    document.querySelector("#navbar").style.opacity = 1;
  }
});


// Smooth scrolling
$("#navbar a, .btn").on("click", function(event) {

  if(this.hash !== "") {
    event.preventDefault();

    const hash = this.hash;

    $("html, body").animate({scrollTop: $(hash).offset().top - 100}, 800);
  }
});


// form contact
function validateForm() {
  var name = document.forms["myform"]["name"].value;
  var email = document.forms["myform"]["email"].value;
  var subject = document.forms["myform"]["subject"].value;
  var message = document.forms["myform"]["message"].value;


  if (name == "" && email == "" && subject == "" && message == "") {
    alert("يجب ان تملئ الحقول");
   
  }
  else { 
 
     document.getElementById("myform").innerHTML = alert('تم الاسال بنجاح');
  }
 
 
}