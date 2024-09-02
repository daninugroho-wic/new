var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");

function opentab(tabname) {
    for (tablink of tablinks) {
        tablink.classList.remove("active-link");
    }
    for (tabcontent of tabcontents) {
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

var sidemeu = document.getElementById("sidemenu");
var menuicon = document.getElementById("menuicon");

function openmenu() {
    sidemeu.style.right = "0";
    menuicon.classList.add("hide");
}

function closemenu() {
    sidemeu.style.right = "-200px";
    menuicon.classList.remove("hide");
}
document.getElementById('seeMoreBtn').addEventListener('click', function (e) {
    e.preventDefault();
    const hideableItems = document.querySelectorAll('.hideable');
    hideableItems.forEach(function (item) {
        if (item.style.display === 'none') {
            item.style.display = 'block';
            document.getElementById('seeMoreBtn').textContent = 'See less';
        } else {
            item.style.display = 'none';
            document.getElementById('seeMoreBtn').textContent = 'See more';
        }
    });
});