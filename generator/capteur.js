const { randomInt } = require('crypto');
const fs = require('fs');

// fonction pour générer les données toutes les secondes
function wait (ms){
    let start = Date.now(),
        now = start;
    while (now - start < ms) {
      now = Date.now();
    }
};
// fonction pour générer les données à plus ou moins 25% et les inscrire dans un json
function capteur(normvalue, ndonne) {
    fs.appendFileSync("values/data.json", "{")
    for (let i = 1; i < ndonne+1 ; i++) {

        console.log("restant :" +(ndonne-i));

        wait(1000);
        let value = normvalue * (1 + 0.01 * randomInt(-25, 25));
        let date = new Date();        
        if(i === ndonne)fs.appendFileSync("values/data.json", `"`+i+`":`+JSON.stringify({date,value}))
        else fs.appendFileSync("values/data.json", `"`+i+`":`+JSON.stringify({date,value})+',');
    }
    fs.appendFileSync("values/data.json", "}")
}
// va générer 10080 données autour de 7
capteur(7, 10080);
