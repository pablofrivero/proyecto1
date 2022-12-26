
document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

        element.addEventListener('click', function(e) {

            let nextEl = element.nextElementSibling;
            let parentEl = element.parentElement;

            if (nextEl) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEl);

                if (nextEl.classList.contains('show')) {
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEl.parentElement.querySelector(
                        '.submenu.show');
                    // if it exists, then close all of them
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                    }

                }
            }

        });
    })

});
document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.sidebar .nav-link2').forEach(function(element) {

        element.addEventListener('click', function(e) {

            let nextEle = element.nextElementSibling;
            let parentEle = element.parentElement;

            if (nextEle) {
                e.preventDefault();
                let mycollapse = new bootstrap.Collapse(nextEle);

                if (nextEle.classList.contains('show')) {
                    mycollapse.hide();
                } else {
                    mycollapse.show();
                    // find other submenus with class=show
                    var opened_submenu = parentEle.parentElement.querySelector(
                        '.submenu2.show');
                    // if it exists, then close all of them
                    if (opened_submenu) {
                        new bootstrap.Collapse(opened_submenu);
                    }

                }
            }

        });
    })

});
