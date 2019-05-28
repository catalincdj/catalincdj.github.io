"use_strict";
window.addEventListener("load", function () {
    getRows();
});

function getRows() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("get", "https://catalincdj.github.io/pbr/MidiMusicFileXML.xml", true);
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            showResult(this);
        }
    };
    xmlhttp.send(null);
}

function showResult(xmlhttp) {
    var xmlDoc = xmlhttp.responseXML.documentElement;
    removeWhitespace(xmlDoc);
    var outputResult = document.getElementById("BodyRows");
    var rowData = xmlDoc.getElementsByTagName("note");
    // console.log(rowData);
    var attrData = xmlDoc.getElementsByTagName("part");
    console.log(attrData);

    var arrAttrData = Array.from(attrData);

    var tempAttrData = "";

        tempAttrData = tempAttrData + "( attributes (index " + 0 + ") " +
        "(part " + arrAttrData[0].id + ") " +
        "(measure "+ arrAttrData[0].nodeType + ") " +
        "(divisions "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[0].textContent + ") " +
        "(key "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[1].textContent + ") " +
        "(beats "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[2].childNodes[0].textContent + ") " +
        "(beat-type "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[2].childNodes[1].textContent + ") " +
        "(sign "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[3].childNodes[0].textContent + ") " + 
        "(line "+ arrAttrData[0].childNodes[0].childNodes[1].childNodes[3].childNodes[1].textContent + ") )\n";
    console.log(tempAttrData);

    var tempString = "";
    tempString =
        "(deftemplate note\n(slot index)\n(slot part)\n(slot step)\n(slot octave)\n(slot duration)\n(slot voice)\n(slot type)\n(slot stem)\n(slot staff)\n)\n\n" +
        "(deftemplate attributes\n(slot index)\n(slot part)\n(slot measure)\n(slot divisions)\n(slot key)\n(slot beats)\n(slot beat-type)\n(slot sign)\n(slot line)\n)\n\n" +
        "(deffacts initial\n" + tempAttrData;

    var testArr = Array.from(rowData);
    var i = 0;
    console.log(testArr);
    for (; i < 300; i++) {
        tempString = tempString + "( note (index " + i + ") (part " + arrAttrData[0].id + ")";
        if (testArr[i].childNodes[0].nodeName === 'pitch') {
            tempString = tempString + " (step " + testArr[i].childNodes[0].childNodes[0].textContent + ")" +
                " (octave " + testArr[i].childNodes[0].childNodes[1].textContent + ")" +
                //console.log(testArr[i].childNodes[0].childNodes[0].textContent);
                " (duration " + testArr[i].childNodes[1].textContent + ")" +
                // " (voice " + testArr[i].childNodes[2].textContent + ")" +
                " (type " + testArr[i].childNodes[3].textContent + ")" +
                " (stem " + testArr[i].childNodes[4].textContent + ")" +
                " (staff " + testArr[i].childNodes[5].textContent + ")";
        } else {
            tempString = tempString + " (step " + testArr[i].childNodes[0].nodeName + ")" +
                //console.log(testArr[i].childNodes[0].nodeName);
                " (duration " + testArr[i].childNodes[1].textContent + ")" +
                " (voice " + testArr[i].childNodes[2].textContent + ")" +
                " (type " + testArr[i].childNodes[3].textContent + ")" +
                " (staff " + testArr[i].childNodes[4].textContent + ")";
        }
        tempString = tempString + ")\n";
    }
    tempString = tempString + ")\n";

    finalString = tempString + 
    `
(deffacts meniu
(menu)
)

(defrule afiseaza_meniu
    ?a<-(menu)
    =>
        (printout t"Selecteaza statistica in functie de: 1 - note, 2 - masuri, 3 - tip, 4 - durata" crlf)
    (retract ?a)
    (assert(menu (read)))        
)

(defrule stat_note
        (menu 1)
    =>
    (printout  t "Numarul de A" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "A") 0)) )crlf)
    
    (printout  t "Numarul de B" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "B") 0)) )crlf)
    
    (printout  t "Numarul de C" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "C") 0)) )crlf)
    
    (printout  t "Numarul de D" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "D") 0)) )crlf)
    
    (printout  t "Numarul de E" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "E") 0)) )crlf)
    
    (printout  t "Numarul de F" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "F") 0)) )crlf)
    
    (printout  t "Numarul de G" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "G") 0)) )crlf)
    
    (printout  t "Numarul de REST" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "rest") 0)) )crlf)
    
    (printout  t "Numarul de CHORD" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:step) "chord") 0)) )crlf)
)

(defrule stat_masura
        (menu 2)
    =>
    (printout  t "Numarul de masuri 1" crlf)
    (printout t (length$ (find-all-facts ((?f attributes)) (= (str-compare (str-cat ?f:measure) "1") 0)) )crlf)
    
    (printout  t "Numarul de masuri 2" crlf)
    (printout t (length$ (find-all-facts ((?f attributes)) (= (str-compare (str-cat ?f:measure) "2") 0)) )crlf)
)

(defrule stat_tip
        (menu 3)  
    =>    
    (printout  t "Numarul de optimi" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:type) "eighth") 0)) )crlf)
)

(defrule stat_durata
        (menu 4)
    =>
    (printout  t "Durata 2" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "2") 0)) )crlf)
    
    (printout  t "Durata 4" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "4") 0)) )crlf)
    
    (printout  t "Durata 6" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "6") 0)) )crlf)
    
    (printout  t "Durata 8" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "8") 0)) )crlf)
    
    (printout  t "Durata 12" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "12") 0)) )crlf)
    
    (printout  t "Durata 16" crlf)
    (printout t (length$ (find-all-facts ((?f note)) (= (str-compare (str-cat ?f:duration) "16") 0)) )crlf)
)
    `;
    // console.log(tempString);
    downloadString(finalString, "CLIPS File", "XMLtoCLP.clp")
}

function downloadString(text, fileType, fileName) {
    var blob = new Blob([text], {
        type: fileType
    });

    var a = document.createElement('a');
    a.download = fileName;
    a.href = URL.createObjectURL(blob);
    a.dataset.downloadurl = [fileType, a.download, a.href].join(':');
    a.style.display = "none";
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
    setTimeout(function () {
        URL.revokeObjectURL(a.href);
    }, 1500);
}

function removeWhitespace(xml) {
    var loopIndex;
    for (loopIndex = 0; loopIndex < xml.childNodes.length; loopIndex++) {
        var currentNode = xml.childNodes[loopIndex];
        if (currentNode.nodeType == 1) {
            removeWhitespace(currentNode);
        }
        if (!(/\S/.test(currentNode.nodeValue)) && (currentNode.nodeType == 3)) {
            xml.removeChild(xml.childNodes[loopIndex--]);
        }
    }
}