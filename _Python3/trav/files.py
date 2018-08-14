#Open a file
fo = open('test.txt', 'w')

print('-----------------------')
print('Writing File')
print('-----------------------')
#Get some info
print('Name: ', fo.name)
print('Is Closed: ', fo.closed)
print('Opening Mode: ', fo.mode)

#Write to file
fo.write('I love Python \n')
fo.write('And I love Javascript \n')
fo.close()

print('Is Closed: ', fo.closed)

#Open to append
fo = open('test.txt', 'a')
fo.write('I also like PHP \n')
fo.close()

#Open to read 
print('-----------------------')
print('Reading File')
print('-----------------------')
fo = open('test.txt', 'r+')
text = fo.read()
print(text)
fo.close()
