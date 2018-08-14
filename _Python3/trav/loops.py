#LOOPS 
people = ['JS', 'Vue Js', 'PHP', 'Python']

print('----------BASIC FOR LOOP------------------')	
for person in people: 
	print('Current Person:', person)

print('----------FOR LOOP WITH RANGE------------------')	
#Iteration by seq index
for i in range(len(people)):
	print('Current Person: ', people[i])		

print('----------WHILE LOOP------------------')
count = 0

while count <= 10:
	print('Count:', count)
	if count == 5:
		break
	count = count + 1 