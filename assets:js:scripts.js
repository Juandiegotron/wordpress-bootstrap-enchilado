//Menu sidebar mobile
var element = document.getElementById("nav");
function openNav() {
    element.classList.remove("d-lg");
}
function closeNav() {
    element.classList.add("d-lg");
}

//Slider
carousel = (function(){
    var box = document.querySelector('[data-main="slide"]');
    var next = box.querySelector('[data-action="next"]');
    var prev = box.querySelector('[data-action="prev"]');
    var items = box.querySelectorAll('[data-type="container"] > div');
    var counter = 0;
    var amount = items.length;
    var current = items[0];
    box.classList.add('active');
    console.log(amount);
    function navigate(direction) {
      current.classList.remove('slide-active');
      counter = counter + direction;
      if (direction === -1 && 
          counter < 0) { 
        counter = amount - 1; 
      }
      if (direction === 1 && 
          !items[counter]) { 
        counter = 0;
      }
      current = items[counter];
      current.classList.add('slide-active');
    }
    next.addEventListener('click', function(ev) {
      navigate(1);
    });
    prev.addEventListener('click', function(ev) {
      navigate(-1);
    });
    navigate(0);
  })();