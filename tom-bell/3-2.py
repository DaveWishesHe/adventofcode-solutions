i = open('3.txt').read()
m = set(['0,0'])
p = [[0, 0], [0, 0]]
t = 0
for c in i:
	p[t][0] += {'>': 1, '<': -1}.get(c, 0)
	p[t][1] += {'^': 1, 'v': -1}.get(c, 0)
	m.add("{},{}".format(p[t][0], p[t][1]))
	t = not t
print(len(m))