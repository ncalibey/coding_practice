function multiplyNumeric(obj) {
  var prop;

  for (prop in obj) {
    if (typeof obj[prop] === 'number') obj[prop] *= 2;
  }
}

var menu = {
  width: 200,
  height: 300,
  title: "My menu"
};

multiplyNumeric(menu);
console.log(menu);
