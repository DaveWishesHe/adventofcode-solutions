def tokenize(s, exclude):
	out = []
	i, j = -1, 1
	while j < len(s):
		i += 1
		j += 1
		if i >= exclude[0] and i < exclude[1] or j >= exclude[0] and j < exclude[1]:
			continue
		out.append(s[i:j])
	return out


def repeats_two_chars(s):
	i, j = 0, 2
	while j < len(s):
		selected = s[i:j]
		tokens = tokenize(s, (i, j))
		if selected in tokens:
			return True
		i += 1
		j += 1
	return False


def has_flanked_letter(s):
	i, j = 0, 3
	while j < len(s):
		selected = s[i:j]
		if selected[0] == selected[2]:
			return True
		i += 1
		j += 1
	return False


def nice(s):
	return repeats_two_chars(s) and has_flanked_letter(s)


n = 0
with open('5.txt') as f:
	for l in f:
		if nice(l):
			n += 1
print(n)