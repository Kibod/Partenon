const logo = document.querySelector(".logo-container");
const header = document.querySelector(".main-header");
const sectionOne = document.querySelector(".intersection");

const headerOptions = {
    rootMargin: "-70px 0px 0px 0px"
};

const headerObserver = new IntersectionObserver (function (
    entries,
    sectionHeadObserver
) {
    entries.forEach(entry => {
        console.log(entry);
        if (!entry.isIntersecting) {
            logo.classList.add("logo-scrolled");
            header.classList.add("nav-scrolled");
            document.getElementById("slogo").src = "/storage/partenon-logo-small-test.png";
            document.getElementById("slogan").hidden = true;
        } else {
            logo.classList.remove("logo-scrolled");
            header.classList.remove("nav-scrolled");
            document.getElementById("slogo").src = "/storage/partenon-logo-test15.png";
            document.getElementById("slogan").hidden = false;
        }
    });
},
headerOptions);

headerObserver.observe(sectionOne);

const faders = document.querySelectorAll(".fade-in");

const appearOptions = {
    threshold: 0.5
}

const appearOnScroll = new IntersectionObserver (function (
    entries,
    appearOnScroll
) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return
        } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        }
    });
},
appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});
