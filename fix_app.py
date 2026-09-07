import re

with open('app.js', 'r') as f:
    js = f.read()

# Remove estPrice references and calculations
js = re.sub(r"const estPrice = document\.getElementById\('est-price'\);\n", "", js)
js = re.sub(r"let basePrice = 10\.0;.*?const unitPrice = \(basePrice \+ addOns\) \* discountMultiplier;\n", "", js, flags=re.DOTALL)
js = re.sub(r"estPrice\.innerText = `\$\{unitPrice\.toFixed\(2\)\}`;", "", js)

# Remove price text and projected price from specs
js = re.sub(r"const priceText = estPrice\.innerText;\n", "", js)
js = re.sub(r"- Projected Price: \$\{priceText\}/unit\\n", "", js)

with open('app.js', 'w') as f:
    f.write(js)

print("Fixed app.js")
