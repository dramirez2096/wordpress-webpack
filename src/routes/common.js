export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('common');

    window.addEventListener('mousemove', panelEffect(event), false);

    function panelEffect(event){
        let mouseMove = false;
        let win = window;

        win.addEventListener('mousemove', () => {
            let mouseX = win.event.clientX;
            let mouseY = win.event.clientY;
            let width = window.innerWidth;
            let height = window.innerHeight;
            let horizontalMid = width / 2;
            let verticalMid = height /2;
            let positionX = mouseX - horizontalMid;
            let positionY = mouseY - verticalMid;
            
            let x = (positionX / horizontalMid) * 20;
            let y = (positionY / verticalMid) * 20;

            y = y * 1;

            let panel = document.querySelectorAll('.panel');

            [].forEach.call(panel, (panel) => {
                panel.style.transform = 'rotateY(' + x + 'deg) rotateX(' + y + 'deg)';
            });

            if(mouseX > 0){
                mouseMove = true;
            } else {
                mouseMove = false;
            }
        }, false);

        setInterval(() => {
            mouseMove ? mouseMove = false : mouseMove = true;
        }, 250);
    }
    
    console.log('end of common');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
