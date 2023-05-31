import TesztView from "../View/TesztView.js";

class TesztekView {
    constructor(tomb, szuloElem) {
        szuloElem.append(`
        
            <select id="opciok">


            </select>



        <article id="articleElem"></article>
        `);

        this.opciokElem = $('#opciok');
        this.articleElem = $("#articleElem");

        tomb.forEach((elem) => {
            new TesztView(elem, this.articleElem);
            
        });
    }
}
export default TesztekView;
