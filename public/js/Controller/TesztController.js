import TesztekView from "../View/TesztekView.js";
import Adatmodel from "../Model/Adatmodel.js";


class TesztController{
constructor(){
    const token = $('meta[name="csrf-token"]').attr("content");
    const adatmodel = new Adatmodel(token);

    adatmodel.adatBe('/tesztek', this.TesztAdatok);
    adatmodel.adatBe('/tesztek/kategoria', this.Opciok)


}

TesztAdatok(tomb){
    const szuloElem = $("main");
    new TesztekView(tomb, szuloElem);
}
Opciok(tomb){
    const szuloElem = $("main");
    new TesztekView(tomb, szuloElem);
}


}
export default TesztController;