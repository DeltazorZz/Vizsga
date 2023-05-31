class TesztView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        szuloElem.append(`
<div id="tarolo">
    <div id="kerdes">${elem.kerdes}</div>
    <div id="valasztarolo">
              
        <button id="v1">${elem.v1}</button>
        <button id="v2">${elem.v2}</button>
        <button id="v3">${elem.v3}</button>
        <button id="v4">${elem.v4}</button>
  

    </div>
</div>
`);
        this.valasz1 = $("#v1");
        this.valasz2 = $("#v2");
        this.valasz3 = $("#v3");
        this.valasz4 = $("#v4");

        this.valasz1.on("click", () => {
            this.Ellenorzes("v1");
        });

        this.valasz2.on("click", () => {
            this.Ellenorzes("v2");
        });

        this.valasz3.on("click", () => {
            this.Ellenorzes("v3");
        });

        this.valasz4.on("click", () => {
            this.Ellenorzes("v4");
        });
    }
    Ellenorzes(valasz) {
        console.log("valami",this.#elem.helyes)
        if (valasz == this.#elem.helyes) {
            const selector = "#" + valasz;
            console.log(selector);
            $(selector).addClass("correct");
        } else {
            const selector = "#" + valasz;
            $(selector).addClass("wrong");
        }
    }
}
export default TesztView;
