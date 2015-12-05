def vowel_count(s):
	return s.count('a') + s.count('e') + s.count('i') + s.count('o') + s.count('u')


def repeats_letter(s):
	old = ''
	for c in s:
		if c == old:
			return True
		old = c
	return False


banned = ["ab", "cd", "pq", "xy"]
def contains_banned(s):
	for b in banned:
		if b in s:
			return True
	return False


def nice(s):
	return vowel_count(s) > 2 and repeats_letter(s) and not contains_banned(s)


n = 0
with open('5.txt') as f:
	for l in f:
		if nice(l):
			n += 1
print(n)