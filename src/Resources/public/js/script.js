let popup = document.querySelector('.form-popup');
popup.querySelector('.success.fp-btn').addEventListener('click', () => {
    popup.classList.add('fp-saved');
    document.html.classList.remove('noScroll');
    document.body.classList.remove('noScroll');
})