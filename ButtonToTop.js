window.onscroll = function() { scrollFunction(); };

function scrollFunction() {
  const button = document.getElementById("backToTop");
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
}

function topFunction() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth' // This enables smooth scrolling
    });
  }
  
  