// Subject:         Higher Order Functions
// Problem Prompt:  

function reverseNumber(num) {
    let reverseNum = [];
    let reverseNumString = String(num);

    for (let i = 0; i <= (reverseNumString.length - 1); i++) {
        reverseNum[i] = reverseNumString[reverseNumString.length - 1 - i];
    }

    return Number(reverseNum.join(""));
}

console.log(reverseNumber(75647));



function isPalindrone(word) {
    let compactedWord = word.split(" ").join("").toLowerCase().replace(/[^a-zA-Z0-9]+/g, "");
    let reversedWord = "";
    reversedWord = word.split(" ").join("");
    reversedWord = reversedWord.split("").reverse().join("").toLowerCase().replace(/[^a-zA-Z0-9]+/g, "");
    console.log(compactedWord);
    console.log(reversedWord);
    if (compactedWord === reversedWord) {
        return true;
    } else {
        return false;
    }
}

console.log(isPalindrone("0_0 (: /-\ :) 0–0"));


function stringToCombo (string) {
  
  let comboString = [];
  let comboStringToAscii = [];
  let stringCounterTotal = 0;

  
  for (let i = 0; i <= string.length - 1; i++) {
    let stringCounter = 0;
    let currentChar = string[i];
    let testChar = currentChar;
    
    
    for (let j = 0; j <= string.length - 1; j++) {
      // console.log("String counter: " + stringCounter);
      if (stringCounter >= 1 && stringCounter != i) {
        testChar += string[j];
      }
      let testCharCode = 0;
      for (let k = 0; k < testChar.length; k++) {
        testCharCode += testChar.charCodeAt(k);
      }
      comboStringToAscii[stringCounterTotal] = testCharCode;
      console.log(comboStringToAscii);
      console.log("split");
      console.log(testChar);
      
      if (comboString.indexOf(testChar) == -1) {
        // console.log("not in array");
        comboString.push(testChar);
      }
      stringCounter++;
      stringCounterTotal++;
    }
    
  }
  return comboString;
}
console.log(stringToCombo("doog"))
