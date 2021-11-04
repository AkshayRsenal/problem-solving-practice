function solution(randomArray) {
    let init = 0;
    let valid = -1;

    let initValue = 1;
    let result = -1;
    let maxValArray = randomArray[randomArray.length - 1];
    // let findVal = 500;
    let element = 0;

    for (minValue = initValue; minValue <= maxValArray + 1; minValue++) {
        if (minValue == randomArray[element]) {
            element++;
        } else if (minValue < randomArray[element]) {
            result = minValue;
            break;
        } else if (minValue > maxValArray) {
            result = minValue
            break;
        }
    }

    return result;



    /* randomArray.forEach(function (element) {
        let lower;

        
        if (init === element) {
            init++;
        }
        else if (init < element) {
            valid = init;
        }
        else {
            valid = init++;
        }
    })
    return valid; */


}


let randomArray = [1, 2, 3, 10, 4, 6, 7, 9, 7, 4];
let arrayWithoutDuplicates=[];
let oldElement;
let i = 1;
randomArray.sort(function (prev, next) {
    return prev - next
}).forEach((sortedArrayElement) => {
    if(!arrayWithoutDuplicates[0]){
        arrayWithoutDuplicates[0]= sortedArrayElement;
    }else if(oldElement && sortedArrayElement != oldElement){
        arrayWithoutDuplicates[i++] = sortedArrayElement;
    }

    oldElement = sortedArrayElement;
    randomArray= arrayWithoutDuplicates;
})
console.log(randomArray);
let out = solution(randomArray);
console.log(out);
