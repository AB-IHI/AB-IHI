function convertDate(inputFormat) {
    function pad(s) { return (s < 10) ? '0' + s : s; }
    var d = new Date(inputFormat)
    return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/')
}

var pers2 = "";

// old code
// var obj = {
// init : function(){
//     document.getElementById('submit').onclick = obj.validate;
//     return pers2;
// },
//
// validate : function(){
//     var check = document.getElementsByClassName('person_1');
//     var len = check.length;
//     var un_champs_vide = false;
//     for(var i=0;i<len;i++) {
//         if (check[i].value ==='')
//         {
//             un_champs_vide = true;
//             console.log("loop work");
//             console.log(un_champs_vide);
//
//         }
//     }
//     if (un_champs_vide) {
//         let pers2 = "\n\n Je suis entré en France avec ${role} ${lien_1} ${prenom_1} ${nom_1}, née le ${birth_date_1}.";
//
//     }
//     return pers2;
//
// },
//
// };

//  chatgpt failed attempt
// var obj = {
//     init: function () {
//         document.getElementById('submit').onclick = obj.validate;
//         return obj.validate(); // Call the validate function and return its result
//     },
//
//     validate: function () {
//         var check = document.getElementsByClassName('person_1');
//         var len = check.length;
//         var un_champs_vide = false;
//         for (var i = 0; i < len; i++) {
//             if (check[i].value === '') {
//                 un_champs_vide = true;
//                 console.log("loop work");
//                 console.log(un_champs_vide);
//             }
//         }
//
//         // Declare pers2 outside of the if block
//         let pers2 = "\n\n Je suis entré en France avec ${role} ${lien_1} ${prenom_1} ${nom_1}, née le ${birth_date_1}.";
//
//
//         // Check if any field was empty
//         if (un_champs_vide) {
//             // Do something when there is an empty field (if needed)
//         }
//
//         // Return the resulting pers2 string
//         return pers2;
//     },
// };



function stringify (x) {
    console.log(Object.prototype.toString.call(x));
}


// stringify (obj.init);

