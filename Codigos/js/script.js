const projectItems = document.querySelectorAll('.project-item');

for (let i = 0; i < projectItems.length; i++) {
  projectItems[i].addEventListener('click', function() {
    if (this.classList.contains('fullscreen')) {
      this.classList.remove('fullscreen');
    } else {
      this.classList.add('fullscreen');
    }
  });
}



