function sumSalaries(obj) {
  var sum = 0;
  for (let name in obj) {
    sum += obj[name];
  }
  return sum;
}

let salaries = {
  John: 100,
  Ann: 160,
  Pete: 130,
};

console.log(sumSalaries(salaries));
