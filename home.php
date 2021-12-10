<?php


$html = '';
$html .= '<div class="container">
<div class="road">
<span id="time">05:00</span> 
</div>


</div>


<script>
 
/* Here explained about the timer when the game start */
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var fiveMinutes = 60 * 5,
        display = document.querySelector("#time");
    startTimer(fiveMinutes, display);
};

        const roadplace = document.querySelector(".road");
        let driver = { step: 5 };
        let keys = { ArrowUp: false, ArrowDown: false, ArrowLeft: false, ArrowRight: false };
        document.addEventListener("keydown", keyDown);
        document.addEventListener("keyup", keyUp);

        function keyDown(ev) {
            keys[ev.key] = true;

        }
        function keyUp(ev) {
            keys[ev.key] = false;
        }
        /* Here i used moveline function for moving the line inside the road */
        function movelines() {
            let road_lines = document.querySelectorAll(".line");
            road_lines.forEach(function (item) {
                if (item.y >= 700) {
                    item.y = item.y - 750;
                }
                item.y = item.y + driver.step;
                item.style.top = item.y + "px";
            })
        }
        function init() {
            driver.start = true;
            window.requestAnimationFrame(playarea);

            let my_car = document.createElement("div");
            my_car.setAttribute("class", "car");
            roadplace.appendChild(my_car);

            driver.x = my_car.offsetLeft;
            driver.y = my_car.offsetTop;

            for (x = 0; x < 5; x++) {

                let road_lines = document.createElement("div");
                road_lines.setAttribute("class", "line");
                road_lines.y = x * 150;
                road_lines.style.top = road_lines.y + "px";
                roadplace.appendChild(road_lines);

            }
            for (x = 0; x < 4; x++) {
                let motor_vehicle = document.createElement("div");
                motor_vehicle.setAttribute("class", "vehicle");
                motor_vehicle.y = ((x + 1) * 600) * -4;
                motor_vehicle.style.top = motor_vehicle.y + "px";


                motor_vehicle.style.left = Math.floor(Math.random() * 250) + "px";
                roadplace.appendChild(motor_vehicle);
            }
        }
        /* Iam using player area function for controlling the my car inside the boundary */
        function playarea() {
            let my_car = document.querySelector(".car");
            let road = roadplace.getBoundingClientRect();
            if (driver.start) {
                movelines();
                movingvehicles(my_car);
                if (keys.ArrowUp && driver.y > (road.top + 100)) {
                    driver.y = driver.y - driver.step;
                }

                if (keys.ArrowDown && driver.y < (road.bottom - 120)) {
                    driver.y = driver.y + driver.step;
                }
                if (keys.ArrowLeft && driver.x > 0) {
                    driver.x = driver.x - driver.step;
                }
                if (keys.ArrowRight && driver.x < (road.width - 64)) {
                    driver.x = driver.x + driver.step;
                }

                my_car.style.top = driver.y + "px";
                my_car.style.left = driver.x + "px";
                window.requestAnimationFrame(playarea);
            }
        }
        /* Iam using moving vehicle function for seting the vehicle in the correct path. */
        function movingvehicles(my_car) {
            let motor_vehicle = document.querySelectorAll(".vehicle");
            mycarboun = my_car.getBoundingClientRect();

            motor_vehicle.forEach(function (item) {
                othercarboun = item.getBoundingClientRect();



                if (!((mycarboun.bottom < othercarboun.top) ||
                    (mycarboun.top > othercarboun.bottom) ||
                    (mycarboun.left > othercarboun.right) ||
                    (mycarboun.right < othercarboun.left))) {

                    driver.start = false;
                }
                if (item.y > 500) {
                    item.y = -200;
                    item.style.left = Math.floor(Math.random() * 350) + "px";
                }
                item.y = item.y + driver.step;
                item.style.top = item.y + "px";
            })
        }



        init();





</script>';

echo $html;

?>