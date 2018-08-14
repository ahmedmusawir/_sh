#STRING FUNCTIONS

myStr = 'hello world'

#CAPITALIZE 
print(myStr.capitalize())

#Swap case
print(myStr.swapcase())

#Get Length 
print(len(myStr))

#Replace
print(myStr.replace('world', 'Everyone'))

#Count
sub = "l"
print(myStr.count(sub))

#Starts with
print(myStr.startswith('hello'))

#Ends with 
print(myStr.endswith('!'))

#Find
print(myStr.find('w')) #returns -1 when not found

#Index
print(myStr.index('w')) #returns an error message

#Is alphabetic
print(myStr.isalpha())

#Is alphanummeric
print(myStr.isalnum())

#is numeric
print(myStr.isnumeric())
