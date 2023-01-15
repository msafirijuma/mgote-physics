let themeToggler = document.querySelector("#themeToggler");
let darkMode = localStorage.getItem("dark-mode")
toggleDarkMode = () => {
    themeToggler.classList.replace("fa-toggle-off", "fa-toggle-on");
    localStorage.setItem("dark-mode", "enabled");

    let headerCarousel = document.querySelector(".header-carousel");
    let aboutSections = document.querySelectorAll(".about-section");
    let packageSection = document.querySelector(".package-section");
    let teamSection = document.querySelector(".team-section");
    let navbarSection = document.querySelector(".navbar");
    let backToTop = document.querySelector(".back-to-top");

    // navbar section
    if (!(navbarSection.classList.contains("navbar-dark-mode"))) {
        navbarSection.classList.add("navbar-dark-mode");
    } else {
        navbarSection.classList.remove("navbar-dark-mode");
    }


    // back to top button
    if (backToTop.classList.contains("back-to-top")) {
        backToTop.classList.add("back-to-top-dark-mode");
    } else {
        backToTop.classList.remove("navbar-dark-mode");
    }

    // header carousel section
    if (headerCarousel.classList.contains("header-carousel")) {
        headerCarousel.classList.add("header-carousel-dark-mode");
    } else {
        headerCarousel.classList.remove("header-carousel-dark-mode");
    }

    // about section
    for (let aboutSection of aboutSections) {
        if (aboutSection.classList.contains("about-section")) {
            aboutSection.classList.replace("about-section", "about-section-dark-mode");
        } else {
            aboutSection.classList.replace("about-section-dark-mode", "about-section");
        }
    }

    // package section
    if (packageSection.classList.contains("package-section")) {
        packageSection.classList.replace("package-section", "package-section-dark-mode");
    } else {
        packageSection.classList.replace("package-section-dark-mode", "package-section");
    }

    // team section
    if (teamSection.classList.contains("team-section")) {
        teamSection.classList.replace("team-section", "team-section-dark-mode");
    } else {
        teamSection.classList.replace("team-section-dark-mode", "team-section");
    }


}

toggleLightMode = () => {
    themeToggler.classList.replace("fa-toggle-on", "fa-toggle-off");

    let headerCarousel = document.querySelector(".header-carousel-dark-mode");
    let aboutSection = document.querySelector(".about-section-dark-mode");
    let packageSection = document.querySelector(".package-section-dark-mode");
    let teamSection = document.querySelector(".team-section-dark-mode");
    let navbarSection = document.querySelector(".navbar-dark-mode");
    let backToTop = document.querySelector(".back-to-top");

    // navbar section
    if ((navbarSection.classList.contains("navbar-dark-mode"))) {
        navbarSection.classList.remove("navbar-dark-mode")
    } else {
        navbarSection.classList.add("navbar-dark-mode")
    }

    // back to top button
    if (backToTop.classList.contains("back-to-top-dark-mode")) {
        backToTop.classList.remove("back-to-top-dark-mode")
    } else {
        backToTop.classList.add("back-to-top-dark-mode")
    }

    // header carousel section
    if (headerCarousel.classList.contains("header-carousel-dark-mode")) {
        headerCarousel.classList.remove("header-carousel-dark-mode")
    } else {
        headerCarousel.classList.add("header-carousel-dark-mode")
    }

    // about section
    if (aboutSection.classList.contains("about-section-dark-mode")) {
        aboutSection.classList.replace("about-section-dark-mode", "about-section")
    } else {
        aboutSection.classList.replace("about-section", "about-section-dark-mode")
    }

    // package section
    if (packageSection.classList.contains("package-section-dark-mode")) {
        packageSection.classList.replace("package-section-dark-mode", "package-section")
    } else {
        packageSection.classList.replace("package-section", "package-section-dark-mode")
    }

    // team section
    if (teamSection.classList.contains("team-section-dark-mode")) {
        teamSection.classList.replace("team-section-dark-mode", "team-section")
    } else {
        teamSection.classList.replace("team-section", "team-section-dark-mode")
    }

    localStorage.setItem("dark-mode", "disabled");
}

if (darkMode == "enabled") {
    toggleDarkMode();
}

// dark and light toggler
themeToggler.addEventListener("click", () => {
    window.location.reload();
    darkMode = localStorage.getItem("dark-mode");

    if (darkMode === "disabled") {
        toggleDarkMode();
    } else {
        toggleLightMode();
    }

    document.body.classList.toggle("dark");
})