document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();

    const title = document.getElementById("title").value;
    const prenom = document.querySelector('#prenom').value;
    const nom = document.querySelector('#nom').value;
    const adresse = document.querySelector('#adresse').value;
    const heb_chez = document.querySelector('#heb_chez').value;
    const zip_code = document.querySelector('#zip_code').value;
    const commune = document.getElementById("commune").value;
    const telephone = document.querySelector('#telephone').value;
    const email = document.querySelector('#email').value;
    const entry_date = document.querySelector('#entry_date').value;
    const birth_date = document.querySelector('#birth_date').value;
    const ville_birth = document.querySelector('#ville_birth').value;
    const country_birth = document.getElementById("country_birth").value;
    const aps_num = document.querySelector('#aps_num').value;
    const expire_date = document.querySelector('#expire_date').value;

    const lien_1 = document.querySelector('#lien_1').value;
    const prenom_1 = document.querySelector('#prenom_1').value;
    const nom_1 = document.querySelector('#nom_1').value;
    const birth_date_1 = document.querySelector('#birth_date_1').value;

    const lien_2 = document.querySelector('#lien_2').value;
    const prenom_2 = document.querySelector('#prenom_2').value;
    const nom_2 = document.getElementById("nom_2").value;
    const birth_date_2 = document.querySelector('#birth_date_2').value;

    // console.log(obj.init);
    // stringify (obj.init);
    // console.log(obj.init);

    // var obj = {
    //     propertyName: "propertyValue",
    //     init: function () {
    //         console.log("loop work");
    //         document.getElementById('submit').onclick = obj.validate;
    //         return obj.validate(); // Call the validate function and return its result
    //     },
    //
    //     validate: function () {
    //         console.log('validate called');
    //         var check = document.getElementsByClassName('person_1');
    //         var len = check.length;
    //         var un_champs_vide = false;
    //         let pers2 = ""; // Initialize pers2 to an empty string
    //         for (var i = 0; i < len; i++) {
    //             if (check[i].value === '') {
    //                 un_champs_vide = true;
    //                 console.log("loop work");
    //                 console.log(un_champs_vide);
    //                 break; // Exit the loop once we find an empty field
    //             }
    //         }
    //
    //
    //
    //         if (!un_champs_vide) {
    //             // All fields are filled, populate the pers2 string
    //             pers2 = "\n\n Je suis entré en France avec ${role} ${lien_1} ${prenom_1} ${nom_1}, née le ${birth_date_1}.";
    //             // You can perform replacements if needed, as shown in the previous response.
    //         }
    //
    //         // Return the resulting pers2 string
    //         return pers2;
    //     },
    // };




    // let result_I_need = obj.toString();
    // console.log(result_I_need);
    // console.log(obj.toString());




    // var result = obj.init(); // Call init function
    // console.log(result);     // Log the result

    var currentTime = new Date();
    currentTime = convertDate(currentTime);
    var role = "";
    var role2 = "";
    // console.log(lien_1 == "mari" || lien_1 == "fils");

    // const code = document.querySelector('#code').checked;
    // var Vanilla = "";

    if (lien_1 === "mari" || lien_1 === "fils") {
        role = 'mon';
    }

    if (lien_1 === "femme" || lien_1 === "fille") {
        role += 'ma';
    }

    if (lien_2 === "mari" || lien_2 === "fils") {
        role2 += 'mon';
    }

    if (lien_1 === "femme" || lien_1 === "fille") {
        role2 += 'ma';
    }

    var obj = {
        init: function () {
            document.getElementById('submit').onclick = obj.validate;
            return obj.validate(); // Call the validate function and return its result
        },

        validate: function () {
            var check = document.getElementsByClassName('person_1');
            var len = check.length;
            var un_champs_vide = false;
            for (var i = 0; i < len; i++) {
                if (check[i].value === '') {
                    un_champs_vide = true;
                    console.log("loop work");
                    console.log(un_champs_vide);
                    break; // Exit the loop once we find an empty field
                }
            }

            if (!un_champs_vide) {
                var pers2 = "\n Je suis entré en France avec ${role} ${lien_1} ${prenom_1} ${nom_1}, née le ${birth_date_1}.";
                pers2 = pers2.replace("${role}", role);
                pers2 = pers2.replace("${lien_1}", document.getElementById("lien_1").value);
                pers2 = pers2.replace("${prenom_1}", document.getElementById("prenom_1").value);
                pers2 = pers2.replace("${nom_1}", document.getElementById("nom_1").value);
                pers2 = pers2.replace("${birth_date_1}", document.getElementById("birth_date_1").value);

                return pers2;
            } else {
                return "";
                // window.alert("un des champs de personnes entree avec vous est vide");
            }
        },
    };

    var obj2 = {
        init: function () {
            document.getElementById('submit').onclick = obj.validate;
            return obj.validate(); // Call the validate function and return its result
        },

        validate: function () {
            var check = document.getElementsByClassName('person_2');
            var len = check.length;
            var un_champs_vide = false;
            for (var i = 0; i < len; i++) {
                if (check[i].value === '') {
                    un_champs_vide = true;
                    console.log("loop 2 work");
                    console.log(un_champs_vide);
                    break; // Exit the loop once we find an empty field
                }
            }

            if (!un_champs_vide) {
                var pers3 = "\nJe suis entré en France avec ${role} ${lien_1} ${prenom_1} ${nom_1}, née le ${birth_date_1}.";
                pers3 = pers3.replace("${role}", role2);
                pers3 = pers3.replace("${lien_2}", document.getElementById("lien_1").value);
                pers3 = pers3.replace("${prenom_2}", document.getElementById("prenom_1").value);
                pers3 = pers3.replace("${nom_2}", document.getElementById("nom_1").value);
                pers3 = pers3.replace("${birth_date_2}", document.getElementById("birth_date_1").value);

                return pers3;
            } else {
                return "";
                // window.alert("un des champs de personnes entree avec vous est vide");
            }
        },
    };

    let prompt = `
${title} ${prenom} ${nom}
${adresse}
chez ${heb_chez}
${zip_code} ${commune}
tél.: ${telephone}
\t
mail: ${email}

                                                                Association de bienfaisance
                                                                "Initiative Humanitaire Internationale"
                                                                14 boulevard Jacques Replat
                                                                74000 Annecy
                                                                    Fait à Annecy, le ${currentTime}
Objet: demande d’inscription au programme humanitaire

Mesdames, Messieurs,
Je vous demande de m'inscrire au programme humanitaire "Protection temporaire 
aux personnes fuyant la guerre en Ukraine" en tant que bénéficiaire d'aide humanitaire.
Je suis entrée en France le ${entry_date}, ma date de naissance est le ${birth_date}.${obj.init()}
Mon APS de bénéficiaire de la protection temporaire n°${aps_num} est valable jusqu'au ${expire_date}.
J'ai pris connaissance du contenu du programme humanitaire, accepte et m'engage à remplir les 
obligations dans le cadre de ce programme.
Je m'engage également à informer sans délai l'Association de toute modification de ma 
situation financière et sociale.
Veuillez agréer, Mesdames, Messieurs, l’expression de mon profond respect.


Pièces jointes:
    1) autorisation provisoire de séjour
    2) déclaration sur l’honneur
    `;



    // if (isEmphasis) {
    //     prompt += `\n\nyou are a ${Vanilla} ${language} expert.   `;
    //     prompt += `\n\n` + request + `\n\n`;
    // }

    // if (isVanilla) {
    //     var Vanilla = "";
    // }
    // prompt += request;
    // prompt += `\n`;
    //
    // if (isEmphasis) {
    //     prompt += `\n\nyou are a ${Vanilla} ${language} expert.   `;
    //     prompt += `\n\n` + request + `\n\n`;
    // }
    //
    //
    //
    // if (isMethod) {
    //     prompt += ` don't use methods `;
    // }

    // prompt += `\n` + process;
    //
    // prompt += `\n` + objects;
    //
    // prompt += `\n` + variable;
    //
    // prompt += `\n` + explain;
    //
    // if (code) {
    //     prompt += "start the output with ```";
    //     prompt += language;
    //
    // }


    // Display the generated prompt
    document.querySelector('#output').style.display = 'block';
    document.querySelector('#prompt').textContent = prompt;
});

