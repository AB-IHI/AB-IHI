/*section cloner only one section*/
$(function() {

    $('#clone_trigger').click(function() {
        $('.cloneitem:first').clone().appendTo('#glue_here');
    });

});

/*end of section cloner*/

/*show on click hidden more children*/
// let show_inputs = function() {
//
//     document.getElementById("hide_more").style.display = 'block';
//     document.getElementById("show_more").style.display = 'none';
//
//     // console.log("triggered");
// }





/*convert date from input to usable date to display*/
function convertDate(inputFormat) {
    function pad(s) { return (s < 10) ? '0' + s : s; }
    let d = new Date(inputFormat)
    return [pad(d.getDate()), pad(d.getMonth() + 1), d.getFullYear()].join('/')
}
/*editor.js aka jspdf script in attestation.html*/
let jsPDF = window.jspdf.jsPDF;
$(document).ready(function() {
    if (jsPDF && jsPDF.version) {
        $('#dversion').text('Version ' + jsPDF.version);
    }
});
/*end of editor.js ini*/


// let pers2 = "";



function stringify(x) {
    console.log(Object.prototype.toString.call(x));
}


// stringify (obj.init);

// document.querySelector('#show_more').addEventListener('submit', function(event) {
//     //display more input options
//     document.querySelector('#hide_more').style.display = 'block';
// }

//-------------------------------1st generate form field child on click-----------------------------------------------------------
let counter = 1
function addChildInputField() {
    const buttonAddChild = document.querySelector("#show_more");
    // console.log(buttonAddChild)
    buttonAddChild.addEventListener("click",  function (event) {
        counter +=1
        genererInputField()
        console.log(counter)

    });
}

function  genererInputField() {
    const whereAddChild = document.querySelector("#glue_here");
    const container = document.createElement("div"); //ajouter conteneur de l'enfant (enfnt irl)
    container.classList.add('cloneitem')

    const h4 = document.createElement("h4"); //ajouter titre
    h4.title = "add a minor child who came with you in France :"
    h4.innerHTML = "Ajoutez un enfant mineur qui est entré en France avec vous :"

    const subContainer = document.createElement("div"); //ajouter subConteneur de l'enfant
    subContainer.classList.add('card', 'to_clone')

    whereAddChild.appendChild(container)
    container.appendChild(h4)
    container.appendChild(subContainer)
    inputOptionsFieldInsideContener(subContainer, counter)
    otherInputFieldInsideContener(subContainer, counter)

}

function inputOptionsFieldInsideContener(subContainer, nthperson) {


    const label = document.createElement("label"); //ajouter titre
    label.title = "family bond  son, daughter ..."
    label.innerHTML = "Lien familial"

    const input = document.createElement("select"); //ajouter subConteneur de l'enfant
    input.classList.add('person_' + nthperson)
    input.id = "lien" + nthperson

    subContainer.appendChild(label)
    subContainer.appendChild(input)
    // create n add options to select
    const option = document.createElement("option");
    option.disabled = true
    option.selected = true
    option.value = ""

    option.innerHTML = " -- select an option -- "

    const option0 = document.createElement("option");
    option0.title = "son"
    option0.value = "fils"
    option0.innerHTML = "Fils"


    const option1 = document.createElement("option");
    option1.title = "daughter"
    option1.value = "fille"
    option1.innerHTML = "Fille"

    input.appendChild(option) //append to input select tag to show options
    input.appendChild(option0)
    input.appendChild(option1)


}

function otherInputFieldInsideContener(subContainer, nthperson) {


    const label = document.createElement("label"); //ajouter prénom
    label.title = "first name of your child"
    label.innerHTML = "Prénom"

    const input = document.createElement("input"); //ajouter input for prénom
    input.classList.add('person' + nthperson)
    input.id = "prenom" + nthperson

    subContainer.appendChild(label)
    subContainer.appendChild(input)


    const label0 = document.createElement("label"); //ajouter nom
    label0.title = "name of your child"
    label0.innerHTML = "Nom"

    const input0 = document.createElement("input"); //ajouter input for nom
    input0.classList.add('person' + nthperson)
    input0.id = "nom" + nthperson

    subContainer.appendChild(label0)
    subContainer.appendChild(input0)


    const label1 = document.createElement("label"); //ajouter date de naissance
    label1.title = "date birth of your child"
    label1.innerHTML = "Date de naissance"

    const input1 = document.createElement("input"); //ajouter input for date de naissance
    input1.classList.add('person' + nthperson)
    input1.type = "date"
    input1.id = "birth_date" + nthperson

    subContainer.appendChild(label1)
    subContainer.appendChild(input1)

}

