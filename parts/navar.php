<div id="scroll-bar"></div>
<style>
#scroll-bar {
    height: 2px;
    background: #00b7ff;
    width: 0;
    position: fixed;
    bottom: 0;
    left: 0;
    z-index: 9999;
}
</style>
<script>
window.onscroll = () => {
    const scrolled = document.documentElement.scrollTop / (document.documentElement.scrollHeight - innerHeight) *
        100;
    document.getElementById("scroll-bar").style.width = scrolled + "%";
};
</script>