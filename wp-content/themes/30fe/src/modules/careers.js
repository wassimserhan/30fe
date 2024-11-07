window.addEventListener('scroll', function () {
    const listItems = document.querySelectorAll('#myList li');

    listItems.forEach((li, index) => {
        const liTop = li.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        console.log(liTop);

        if (liTop > 250) {
            li.classList.add('scrolled');
        } else {
            li.classList.remove('scrolled');
        }
    });
});