let additionalChildrenArray = []//nno need for array can be stored in str then added to final result
let  additionalChildrenstr = ""
//
function addEventListenerChild(nthChild) {
    // document.querySelector('form').addEventListener('submit', function(event) {
    //     event.preventDefault();
    let lien = document.querySelector('#lien' + nthChild).value;
    const prenom = document.querySelector('#prenom' + nthChild).value;
    const nom = document.getElementById("nom"  + nthChild).value;
    let birth_date = document.querySelector('#birth_date' + nthChild).value;
    birth_date = convertDate(birth_date);

    let role = "";






    if (lien === "fils") { //1st child aka 3rd person
        role += 'mon';
    }

    if (lien === "fille") {
        role += 'ma';
    }

    let obj = { //actually nth person
        init: function() {
            document.getElementById('submit').onclick = obj.validate;
            return obj.validate(); // Call the validate function and return its result
        },

        validate: function() {
            let check = document.getElementsByClassName('person' + nthChild);
            let len = check.length;
            let un_champs_vide = false;
            for (let i = 0; i < len ; i++) {
                if (check[i].value === '') {
                    un_champs_vide = true;
                    // console.log("loop 2 work");
                    // console.log(un_champs_vide);
                    break; // Exit the loop once we find an empty field
                }
            }

            if (!un_champs_vide) {
                let pers = "\n       - ${role} ${lien} ${prenom} ${nom}, née le ${birth_date}.";
                pers = pers.replace("${lien}", lien); //
                pers = pers.replace("${prenom}", prenom);
                pers = pers.replace("${role}", role);
                pers = pers.replace("${nom}", nom);
                pers = pers.replace("${birth_date}", birth_date);


                return pers;
            } else {
                return "";
            }
        },
    };
    let storeStrAtTheEnd = obj.init()
    additionalChildrenArray.push(storeStrAtTheEnd); //+= obj.init();
    console.log("233 additionalChildrenArray 1st when added", additionalChildrenArray)

    additionalChildrenstr.concat(storeStrAtTheEnd)
    console.log("236 additionalChildrenstr 1st when added", additionalChildrenstr)
    return additionalChildrenstr

    //})
}

// document.getElementById('show_more').onclick = addChildInputField(); useless don't uncoment
addChildInputField()
// console.log("240")

function determineLink(lien) {
    let role = ""
    if (lien === "fils") { //1st child aka 3rd person
        role += 'mon';
    }
    else {
        role += 'ma';
    }
    return role
}

function loopThroughAllElementsToGetValues() { //function needed to insure the proper order of execution of program otherwise don't work as values are added dynamically
    for (let i = 1; i < counter + 1; i++) {
        addEventListenerChild(i)
    }
}
//------------------------------------end generate form field child on click-----------------------------------------------------------

function testIfEmpty(obj, obj1) {
    return ((obj.init() === "") && (obj1.init() === ""))
}

// async attempt to fix
//check oc click if array is empty

//but first store all the values on click in  an array
// so to be able to perform the test
//then whatever the result call the big function or test with smaller one to retrieve values

