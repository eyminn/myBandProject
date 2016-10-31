window.addEventListener('load', startApp);

function startApp() {
    var forward = document.getElementById("forward");
    var backward = document.getElementById("backward");
    var array = ["img/headerimg.jpg",
				 "img/headerimg2.jpg",
				 "img/headerimg3.jpg",
				 "img/headerimg4.jpg", ];
    var slide = document.getElementById("slide1");
    var counter = 0;

    forward.addEventListener("click", goForward);
    backward.addEventListener("click", goBackward);

    setInterval(goForward, 8000);

    function goForward() {
        counter = counter + 1;
        if (counter > 3) {
            counter = 0;
        }
        console.log("Ga vooruit");
        slide1.src = array[counter];
    }
    
        function goBackward() {
        counter = counter - 1;
        if (counter < 0) {
            counter = 3;
        }
        console.log("Ga terug");
        slide1.src = array[counter];
    }
}