

// SNOWFALL
function snow() {
    let snowflake = document.createElement("div");
    snowflake.className = "snow";
    snowflake.innerHTML = "❄";
    snowflake.style.left = Math.random() * window.innerWidth + "px";
    snowflake.style.fontSize = Math.random() * 12 + 8 + "px";
    snowflake.style.animationDuration = Math.random() * 4 + 4 + "s";
    document.body.appendChild(snowflake);

    setTimeout(() => {
        snowflake.remove();
    }, 9000);
}

setInterval(snow, 150);
