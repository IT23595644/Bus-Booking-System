document.addEventListener('DOMContentLoaded', () => {
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
        star.addEventListener('click', () => {
            stars.forEach(s => s.classList.remove('selected'));
            star.classList.add('selected');
            star.previousElementSibling?.classList.add('selected');
            star.previousElementSibling?.previousElementSibling?.classList.add('selected');
            star.previousElementSibling?.previousElementSibling?.previousElementSibling?.classList.add('selected');
            star.previousElementSibling?.previousElementSibling?.previousElementSibling?.previousElementSibling?.classList.add('selected');
        });
    });
});
function submit()
{
    alert("Your review is upload sucessfully");
}