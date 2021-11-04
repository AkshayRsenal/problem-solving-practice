let randomArray = [ 2, 4, 3,  3, 1,  6, 7, 9, 7, 4];
let arrayWithoutDuplicates = [];
let oldElement = -1;
let resultFound;
randomArray.sort(function (prev, next) {
    return prev - next
})

for (sortedArrayElement = 0; sortedArrayElement < randomArray[randomArray.length - 1] + 1; sortedArrayElement++) {
    if (randomArray[sortedArrayElement] != oldElement) {
        
        for (iterrateMissingElement = oldElement; iterrateMissingElement < randomArray[sortedArrayElement]; iterrateMissingElement++) {
            if (iterrateMissingElement > oldElement) {
                resultFound = iterrateMissingElement;
                break;
            }
        }
        if (resultFound===0 || resultFound!==null ) {
            break
        }
    }

    oldElement = randomArray[sortedArrayElement];
}

if (!resultFound && resultFound !==0) {
    resultFound = randomArray[randomArray.length - 1] + 1
}

console.log(resultFound);
/* let out = solution(randomArray);
console.log(out); */
