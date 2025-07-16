<style>
.mouse {
    display: none;
    transition: 100ms;
    position: fixed;
    background-color: transparent;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    border: 1px solid #00b7ff;
    pointer-events: none;
    z-index: 10000;
}

.pointer {
    width: 30px;
    height: 30px;
    border-radius: 40% !important;
    transition: all ease-in-out 0.3s;

}
</style>

<div class="mouse"></div>

<script>
const mouse = document.querySelector(".mouse");
let isTouch = false;

// حرکت موس
function moveMouse(e) {
    if (isTouch) return;
    mouse.style.display = "block";
    mouse.style.top = `${e.clientY - 10}px`;
    mouse.style.left = `${e.clientX - 10}px`;
}

// تشخیص تاچ
function handleTouchStart() {
    isTouch = true;
    mouse.style.display = "none";
}

// تشخیص بازگشت موس
function handleMouseMoveOnce() {
    if (!isTouch) return;
    isTouch = false;
}

// رویدادها
document.addEventListener("mousemove", moveMouse);
document.addEventListener("touchstart", handleTouchStart);
document.addEventListener("mousemove", handleMouseMoveOnce);
</script>