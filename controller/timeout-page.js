window.onload=function() {
    const bcontainer = document.getElementById("background-container");
    const output = document.getElementById("output");

    bcontainer.style.height = window.innerHeight + "px";
    bcontainer.style.width = window.innerWidth + "px";

    let xPos = 10;
    let yPos = 10;
    let xSpeed = 3;
    let ySpeed = 3;

    function update() {
        output.style.top = yPos + "px";
        output.style.left = xPos + "px";
    }

    setInterval(() => {
        if (xPos + output.clientWidth >= window.innerWidth || xPos <= 0) {
            xSpeed = -xSpeed;
        }
        if (yPos + output.clientHeight >= window.innerHeight || yPos <= 0) {
            ySpeed = -ySpeed;
        }
        xPos += xSpeed;
        yPos += ySpeed;
        update();
    }, 1000/100);

    document.onclick = function() {
        location.href = "../view/index.php";
    }
}