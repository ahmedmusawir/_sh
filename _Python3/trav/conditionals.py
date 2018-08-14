#CONDITIONALS

x = 4 

#BASIC IF 
if x < 6 : 
	print(f'{x} is less than 6')
	
#IF ELSE 
if x < 6: 
	print('This is true')
else: 
	print('This is false')	
	
#ELSE IF 
color = 'red'

if color == 'red':
	print('Color is red')
elif color == 'blue':
	print('Color is blue')
else: 
	print('Color is not red or blue')	
	
#NESTED IF 
if color == 'red': 
	if x < 10: 
		print('Color is red and x is less than 10')
		
#LOGICAL
if color == 'red' and x < 10: 
	print('Color is red and x is less than 10')




