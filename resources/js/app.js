import './bootstrap';
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.querySelector(".menu-btn");
    const menu = document.querySelector(".menu");
    const dash = document.querySelector(".dash");
    const footer = document.querySelector(".logout_footer");
    const h5s = document.querySelectorAll(".h5s");
    const logout = document.querySelector(".footer a span")

    btn.onclick = () => {
        menu.classList.toggle('menu_hide');
        dash.classList.toggle("dash_hide");
        footer.classList.toggle("footer_hide")
        logout.classList.toggle("logout")
        h5s.forEach(h5 => {
            h5.classList.toggle("h5s_hide")
        });
    }
});
