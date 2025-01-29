function range(start, end, step) {
    step = step || 1;

    let result = [];
    
    if(step > 0) {
        for(let i = start; i <= end; i += step) {
            result.push(i);
        }
    } else if(step < 0) {
        for(let i = start; i >= end; i += step) {
            result.push(i);
        }
    }
    
    return result;
}

module.exports.range = range;
