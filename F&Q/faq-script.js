var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}

        // JavaScript to toggle FAQ content
        document.querySelectorAll('.category-label').forEach(label => {
            label.addEventListener('click', function() {
                // Toggle active class on the clicked category
                this.nextElementSibling.classList.toggle('active');
            });
        });
