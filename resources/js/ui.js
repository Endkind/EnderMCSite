// #region Scroll To Top
const scrollToTop = document.getElementById("scroll-to-top");
const scrollToTopButton = document.getElementById("scroll-to-top-button");

window.addEventListener("scroll", () => {
    scrollToTop.classList.toggle("hidden", window.scrollY <= 100);
});

scrollToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
// #endregion

// #region Theme toggle
const themeToggle = document.getElementById("theme-toggle");
const themeToggleLight = document.getElementById("theme-toggle-light");
const themeToggleDark = document.getElementById("theme-toggle-dark");

const prefersDarkScheme = window.matchMedia(
    "(prefers-color-scheme: dark)"
).matches;
const savedTheme = localStorage.getItem("theme");

const applyTheme = (isDark) => {
    document.documentElement.classList.toggle("dark", isDark);
    themeToggleLight.classList.toggle("hidden", !isDark);
    themeToggleDark.classList.toggle("hidden", isDark);
};

if (savedTheme) {
    applyTheme(savedTheme === "dark");
} else {
    applyTheme(prefersDarkScheme);
    localStorage.setItem("theme", prefersDarkScheme ? "dark" : "light");
}

themeToggle.addEventListener("click", () => {
    const isDark = !document.documentElement.classList.contains("dark");
    applyTheme(isDark);
    localStorage.setItem("theme", isDark ? "dark" : "light");
});
// #endregion

// #region Navbar
document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const userMenuButton = document.getElementById("user-menu-button");
    const profileDropdown = document.getElementById("profile-dropdown");

    if (menuButton && mobileMenu) {
        menuButton.addEventListener("click", (event) => {
            event.stopPropagation();
            const isExpanded =
                menuButton.getAttribute("aria-expanded") === "true";
            menuButton.setAttribute("aria-expanded", !isExpanded);
            mobileMenu.classList.toggle("hidden");
        });
    }

    if (userMenuButton && profileDropdown) {
        userMenuButton.addEventListener("click", (event) => {
            event.stopPropagation();
            const isExpanded =
                userMenuButton.getAttribute("aria-expanded") === "true";
            userMenuButton.setAttribute("aria-expanded", !isExpanded);
            profileDropdown.classList.toggle("hidden");
        });
    }

    document.addEventListener("click", (event) => {
        if (
            menuButton &&
            mobileMenu &&
            !menuButton.contains(event.target) &&
            !mobileMenu.contains(event.target)
        ) {
            menuButton.setAttribute("aria-expanded", "false");
            mobileMenu.classList.add("hidden");
        }

        if (
            userMenuButton &&
            profileDropdown &&
            !userMenuButton.contains(event.target) &&
            !profileDropdown.contains(event.target)
        ) {
            userMenuButton.setAttribute("aria-expanded", "false");
            profileDropdown.classList.add("hidden");
        }
    });
});
// #endregion

// #region Accordion
function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);

    // SVG for Down icon
    const downSVG = `
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
  <path fill-rule="evenodd" d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
</svg>
`;

    // SVG for Up icon
    const upSVG = `
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
  <path fill-rule="evenodd" d="M11.78 9.78a.75.75 0 0 1-1.06 0L8 7.06 5.28 9.78a.75.75 0 0 1-1.06-1.06l3.25-3.25a.75.75 0 0 1 1.06 0l3.25 3.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" />
</svg>
`;

    // Toggle the content's max-height for smooth opening and closing
    if (content.style.maxHeight && content.style.maxHeight !== "0px") {
        content.style.maxHeight = "0";
        icon.innerHTML = upSVG;
    } else {
        content.style.maxHeight = content.scrollHeight + "px";
        icon.innerHTML = downSVG;
    }
}

window.toggleAccordion = toggleAccordion
// #endregion
