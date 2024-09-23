setTimeout(function () {
    document.getElementById("scroll").style.display = "none";
}, 5000);

document.addEventListener('DOMContentLoaded', () => {
    const navLinks = document.querySelectorAll('header div a');
    const pages = document.querySelectorAll('.page');

    // Function to activate the target page
    function activatePage(targetPage) {
        navLinks.forEach(link => link.classList.remove('active'));
        pages.forEach(page => page.style.display = 'none');
        document.getElementById(targetPage).style.display = 'block';
        document.querySelector(`a[data-target="${targetPage}"]`).classList.add('active');
    }

    // Check URL parameter
    const urlParams = new URLSearchParams(window.location.search);
    const targetPage = urlParams.get('page');
    if (targetPage) {
        activatePage(targetPage);
    }

    // Add event listeners to navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetPage = e.target.getAttribute('data-target');
            activatePage(targetPage);
            history.pushState(null, '', `?page=${targetPage}`);
        });
    });
});