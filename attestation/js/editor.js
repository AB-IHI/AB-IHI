/*console.log("editorjs");
import { prompt } from '../main.js'

console.log(prompt);

var element = prompt;

console.log(element);*/

document.querySelector('form').addEventListener('submit', function(event) {
    var element = document.getElementById("prompt").innerHTML;
    //console.log(element);





    /* global ace, $, PDFObject, pdf, doc */
    /**
     * jsPDFEditor
     * @return {[type]} [description]
     */
    var jsPDFEditor = (function() {
        var editor,
            demos = {
                "images.js": "Images",
                "font-faces.js": "Font faces, text alignment and rotation",
                "two-page.js": "Two page Hello World",
                "circles.js": "Circles",
                "cell.js": "Cell",
                "font-size.js": "Font sizes",
                "landscape.js": "Landscape",
                "lines.js": "Lines",
                "rectangles.js": "Rectangles",
                "string-splitting.js": "String Splitting",
                "text-colors.js": "Text colors",
                "triangles.js": "Triangles",
                "user-input.js": "User input",
                "acroforms.js": "AcroForms",
                "annotations.js": "Annotations",
                "autoprint.js": "Auto print",
                "arabic.js": "Arabic",
                "russian.js": "Russian",
                "japanese.js": "Japanese",
                "password.js": "Password"
            };

        var aceEditor = function() {
            editor = ace.edit("editor");
            editor.setTheme("ace/theme/github");
            editor.setOptions({
                fontFamily: "monospace",
                fontSize: "12px"
            });
            editor.getSession().setMode("ace/mode/javascript");
            editor.getSession().setUseWorker(false); // prevent "SecurityError: DOM Exception 18"

            var timeout;
            editor.getSession().on("change", function() {
                // Hacky workaround to disable auto refresh on user input
                if (
                    $("#auto-refresh").is(":checked") &&
                    $("#template").val() != "user-input.js"
                ) {
                    if (timeout) clearTimeout(timeout);
                    timeout = setTimeout(function() {
                        jsPDFEditor.update();

                    }, 200);
                }
            });
        };

        var populateDropdown = function() {
            var options = "";
            for (var demo in demos) {
                options += '<option value="' + demo + '">' + demos[demo] + "</option>";
            }
            $("#template")
                .html(options)
                .on("change", loadSelectedFile);
        };

        var loadSelectedFile = function() {
            if ($("#template").val() == "user-input.js") {
                $(".controls .checkbox").hide();
                $(".controls .alert").show();
                jsPDFEditor.update(true);
            } else {
                $(".controls .checkbox").show();
                $(".controls .alert").hide();
            }

            $.get(
                "examples/js/" + $("#template").val(),
                function(response) {
                    editor.setValue(response);
                    editor.gotoLine(0);

                    // If autorefresh isn't on, then force it when we change examples
                    if (!$("#auto-refresh").is(":checked")) {
                        jsPDFEditor.update();
                    }
                },
                "text"
            ).fail(function() {
                $(".template-picker").html(
                    '<p class="source">More examples in <b>examples/js/</b>. We can\'t load them in automatically because of local filesystem security precautions.</p>'
                );

                // Fallback source code
                var source = "// You'll need to make your image into a Data URL\n";

                source += "\n";
                source += "var doc = new jsPDF();\n";
                source += "\n";
                source += "doc.setFontSize(12);\n";
                //element = doc.splitTextToSize(element, 180);
                // source += "doc.setFontStyle("underline");\n"; //doesn't work
                source += 'doc.text(`';

                source += element;

                //console.log(source);
                source += '`, 16, 16);\n';
                //prevent overflow


                editor.setValue(source);
                editor.gotoLine(0);
            });
        };

        var initAutoRefresh = function() {
            $("#auto-refresh").on("change", function() {
                if ($("#auto-refresh").is(":checked")) {
                    $(".run-code").hide();
                    jsPDFEditor.update();
                } else {
                    $(".run-code").show();
                }
            });

            $(".run-code").click(function() {
                jsPDFEditor.update();
                return false;
            });
        };

        var initDownloadPDF = function() {
            $(".download-pdf").click(function() {


                eval(
                    "try{" +
                    editor.getValue() +
                    "} catch(e) { console.error(e.message,e.stack,e); }"
                );

                var file = demos[$("#template").val()];
                if (file === undefined) {
                    file = "demande_inscription";
                }
                if (typeof doc !== "undefined") {
                    doc.save(file + ".pdf");
                } else if (typeof pdf !== "undefined") {
                    setTimeout(function() {
                        pdf.save(file + ".pdf");
                    }, 2000);
                } else {
                    alert("Error 0xE001BADF");
                }
            });
            return false;
        };

        return {
            /**
             * Start the editor demo
             * @return {void}
             */
            init: function() {
                // Init the ACE editor
                aceEditor();

                populateDropdown();
                loadSelectedFile();
                // Do the first update on init
                jsPDFEditor.update();

                initAutoRefresh();

                initDownloadPDF();
            },
            /**
             * Update the iframe with current PDF.
             *
             * @param  {boolean} skipEval If true, will skip evaluation of the code
             * @return
             */
            update: function(skipEval) {
                setTimeout(function() {
                    if (!skipEval) {
                        eval(
                            "try{" +
                            editor.getValue() +
                            "} catch(e) { console.error(e.message,e.stack,e); }"
                        );
                    }
                    if (typeof doc !== "undefined")
                        try {
                            if (
                                navigator.appVersion.indexOf("MSIE") !== -1 ||
                                navigator.appVersion.indexOf("Edge") !== -1 ||
                                navigator.appVersion.indexOf("Trident") !== -1
                            ) {
                                var options = {
                                    pdfOpenParams: {
                                        navpanes: 0,
                                        toolbar: 0,
                                        statusbar: 0,
                                        view: "FitV"
                                    },
                                    forcePDFJS: true,
                                    PDFJS_URL: "examples/PDF.js/web/viewer.html"
                                };
                                PDFObject.embed(doc.output("bloburl"), "#preview-pane", options);
                            } else {
                                PDFObject.embed(doc.output("datauristring"), "#preview-pane");
                            }
                        } catch (e) {
                            alert("Error " + e);
                        }
                }, 0);
            }
        };
    })();

    $(document).ready(function() {
        jsPDFEditor.init();
    });

    var singleQuotes = 'Hello, ';
    var doubleQuotes = "world!";

    var result = singleQuotes + doubleQuotes;

    //console.log(result);

    var backticks = `Hello, `;
    var singleQuotes = 'world!';

    //var result2 = backticks + prompt2;
    //console.log(result2);

});

document.querySelector(".download-pdf").addEventListener('click', function(event) {
    location.reload();

});