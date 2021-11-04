let rememberedA = [3,2,4,3]
let forgottenCountF = 2; 
let meanM = 4;
let RememberedSumA = 0;
let RememberedCountA = 0;

function getFSum(rememberedA,forgottenCountF,meanM){
    rememberedA.forEach(function (element) {
        RememberedSumA += element;
        RememberedCountA++;
    })

    forgottenSumF = (meanM * (RememberedCountA + forgottenCountF)) - RememberedSumA;

    console.log(forgottenSumF)
    let i=0
    while(added != forgottenSumF){
        // forgottenSumF should be divisible by 1 to 6
        added
        
        i++;
    }


    // console.log("count:"+aCount+"--Sum"+aSum);
}

getFSum(rememberedA, forgottenCountF, meanM);