<style>
    #toTop {
        scale: 0;
        color: #fff;
        position: fixed;
        z-index: 99999;
        font-family: "hey2";
        font-size: 20px;
        padding: 10px 15px;
        border: none;
        border-radius: 15px;
        outline: 0px solid #00000060;
        background-color: #00b7ff;
        transition: all ease-in-out 0.2s;
        bottom: 12px;
        right: 10px;
    }

    #toTop:hover {
        background-color: #008cc4;
    }

    #toTop:active {
        outline: 1px solid #000000;
    }
</style>
<div>
    <button id="toTop" title="برو بالا">↑</button>
</div>
<script>
    const toTop = document.getElementById("toTop");
    window.addEventListener("scroll", () => {
        const scrolled = document.documentElement.scrollTop / (document.documentElement.scrollHeight -
                innerHeight) *
            100

        if (scrolled >= 80) {
            toTop.style.scale = 1;
        } else {
            toTop.style.scale = 0;
        }
    });
    toTop.addEventListener("click", () => {
        window.scrollTo(0, 0)
    })
</script>