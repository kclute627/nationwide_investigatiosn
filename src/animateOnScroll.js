document.addEventListener("DOMContentLoaded", () => {

    const elements = document.querySelectorAll(".js-scroll");
    const options = {
        root: null,
        rootMargin: '100px',
        threshold: 1
    }
    const callbacks = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scrolled');
            }
        });
    }
    let observer = new IntersectionObserver(callbacks, options);
    elements.forEach(element => {
        observer.observe(element);
    });


})