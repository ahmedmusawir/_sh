#VARIABLES

greet = 'Whadap?'
print(greet)
var1 = 'abcd'
var2 = 'efgh'
var1 = var2
var1 = 'wtf'
print('-------------------')
print(f'value of var2: {var2}')
print(f'value of var1: {var1}')
print(f'value of var2 after var1 changed: {var2}')
print('-------------------')

#DATA TYPES
myStr = 'Hello'
myInt = 25
myFloat = 1.3

myList = [1,2,3,'Whadap']
myDict = {'a':1, 'b':2, 'c':3}

print('-------------------')
print(type(myStr), myStr)
print(type(myInt), myInt)
print(type(myFloat), myFloat)
print(type(myList), myList)
print(type(myDict), myDict)
print('-------------------')
print(f'4th item from myList: {myList[3]}')
print(f"The value of b: {myDict['b']}")
print('-------------------')
print(myStr, 'World')
print('-------------------')
greeting = myStr + ' Planet'
print (greeting)
print('-------------------')


