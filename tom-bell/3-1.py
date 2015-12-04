i = open('3.txt').read()
m = set(['0,0'])
(x, y) = 0, 0
for c in i:
	x += {'>': 1, '<': -1}.get(c, 0)
	y += {'^': 1, 'v': -1}.get(c, 0)
	m.add("{},{}".format(x, y))
print(len(m))