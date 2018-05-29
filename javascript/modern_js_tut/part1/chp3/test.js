describe("pow", function() {

  describe("raises x to power n", function() {

    function makeTest(x) {
      let expected = x * x * x;
      it(`${x} to the power of 3 is ${expected}`, function () {
        assert.strictEqual(pow(x, 3), expected);
      });
    }

    for (let x = 1; x <= 5; x += 1) {
      makeTest(x);
    }

  });

  it("for negative n the result is NaN", function() {
    assert.isNaN(pow(2, 1.5));
  })

  it("for non-integer n the result is NaN", function() {
    assert.isNaN(pow(2, 1.5));
  });

});
