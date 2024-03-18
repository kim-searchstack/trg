// Wrap each word in a span with a delay
document.querySelectorAll('.word-animation').forEach((element, index) => {
    let words = element.textContent.split(' ');
    element.innerHTML = '';
    words.forEach((word, index) => {
        let span = document.createElement('span');
        span.classList.add('fade-in', 'slide-in');
    span.setAttribute('data-delay', 2 + index * 0.2); // Adds a universal delay of 2 seconds
    span.innerHTML = word + '&nbsp;'; // Use a non-breaking space to keep the space between words
    element.appendChild(span);
});
});