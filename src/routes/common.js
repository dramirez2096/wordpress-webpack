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
            let width = win.innerWidth;
            let height = win.innerHeight;
            let horizontalMid = width / 2;
            let verticalMid = height / 2;
            let positionX = mouseX - horizontalMid;
            let positionY = mouseY - verticalMid;
            
            let x = (positionX / horizontalMid) * 13;
            let y = (positionY / verticalMid) * 13;

            y = y * 1;

            let panel = document.querySelectorAll('.panel');

            [].forEach.call(panel, (panel) => {
                panel.style.transform = 'perspective(' + width +'px) rotateY(' + x + 'deg) rotateX(' + -y + 'deg)';
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

    let i = 1;
    let numHead = document.querySelectorAll('.entry-title');

    [].forEach.call(numHead, (h2) => {
        if (i.toString().length < 2 ){
            h2.innerHTML = '0' + i++;
        } else {
            h2.innerHTML = i ++;
        }
    })
    
    console.log('end of common');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
