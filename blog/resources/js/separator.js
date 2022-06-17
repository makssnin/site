let separator = document.querySelector('.separator');
let originalPhoto = document.querySelector('.photo-original');
let filteredPhoto = document.querySelector('.photo');
let photoContainer = document.querySelector('.photos');
let flag = false;

separator.addEventListener('mousedown', function (evt) {
    evt.preventDefault();
    flag = true;
}, false);

document.addEventListener('mouseup', function () {
    flag = false;
}, false);

photoContainer.addEventListener('mousemove', function (evt) {
    let res = evt.pageX - this.offsetLeft;

    if (flag && (res > 0) && (res < filteredPhoto.offsetWidth)) {
        separator.style.left = res + 'px';
        originalPhoto.style.width = res + 'px';
    }

}, false);
