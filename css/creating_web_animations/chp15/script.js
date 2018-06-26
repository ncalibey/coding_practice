document.addEventListener('DOMContentLoaded', function () {
  function removeActiveLinks() {
    for (var i = 0; i < links.length; i += 1) {
      links[i].classList.remove('active');
    }
  }

  function changePosition(link) {
    var position = link.getAttribute('data-pos');
    var translateValue = 'translate3d(' + position + ', 0px, 0)';

    wrapper.style.transform = translateValue;
    link.classList.add('active');
  }

  function setClickedItem(e) {
    removeActiveLinks();

    var clickedLink = e.target;
    activeLink = clickedLink.itemID;

    changePosition(clickedLink);
  }

  var links = document.querySelectorAll('.itemLinks');
  var wrapper = document.querySelector('#wrapper');
  var activeLink = 0;
  var link;

  for (var i = 0; i < links.length; i += 1) {
    link = links[i];
    link.addEventListener('click', setClickedItem);
    link.itemID = i;
  }

  links[activeLink].classList.add('active');
});
