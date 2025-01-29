export function fizzBuzz(number) {
    let output = '';
    for(let i = 1; i <= number; i++) {
        if (i % 3 === 0 && i % 5 === 0) {
            output += 'FizzBuzz';
        } else if (i % 3 === 0) {
            output += 'Fizz';
        } else if (i % 5 === 0) {
            output += 'Buzz';
        } else {
            output += i;
        }
        if (i < number) output += ', ';
    }
    console.log(output);
    
}
