import sys
import hashlib
i = sys.argv[1]
r = 1
while hashlib.md5("{}{}".format(i, r).encode()).hexdigest()[:len(sys.argv[2])] != sys.argv[2]:
	r += 1
print(r)