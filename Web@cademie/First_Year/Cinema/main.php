<style>@import url("https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;500&display=swap");
.container {
    display: grid;
    grid-template-columns: 300px 300px 300px;
    grid-gap: 50px;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
    font-family: 'Baloo Paaji 2', cursive;
}

.card {
    background-color: transparent;
    height: 37rem;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: rgba(0, 0, 0, 0.7);
    color: black;
    border: thick double black;
}

.card__name {
    margin-top: 15px;
    font-size: 1.5em;
}

.card__image {
    height: 160px;
    width: 160px;
    border-radius: 50%;
    border: 5px solid #272133;
    margin-top: 20px;
    box-shadow: 0 10px 50px black;
}

.draw-border {
    box-shadow: inset 0 0 0 4px black;
    color: #58afd1;
    -webkit-transition: color 0.25s 0.0833333333s;
    transition: color 0.25s 0.0833333333s;
    position: relative;
}

.draw-border::before,
.draw-border::after {
    border: 0 solid transparent;
    box-sizing: border-box;
    content: '';
    pointer-events: none;
    position: absolute;
    width: 0rem;
    height: 0;
    bottom: 0;
    right: 0;
}

.draw-border::before {
    border-bottom-width: 4px;
    border-left-width: 4px;
}

.draw-border::after {
    border-top-width: 4px;
    border-right-width: 4px;
}

.draw-border:hover {
    color: #ffe593;
}

.draw-border:hover::before,
.draw-border:hover::after {
    border-color: #eb196e;
    -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
    transition: border-color 0s, width 0.25s, height 0.25s;
    width: 100%;
    height: 100%;
}

.draw-border:hover::before {
    -webkit-transition-delay: 0s, 0s, 0.25s;
    transition-delay: 0s, 0s, 0.25s;
}

.draw-border:hover::after {
    -webkit-transition-delay: 0s, 0.25s, 0s;
    transition-delay: 0s, 0.25s, 0s;
}

.btn {
    background: none;
    border: none;
    cursor: pointer;
    line-height: 1.5;
    font: 700 1.2rem 'Roboto Slab', sans-serif;
    padding: 0.75em 2em;
    letter-spacing: 0.05rem;
    margin: 1em;
    width: 13rem;
}

.btn:focus {
    outline: 2px dotted #55d7dc;
}

.movie {
    width: 1rem;
}

.form_cont {
    background-color: transparent;
    height: 37rem;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: rgba(0, 0, 0, 0.7);
    color: black;
    border: thick double black;
    font-family: 'Baloo Paaji 2', cursive;
    margin-top: 15px;
    font-size: 1.5em;
}


</style>