//lazy video 
const videos = document.querySelectorAll('.lazy-video');

const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const video = entry.target;
            video.src = video.dataset.src;
            observer.unobserve(video);
        }
    });
});
videos.forEach(video => observer.observe(video));