//start of big async function that should be executed at the end of execution of addChildInputField()
function bigFunctionThatRetrievesValues() {
    //document.querySelector('form').addEventListener('submit', function(event) {
    //event.preventDefault();

    //1st person appears as sender of letter
    const title = document.getElementById("title").value;
    const prenom = document.querySelector('#prenom').value;
    const nom = document.querySelector('#nom').value;
    const adresse = document.querySelector('#adresse').value;
    let heb_chez = document.querySelector('#heb_chez').value;
    if (heb_chez) {
        heb_chez = `\nchez ` + heb_chez;
    }

    const zip_code = document.querySelector('#zip_code').value;
    const commune = document.getElementById("commune").value;
    const telephone = document.querySelector('#telephone').value;
    let telephone2 = document.querySelector('#telephone2').value;
    if (telephone2) {
        telephone2 = `\ntél.: ` + telephone2;
    }
    const email = document.querySelector('#email').value;
    let entry_date = document.querySelector('#entry_date').value;
    entry_date = convertDate(entry_date);
    let birth_date = document.querySelector('#birth_date').value;
    birth_date = convertDate(birth_date);
    const ville_birth = document.querySelector('#ville_birth').value;
    const ville = document.querySelector('#ville').value;
    const country_birth = document.getElementById("country_birth").value;
    const aps_num = document.querySelector('#aps_num').value;
    let expire_date = document.querySelector('#expire_date').value;
    expire_date = convertDate(expire_date);
    //actually 2nd peron
    let lien = document.querySelector('#lien').value;
    // console.log(lien)
    const userPrenom = document.querySelector('#userPrenom').value;
    const userNom = document.querySelector('#userNom').value;
    let userBirth_date = document.querySelector('#userBirth_date').value;
    userBirth_date = convertDate(userBirth_date);
    const userAps_num = document.querySelector('#userAps_num').value;
    //1st child actually 3rd person
    let lien_1 = document.querySelector('#lien1').value;
    const prenom_1 = document.querySelector('#prenom1').value;
    const nom_1 = document.getElementById("nom1").value;
    let birth_date_1 = document.querySelector('#birth_date1').value;
    birth_date_1 = convertDate(birth_date_1);



    let myrole = "";

    universal_gender = ""; //no time to change everything to universal
    if (title === "Madame") {
        universal_gender = "e"; //what is this it seems its for female[e] e at the end of word
    }
    let currentTime = new Date();
    currentTime = convertDate(currentTime);
    let role = "";
    let role1 = "";
    let civ =""


    if (lien === "mari" || lien === "compagnon" || lien === "concubin") { //user aka 2nd person
        role = 'mon';
        civ = 'Monsieur';
    }


    if (lien === "femme" || lien === "compagne" || lien === "epouse") {
        role += 'ma';
        civ = 'Madame';
    }

    if (lien === "epouse") {
        lien = "épouse";
    }



    if (lien_1 === "fils") { //1st child aka 3rd person
        role1 += 'mon';
    }

    if (lien_1 === "fille") {
        role1 += 'ma';
    }



    let obj = { //actually 2st person
        init: function() {
            document.getElementById('submit').onclick = obj.validate;
            return obj.validate(); // Call the validate function and return its result
        },

        validate: function() {
            let check = document.getElementsByClassName('person');
            let len = check.length;
            let un_champs_vide = false;
            for (let i = 0; i < len; i++) {
                if (check[i].value === '') {
                    un_champs_vide = true;
                    // console.log("loop 2 work");
                    // console.log(un_champs_vide);
                    break; // Exit the loop once we find an empty field
                }
            }

            if (!un_champs_vide) {
                let pers = " mon \n${lien} ${civ} ${prenom} ${nom}, née le ${birth_date}, APS n° ${aps_num}";
                pers = pers.replace("${lien}", lien); //
                pers = pers.replace("${prenom}", userPrenom);
                pers = pers.replace("${role}", role);
                pers = pers.replace("${nom}", userNom);
                pers = pers.replace("${birth_date}", userBirth_date);
                pers = pers.replace("${aps_num}", userAps_num);
                pers = pers.replace("${civ}", civ);

                return pers;
            } else {
                return "";
            }
        },
    };

    /***************************************start counting ppl*****************************************/

    let obj1 = { //3nd person aka child
        init: function() {
            document.getElementById('submit').onclick = obj1.validate;
            return obj1.validate(); // Call the validate function and return its result
        },

        validate: function() {
            let check = document.getElementsByClassName('person1');
            let len = check.length;
            let un_champs_vide = false;
            for (let i = 0; i < len; i++) {
                if (check[i].value === '') {
                    un_champs_vide = true;
                    return "";
                    break; // Exit the loop once we find an empty field
                }
            }

            if (!un_champs_vide) {
                let pers1 = "\n       - ${role} ${lien} ${prenom} ${nom}, née le ${birth_date}.";
                pers1 = pers1.replace("${role}", role1);
                pers1 = pers1.replace("${lien}", lien_1);
                pers1 = pers1.replace("${prenom}", prenom_1);
                pers1 = pers1.replace("${nom}", nom_1);
                pers1 = pers1.replace("${birth_date}", birth_date_1);
                // console.log(pers1);
                return pers1;
            } else {
                console.log("The error above is biased  ignore it")
                window.alert("un des champs de personnes entree avec vous est vide");
                return ""; //what is this? The error is biased

            }
        },
    };

    // let testStr = "testStr :" + obj.init() + obj1.init()
    // console.log(testStr)
//nt child


    //gender is used to determine if it f/m word of seul
    gender = "";
    let av = "";


    //check if there are no people then add seul else add list of people
    if (testIfEmpty(obj, obj1)) {
        av = ".";
        // gender +=".";

        if (title === "Monsieur") {
            gender = 'seul.';

        } else if (title === "Madame") {
            gender = "seule.";
            universal_gender = "e";

        }

    } else {
        av = " et j'y habite actuellement avec:";

    }

    let and =  "";


    //check if there are no people then add seul else add list of people
    if (obj1.init() !== '' && obj.init() !== ''){
        and = " et ";
    } else if ( obj1.init() == '' &&   obj.init() == '') {
        and =  "";
    }
    // else if ( obj1.init() == '') {
    //     and =  ".";
    // }
    // else if ( obj.init() == '') {
    //     and =  ".";
    // }


    // console.log(gender);


    console.log(counter)
    console.log("459 additionalChildrenArray avant le prompt donc avant le res final", additionalChildrenArray)

        function returnAllneededResults() {
            // console.log(additionalChildrenArray, '468 0')
            let myTestStr = ""
            additionalChildrenArray.forEach( child =>{
                console.log(child, '468 0')
                myTestStr += child


            });
            return myTestStr
        }
        // returnAllneededResults()

        // console.log( " 470 str :", additionalChildrenstr)
        // console.log( " 483 myTestStr :", myTestStr)

    let prompt = `
${title} ${prenom} ${nom}
${adresse}${heb_chez}
${zip_code} ${commune}
tél.: ${telephone}${telephone2}
mail.: ${email}

                                                                                 Association de bienfaisance
                                                                                 "Initiative Humanitaire Internationale"
                                                                                 14 boulevard Jacques Replat
                                                                                 74000 Annecy
                                                                                 
                                                                                       Fait à ${ville}, le ${currentTime}
    
                                                    
Objet : demande d’inscription au programme humanitaire


Mesdames, Messieurs,

Je vous demande de m'inscrire au programme humanitaire "Protection temporaire 
aux personnes fuyant la guerre en Ukraine" en tant que bénéficiaire d'aide humanitaire.
Je suis entré${universal_gender} en France le ${entry_date}${av}${obj.init()}${and}${        returnAllneededResults()
    }
Mon APS de bénéficiaire de la protection temporaire n°${aps_num} est valable jusqu'au 
${expire_date}. 
J'ai pris connaissance du contenu du programme humanitaire, accepte et 
m'engage à remplir les obligations dans le cadre de ce programme.
Je m'engage également à informer sans délai l'Association de toute modification de ma 
situation financière et sociale.
Veuillez agréer, Mesdames, Messieurs, l’expression de mon profond respect.



                                                              Signature:




Pièces jointes:
    1) autorisation provisoire de séjour
    2) déclaration sur l’honneur
    `;

    let att_h = `





                                                                                 Association de bienfaisance
                                                                                 "Initiative Humanitaire Internationale"
                                                                                 14 boulevard Jacques Replat
                                                                                 74000 Annecy
                                                                                 
                                                                                       Fait à ${ville}, le ${currentTime}
                                                    
Objet : déclaration sur l’honneur


Je soussigné${universal_gender}, 
         ${title} ${prenom} ${nom},
         né${universal_gender} le ${birth_date} à ${ville_birth} en ${country_birth},
         APS n°${aps_num}, valable jusqu'au ${expire_date},
déclare sur l'honneur que mon foyer fiscal en France se compose de moi ${gender}${obj.init()}
                                                        

En cas de changement dans la composition de mon foyer fiscal, je m'engage à en \ninformer l'association.



   `;
    // console.log(gender); <u>mispeled</u> 𝙾̲𝚋̲𝚓̲𝚎̲𝚝̲



    // Display the generated prompt
    document.querySelector('#output').style.display = 'block';
    document.querySelector('#prompt').textContent = prompt;
    document.querySelector('#att_h').textContent = att_h;
    window.location.href = "#output";

// });
}
//end of big async function that should execute 2nd


document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // basically don't reload page unless u want to break it. forrgot this fact took much time to solve as oncleck reloads pages why?

    loopThroughAllElementsToGetValues()//get all children after all the 3 bbut executed first to get all the values otherwise script might break/disfunction
    bigFunctionThatRetrievesValues()  //at mort 3 1st ppl
    additionalChildrenArray = []
});

// executeSecondPart()


//
//
//
// let myTestStr = ""
//
// function returnAllneededResults() {
//     additionalChildrenArray.forEach((child) => {
//         console.log(child, '468 0')
//         myTestStr += child
//
//
//     });
//     return myTestStr
// }
//
// returnAllneededResults()
//
// console.log('myTestStr:', myTestStr)
//
