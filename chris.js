function additem($array) {
    let newNumber = array.length + 1;
    array.push(newNumber);
}

function copyArray(array) {
    array = [];
}

let array = [1, 2, 3];

console.log(`Voor de push: ${array}`);
additem(array);
console.log(`na de push: ${array}`);
console.log(`Voor de toewijzing: ${array}`);
copyArray(array);
console.log(`Na de toewijzing: ${array}`);