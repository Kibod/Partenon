const logo = document.querySelector(".logo");
const header = document.querySelector(".main-header");
const sectionOne = document.querySelector(".intersection");

const sectionOneOptions = {
    rootMargin: "-70px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver (function (
    entries,
    sectionHeadObserver
) {
    entries.forEach(entry => {
        console.log(entry);
        if (!entry.isIntersecting) {
            logo.classList.add("logo-scrolled");
            header.classList.add("nav-scrolled");
            document.getElementById("slogo").src = "/storage/partenon-logo-small.png";
            document.getElementById("slogan").hidden = true;
        } else {
            logo.classList.remove("logo-scrolled");
            header.classList.remove("nav-scrolled");
            document.getElementById("slogo").src = "/storage/partenon-logo.png";
            document.getElementById("slogan").hidden = false;
        }
    });
},
sectionOneOptions);

sectionOneObserver.observe(sectionOne);