window.addEventListener("DOMContentLoaded", (e)=>{
  const btnToggle = document.querySelector(".toggle_btn");
  const btnToggleIcon = document.querySelector(".toggle_btn i");
  const dropDownMenu = document.querySelector(".dropdown_menu");

  btnToggle.onclick = function(){
      dropDownMenu.classList.toggle('open');
      const isOpen = dropDownMenu.classList.contains('open');

      btnToggleIcon.classList = isOpen 
      ? 'fa-solid fa-xmark' 
      : 'fa-solid fa-bars'
  }


  const slider = document.querySelector(".slider");
  const slides = document.querySelectorAll(".slide");
  const pagination = document.querySelector(".pagination");

  let currentIndex = 0;

  function updateSlider() {
    const newTransformValue = -currentIndex * 100 + "%";
    slider.style.transform = "translateX(" + newTransformValue + ")";
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    updateSlider();
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    updateSlider();
  }
  

  setInterval(nextSlide, 5000); // Change slide every 3 seconds (adjust as needed)
});