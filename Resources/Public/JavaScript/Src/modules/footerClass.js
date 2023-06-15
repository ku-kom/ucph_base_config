class Footer {
    constructor(footer) {
        this.footer = footer;
        this.list = this.footer.nextElementSibling;
        this.setAttr();
        this.addEventListeners();
    }

    /**
     * Set aria-expanded attribute and remove styles.
     */
    setAttr() {
        this.footer.setAttribute('aria-expanded', isMobile() ? 'false' : 'true');
        this.list.style.removeProperty('height');
        this.list.classList.remove('active');
    }

    /**
     * Slide footer columns open or closed.
     */
    toggleFooter() {
        if (!this.list.classList.contains('active')) {
            /**
             * Slide down
             */
            this.list.classList.add('active');
            this.list.style.height = 'auto';

            let height = this.list.clientHeight + 'px';
            this.list.style.height = '0';
            setTimeout(() => {
                this.list.style.height = height;
            }, 0);
            this.footer.setAttribute('aria-expanded', 'true');
        } else {
            /**
             * Slide up
             */
            this.list.style.height = '0';
            this.footer.setAttribute('aria-expanded', 'false');

            /**
             * Remove the `active` class when the animation ends
             */
            this.list.addEventListener('transitionend', () => {
                this.list.classList.remove('active');
            }, {
                once: true
            });
        }
    }

    addEventListeners() {
        this.footer.addEventListener('click', () => {
            this.toggleFooter();
        });

        window.addEventListener('resize', debounce(() => {
            this.setAttr();
        }, 150));

        window.addEventListener('orientationchange', debounce(() => {
            this.setAttr();
        }, 150));
    }
}