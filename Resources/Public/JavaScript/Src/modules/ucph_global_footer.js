/* ========================================================================
 * Copyright 2023 Nanna Ellegaard
 * University of Copenhagen, FA Communications
 * ========================================================================*/

class Footer {
    constructor(footer) {
        this.footer = footer;
        this.list = this.footer.nextElementSibling;
        this.setAriaAttr();
        this.addEventListeners();
    }

    /**
     * Detect screen size.
     * @returns boolean.
     */
    isMobile() {
        return window.matchMedia('(max-width: 767px)').matches;
    }

    /**
     * Add attributes.
     */
    setAriaAttr() {
        //console.log(this.isMobile());
        this.footer.setAttribute('aria-expanded', this.isMobile() ? 'false' : 'true');
    }

    /**
     * Clear footer.
     */
    resetFooter() {
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
            this.resetFooter();
            this.setAriaAttr();
        }, 150));

        window.addEventListener('orientationchange', debounce(() => {
            this.resetFooter();
            this.setAriaAttr();
        }, 150));
    }
}
export { Footer };