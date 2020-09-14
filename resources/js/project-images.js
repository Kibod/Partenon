const modImages = document.getElementsByClassName('modal-images');
const count = modImages.length;

function display(element) {
  const src = element.getAttribute('src');
  Array.from(modImages).forEach(image => {
    if (image.firstElementChild.getAttribute('src') === src) {
      image.setAttribute('id', 'active');
      image.style.display = "block";
      document.getElementById('close').style.display = "block";
      document.getElementById('next').style.display = "block";
      document.getElementById('prev').style.display = "block";
    } else {
      image.removeAttribute('id');
    }
  });
}

function closeModal() {
  document.getElementById('active').style.display = "none";
  document.getElementById('close').style.display = "none";
  document.getElementById('next').style.display = "none";
  document.getElementById('prev').style.display = "none";
}

function next() {
  const src = document.getElementById('active').firstElementChild.getAttribute('src');
  let i = 0;
  while (modImages[i].firstElementChild.getAttribute('src') !== src) {
    i++
  };
  if (i === count-1) {
    i = -1;
    modImages[i+1].setAttribute('id', 'active');
    modImages[i+1].style.display = "block";
    modImages[count-1].removeAttribute('id');
    modImages[count-1].style.display = "none";
   } else {
    modImages[i+1].setAttribute('id', 'active');
    modImages[i+1].style.display = "block";
    modImages[i].removeAttribute('id');
    modImages[i].style.display = "none";
  }
}

function previous() {
  const src = document.getElementById('active').firstElementChild.getAttribute('src');
  let i = 0;
  while (modImages[i].firstElementChild.getAttribute('src') !== src) {
    i++
  };
  if (i === 0) {
    i = count-1; 
    modImages[i].setAttribute('id', 'active');
    modImages[i].style.display = "block";
    modImages[0].removeAttribute('id');
    modImages[0].style.display = "none";
  } else { 
    modImages[i-1].setAttribute('id', 'active');
    modImages[i-1].style.display = "block";
    modImages[i].removeAttribute('id');
    modImages[i].style.display = "none";
  }
}