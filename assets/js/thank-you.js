const colors = [
"#ff4d00",
"#ffb300",
"#ffffff",
"#22c55e",
"#0ea5e9"
];

function createConfetti(){

    for(let i=0;i<120;i++){

        const c=document.createElement("div");

        c.className="confetti";

        c.style.left=Math.random()*100+"vw";

        c.style.background=
        colors[Math.floor(Math.random()*colors.length)];

        c.style.animationDuration=
        (Math.random()*3+2)+"s";

        c.style.width=
        (Math.random()*10+6)+"px";

        c.style.height=
        c.style.width;

        document.body.appendChild(c);

        setTimeout(()=>{
            c.remove();
        },6000);

    }

}

window.addEventListener("load",createConfetti);
