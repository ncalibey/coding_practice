let calculator = {
  read(a, b) {
    this.a = Number(prompt('value 1', 0));
    this.b = Number(prompt('value 2', 0));
  },
  sum() { return this.a + this.b; },
  mul() { return this.a * this.b; },
};
